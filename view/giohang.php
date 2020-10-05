<?php require_once('./view/header.php') ?>
<h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success" style="border-bottom: 1px dashed #ccc">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> Trang chủ</a></li>
        <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
      </ol>
    </nav>
</h6>
<!-- gio hang -->
<div class="row bg-light py-2 border-bottom">
    <div class="col-2 text-center font-weight-bold">Sản phẩm</div>
    <div class="col-3 text-center font-weight-bold">Thông tin sản phẩm</div>
    <div class="col-2 text-center font-weight-bold">Đơn giá</div>
    <div class="col-1 text-center font-weight-bold">Số lượng</div>
    <div class="col-2 text-center font-weight-bold">Thành tiền</div>
    <div class="col-2 text-center font-weight-bold">Tác vụ</div>
</div>
<?php if(empty($_SESSION['giohang'])){
    echo '<h1 class="h5">Chưa có sản phẩm nào trong giỏ !</h1>';
    } else { ?>
<?php foreach($_SESSION['giohang'] as $key=>$data){ ?>
<?php if($key!='tongtien'){ ?>
<div class="row border-bottom py-2">
    <div class="col-2 text-center">
        <img src="<?php echo $this->model->getSanPham($key)['anhdaidien'] ?>" class="mw-100 border rounded" alt="<?php echo $data['ten'] ?>">
    </div>
    <div class="col-3">
        <a class="h6 font-weight-bold" href="sanpham.php?id=<?php echo $key ?>"><?php echo $data['ten'] ?></a> <?php echo '('.$data['mausac'].')' ?>
    </div>
    <div class="col-2 text-center">
        <?php echo $data['dongia'] ?>
    </div>
    <div class="col-1 text-center">
        <input type="number" min="1" disabled value="<?php echo $data['soluong'] ?>" class="form-control mw-100">
    </div>
    <div class="col-2 text-center">
        <?php echo $data['thanhtien'] ?>
    </div>
    <div class="col-2 text-center">
        <a href="giohang.php?task=xoa&id=<?php echo $key ?>" class="btn btn-danger"><i class="fas fa-times"></i></a>
    </div>
</div>
<?php }}} ?>
<div class="row py-2">
    <div class="col-8 h6">Tổng tiền : </div>
    <div class="col-2 text-center"><?php if(!empty($_SESSION['giohang'])) echo $_SESSION['giohang']['tongtien'] ?></div>
    <div class="col-2 text-center"><a href="hoadon.php" class="btn btn-success <?php if($_SESSION['giohang']['tongtien']==0) echo 'disabled'; ?>"><i class="fas fa-angle-right"></i> Thanh toán</a></div>
</div>
<?php require_once('./view/footer.php') ?>