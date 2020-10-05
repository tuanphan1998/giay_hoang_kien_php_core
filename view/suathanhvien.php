<?php require_once('./view/header_quanly.php'); ?>
<h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="quanly.php?task=qltv">Thành viên</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $nguoidung['tendangnhap'] ?></li>
      </ol>
    </nav>
</h6>
<!-- Sửa thành viên -->
<div class="row">
    <div class="col-6 pb-2">
    	<?php if(isset($ketqua)&&$ketqua){ ?>
        <div class="alert alert-success" role="alert">
          Sửa thành viên thành công !
        </div>
        <?php } elseif(isset($ketqua)&&!$ketqua) { ?>
          <div class="alert alert-danger" role="alert">
            Sửa thành viên thất bại !
          </div>
        <?php } ?>
        <form method="POST">
          <div class="form-group">
            <label for="hoten">Họ và tên</label>
            <input type="text" class="form-control <?php if(isset($error_ten)) echo 'is-invalid'; ?>" id="hoten" placeholder="điền họ và tên người dùng" <?php echo 'value="'.$nguoidung['hoten'].'"' ?> name="hoten">
            <div class="invalid-feedback">Họ và tên thành viên không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control <?php if(isset($error_gia)) echo 'is-invalid'; ?>" id="email" placeholder="điền email của người dùng" <?php echo 'value="'.$nguoidung['email'].'"' ?> name="email">
            <div class="invalid-feedback">Email không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="sodienthoai">Số điện thoại</label>
            <input type="number" name="sodienthoai" id="sodienthoai" class="form-control <?php if(isset($error_mota)) echo 'is-invalid'; ?>" placeholder="điền số điện thoại" value="<?php echo $nguoidung['sodienthoai'] ?>">
            <div class="invalid-feedback">Số điện thoại không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="diachi">Địa chỉ</label>
            <input type="text" class="form-control <?php if(isset($error_anhdaidien)) echo 'is-invalid'; ?>" name="diachi" <?php echo 'value="'.$nguoidung['diachi'].'"' ?> placeholder="điền địa chỉ">
            <div class="invalid-feedback">Địa chỉ không được bỏ trống</div>
          </div>
          <div class="form-group">
            <p>
              <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Đặt mật khẩu mới
              </a>
            </p>
            <div class="collapse" id="collapseExample">
                <input type="password" class="form-control" id="matkhau" placeholder="nhập mật khẩu mới" name="matkhau">
            </div>
          </div>
          <button type="submit" class="btn btn-warning" name="ok">Sửa thành viên</button>
        </form>
    </div>
</div>

<!-- end Sửa sản phẩm -->
<?php require_once('./view/footer_quanly.php') ?>