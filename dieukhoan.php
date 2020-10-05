<?php 
require_once('./model/model.php');
$model = new Model();
$listdanhmuc = $model->getsDanhMuc();
require_once('view/header.php'); ?>
        <div class="row">
            <div class="col-12">
                <h1 class="text-center h3 mt-4">CHÍNH SÁCH BẢO HÀNH TIÊU CHUẨN</h1>
            </div>
            <div class="col-12">
                Các sản phẩm chính hãng, Quý khách hàng có thể tới trực tiếp các TTBH chính hãng; Trung tâm Bảo hành ủy quyền hoặc có thể đến trực tiếp các cửa hàng của Hoàng Kiên để được tiếp nhận gửi máy bảo hành chính hãng. <br>
            </div>
            <div class="col-12">
                <br>
                <h5>Điều kiện đổi trả:</h5>
                <ul>
                    <li>Sản phẩm: Giữ nguyên hiện trạng ban đầu, không trầy xướt, không dán decal, hình trang trí. Giày có tình trạng sản phẩm như lúc mới mua. </li>
                    <li>Hộp: Như mới, không móp méo, rách, vỡ, bị viết, vẽ, quấn băng dính, keo;(mất hộp trừ phí 2%). </li>
                    <li>Phụ kiện và quà tặng: Còn đầy đủ, nguyên vẹn, không móp méo trầy xước hoặc bị hư hại trong quá trình sử dụng. </li>
                </ul>
                <br>
                <br>
                <br>
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