<?php require_once('./view/header.php'); ?>
<h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="quanly.php?task=qltv">Thành viên</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cài đặt</li>
      </ol>
    </nav>
</h6>
<div class="row">
    <div class="col-6 pb-2">
    	<?php if(isset($ketqua)&&$ketqua){ ?>
        <div class="alert alert-success" role="alert">
          Thay đổi thông tin thành công !
        </div>
        <?php } elseif(isset($ketqua)&&!$ketqua) { ?>
          <div class="alert alert-danger" role="alert">
            Thay đổi thông tin thất bại !
          </div>
        <?php } ?>
        <form method="POST">
          <div class="form-group">
            <label for="hoten">Họ và tên</label>
            <input type="text" class="form-control <?php if(isset($error_ten)) echo 'is-invalid'; ?>" id="hoten" placeholder="điền họ và tên" <?php echo 'value="'.$_SESSION['user_data']['hoten'].'"' ?> name="hoten">
            <div class="invalid-feedback">Họ và tên thành viên không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control <?php if(isset($error_gia)) echo 'is-invalid'; ?>" id="email" placeholder="điền email của người dùng" <?php echo 'value="'.$_SESSION['user_data']['email'].'"' ?> name="email">
            <div class="invalid-feedback">Email không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="sodienthoai">Số điện thoại</label>
            <input type="number" name="sodienthoai" id="sodienthoai" class="form-control <?php if(isset($error_mota)) echo 'is-invalid'; ?>" placeholder="điền số điện thoại" value="<?php echo $_SESSION['user_data']['sodienthoai'] ?>">
            <div class="invalid-feedback">Số điện thoại không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="diachi">Địa chỉ</label>
            <input type="text" class="form-control <?php if(isset($error_anhdaidien)) echo 'is-invalid'; ?>" name="diachi" <?php echo 'value="'.$_SESSION['user_data']['diachi'].'"' ?> placeholder="điền địa chỉ">
            <div class="invalid-feedback">Địa chỉ không được bỏ trống</div>
          </div>
          <div class="form-group">
            <p>
              <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Thay đổi mật khẩu
              </a>
            </p>
            <div class="collapse" id="collapseExample">
                <input type="password" class="form-control" id="matkhau" placeholder="nhập mật khẩu mới" name="matkhau">
            </div>
          </div>
          <button type="submit" class="btn btn-warning" name="ok">Sửa thông tin</button>
        </form>
    </div>
</div>
<?php require_once('./view/footer.php') ?>