<?php require_once('./view/header.php') ?>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thành viên</li>
                      </ol>
                    </nav>
                </h6>
                <!-- Đăng ký thành viên -->
                <div class="row pb-3">
                    <div class="col-6 border-right">
                        <h2 class="h6 text-center">Đăng ký thành viên</h2>
                        <?php if(isset($error2)) { ?>
                        <div class="alert alert-danger" role="alert">
                            Đăng ký không thành công !
                        </div>
                        <?php } ?>
                        <form action="quanly.php?task=dangky" method="POST">
                            <div class="form-group">
                                <label for="tendangnhap">Tên đăng nhập</label>
                                <input type="text" class="form-control <?php if(isset($tendangnhap_error)) echo 'is-invalid'; ?>" placeholder="tên đăng nhập" name="tendangnhap">
                                <div class="invalid-feedback">Tên đăng nhập là bắt buộc</div>
                            </div>
                            <div class="form-group">
                                <label for="matkhau">Mật khẩu</label>
                                <input type="password" class="form-control <?php if(isset($matkhau_error)) echo 'is-invalid'; ?>" placeholder="mật khẩu" name="matkhau">
                                <div class="invalid-feedback">Mật khẩu là bắt buộc</div>
                            </div>
                            <div class="form-group">
                            <label for="hoten">Họ tên</label>
                            <input type="text" class="form-control <?php if(isset($hoten_error)) echo 'is-invalid'; ?>" placeholder="điền họ và tên" name="hoten">
                            <div class="invalid-feedback">Họ và tên là bắt buộc</div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="email">Email</label>
                              <input type="email" class="form-control <?php if(isset($email_error)) echo 'is-invalid'; ?>" placeholder="điền email" name="email">
                              <div class="invalid-feedback">Email là bắt buộc</div>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="sodienthoai">Số điện thoại</label>
                              <input type="tel" class="form-control <?php if(isset($sodienthoai_error)) echo 'is-invalid'; ?>" placeholder="điền số điện thoại" name="sodienthoai">
                              <div class="invalid-feedback">Số điện thoại là bắt buộc</div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="diachi">Địa chỉ</label>
                            <input type="text" class="form-control <?php if(isset($diachi_error)) echo 'is-invalid'; ?>" placeholder="điền địa chỉ của bạn" name="diachi">
                            <div class="invalid-feedback">Địa chỉ là bắt buộc</div>
                          </div>
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="agree" name="agree" value="ok" checked>
                              <label class="form-check-label" for="agree">
                                Đồng ý với <a href="#">Điều Khoản</a> của website.
                              </label>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-success">Đăng ký</button>
                        </form>
                    </div>
                    <!-- Đăng nhập thành viên -->
                    <div class="col-6">
                        <h2 class="h6 text-center">Đăng nhập</h2>
                        <?php if(isset($error3)) { ?>
                        <div class="alert alert-danger" role="alert">
                            Đăng nhập thất bại !
                        </div>
                        <?php } ?>
                        <form action="quanly.php?task=dangnhap" method="POST">
                            <div class="form-group">
                                <label for="tendangnhap">Tên đăng nhập</label>
                                <input type="text" class="form-control <?php if(isset($error)) echo 'is-invalid'; ?>" placeholder="tên đăng nhập" name="tendangnhap">
                                <div class="invalid-feedback">Chưa điền tên đăng nhập</div>
                            </div>
                            <div class="form-group">
                                <label for="matkhau">Mật khẩu</label>
                                <input type="password" class="form-control <?php if(isset($error)) echo 'is-invalid'; ?>" placeholder="mật khẩu" name="matkhau">
                                <div class="invalid-feedback">Chưa điền mật khẩu</div>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="remember">
                              <label class="form-check-label" for="remember">
                                Lưu mật khẩu
                              </label>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit">Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>