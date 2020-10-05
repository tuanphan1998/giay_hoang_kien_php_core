<?php 
require_once('./model/model.php');
$model = new Model();
$listdanhmuc = $model->getsDanhMuc();
require_once('view/header.php'); ?>
        <div class="row">
            <div class="col-12">
                <h1 class="text-center h3 mt-4">Hoàng Kiên</h1>
                <div class="row bored">
                    <div class="col-6">
                        <b>Địa chỉ:</b>Thành phố Thái Nguyên, Thái Nguyên <br>
                        <b>Điện thoại:</b> 0888 222 555
                    </div>
                </div>
                
            </div>
            <div class="col-12">
                <img src="assets/diachi2.png"  class="mw-100" alt="">
            </div>
        </div>
    <!-- footer -->
  <footer class="bd-footer text-muted">
  <div class="container-fluid p-3 p-md-5">
    <ul class="bd-footer-links">
      <li><a href="index.php"><i class="fas fa-cube"></i> Trang chủ</a></li>
      <li><a href="gioithieu.php"><i class="fas fa-cube"></i> Đội ngũ</a></li>
      <li><a href="dieukhoan.php"><i class="fas fa-cube"></i> Điều khoản</a></li>
      <li><a href="khieunai.php"><i class="fas fa-cube"></i> Khiếu nại</a></li>
    </ul>
    <p><b>Địa chỉ :</b> Số nhà 23 - Ngõ 106 - Tân Thịnh,TP.Thái Nguyên</p>
    <p class="float-left">Hệ thống website được thiết kế bởi <b>Hoàng Kiên</b> © <b>2020</b>.</p>
    <a href="#top" class="float-right" style="font-size: 25px" alt="lên đầu trang" title="lên đầu trang"><i class="fas fa-caret-square-up"></i></a>
  </div>
</footer>
            </div>
<?php require_once('view/footer.php'); ?>