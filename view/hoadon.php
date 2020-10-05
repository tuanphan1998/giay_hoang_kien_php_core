<?php require_once('./view/header.php'); ?>
<h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success" style="border-bottom: 1px dashed #ccc">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="giohang.php"><i class="fas fa-home"></i> Giỏ hàng</a></li>
        <li class="breadcrumb-item active" aria-current="page">Thông tin giao hàng</li>
      </ol>
    </nav>
</h6>
<!-- hoa don -->
<div class="row">
    <div class="col-md-6">
        <h1 class="h4">Thông tin giao hàng</h1>
        <form method="POST" action="hoadon.php?task=themhoadon">
            <?php if(isset($_GET['id'])){ ?><input type="hidden" name="idspp" value="<?php echo $_GET['id'] ?>"><?php } ?>
            <div class="form-group">
            <label for="hoten">Họ tên</label>
            <input type="text" class="form-control" id="hoten" name="hoten" placeholder="điền họ và tên" value="<?php echo $_SESSION['user_data']['hoten'] ?>">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="điền email" value="<?php echo $_SESSION['user_data']['email'] ?>">
            </div>
            <div class="form-group col-md-6">
              <label for="sodienthoai">Số điện thoại</label>
              <input type="tel" class="form-control" id="sodienthoai" name="sodienthoai" placeholder="điền số điện thoại" value="<?php echo $_SESSION['user_data']['sodienthoai'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="diachi">Địa chỉ</label>
            <input type="text" class="form-control" id="diachi" name="diachi" placeholder="điền địa chỉ nhận" value="<?php echo $_SESSION['user_data']['diachi'] ?>">
          </div>
          <div class="form-group">
            <label for="pttt">Phương thức thanh toán</label>
              <select id="pttt" name="thanhtoan" class="form-control">
                <option value="0" selected>Thanh toán khi nhận hàng</option>
                <option value="1">Thanh toán qua ATM</option>
              </select>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck" checked>
              <label class="form-check-label" for="gridCheck">
                Đồng ý với <a href="#">Điều Khoản</a> của cửa hàng.
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Xác nhận</button>
        </form>
    </div>
    <div class="col-md-6 border-left">
        <!-- don hang -->
        <?php if(isset($_GET['id'])){ ?>
          <div class="row border-bottom py-1">
            <div class="col-3">
                <img src="<?php echo $sanpham['anhdaidien'] ?>" alt="<?php echo $sanpham['ten'] ?>" class="mw-100 border rounded">
            </div>
            <div class="col-6">
                <p><a href="sanpham.php?id=<?php echo $_GET['id'] ?>"><?php echo $sanpham['ten'] ?></a> (1)</p>
                <p><?php echo $sanpham['mausac'] ?></p>
            </div>
            <div class="col-3">
                <?php echo $sanpham['gia'] ?>
            </div>
        </div>

        <?php } else { ?>
        <?php if(empty($_SESSION['giohang'])){
            echo '<h1 class="h5">Chưa có sản phẩm nào trong giỏ !</h1>';
            } else { ?>
        <?php foreach($_SESSION['giohang'] as $key=>$data){ ?>
        <?php if($key!='tongtien'){ ?>
        <div class="row border-bottom py-1">
            <div class="col-3">
                <img src="<?php echo $this->model->getSanPham($key)['anhdaidien'] ?>" alt="<?php echo $data['ten'] ?>" class="mw-100 border rounded">
            </div>
            <div class="col-6">
                <p><a href="sanpham.php?id=<?php echo $key ?>"><?php echo $data['ten'] ?></a> (<?php echo $data['soluong'] ?>)</p>
                <p><?php echo $data['mausac'] ?></p>
            </div>
            <div class="col-3">
                <?php echo $data['thanhtien'] ?>
            </div>
        </div>
        <?php }}}} ?>
        <!-- end don hang -->
        <div class="row justify-content-between py-2">
            <div class="col-3">Tạm tính</div>
            <div class="col-3"><?php if(isset($_GET['id'])){ echo $sanpham['gia']; } else { echo $_SESSION['giohang']['tongtien'];} ?> VNĐ</div>
        </div>
        <div class="row justify-content-between py-2">
            <div class="col-3">Phí vận chuyển</div>
            <div class="col-3">30000 VND</div>
        </div>
        <div class="row justify-content-between border-top py-2">
            <div class="col-3 h6">Tổng cộng</div>
            <div class="col-3 h6"><?php if(isset($_GET['id'])){ echo $sanpham['gia']+30000;} else { echo $_SESSION['giohang']['tongtien']+30000; } ?> VNĐ</div>
        </div>
    </div>
</div>

<?php require_once('./view/footer.php'); ?>