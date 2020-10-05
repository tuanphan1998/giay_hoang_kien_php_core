<?php require_once('header.php'); ?>
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $danhmuc['ten'] ?></li>
          </ol>
        </nav>
    </h6>
    <!-- sản phẩm nổi bật -->
    
        
        <?php 
        for ($i = 0; $i < $getTotalPage; $i++) {
                
        echo '<div class="card-deck mb-3 text-center">';
        $dm = $this->model->getsDanhMuc2($_GET['id'],$i*$limit,$limit);
        while($f = $dm->fetch_assoc()){ ?>
          <div class="card mb-4 shadow-sm col-3">
            <img src="<?php echo $f['anhdaidien'] ?>" height="200px" class="card-img-top border-bottom" alt="<?php echo $f['ten'] ?>">
            <div class="card-body">
                <h6 class="card-title"><?php echo $f['ten'] ?></h6>
                <ul class="list-unstyled mt-3 mb-4">
                    <li><span style="color: red"><?php echo $f['gia'] ?></span> <small class="text-muted" style="text-decoration: line-through">$200.000</small></li>
                </ul>
            </div>
            <div class="card-footer bg-transparent border-0 row justify-content-center">
                <a href="sanpham.php?id=<?php echo $f['id_sanpham'] ?>" class="btn btn-success col-6 rounded-0">Xem</a>
                <a href="sanpham.php?id=<?php echo $f['id_sanpham'] ?>" class="btn btn-info col-6 rounded-0">Đặt hàng</a>
            </div>
        </div>
        
        <?php } ?>
        <?php echo '</div>';}?>
        
    <!-- end sản phẩm nổi bật -->
    <!-- footer -->
  <footer class="bd-footer text-muted">
  <div class="container-fluid p-3 p-md-5">
    <ul class="bd-footer-links">
      <li class="mr-2"><a href="index.php"><i class="fas fa-home"></i> Trang chủ</a></li>
      <li class="mr-2"><a href="gioithieu.php"><i class="fas fa-users"></i> Đội ngũ</a></li>
      <li class="mr-2"><a href="dieukhoan.php"><i class="fas fa-bookmark"></i> Điều khoản</a></li>
      <li class="mr-2"><a href="khieunai.php"><i class="fas fa-envelope"></i> Liên hệ</a></li>
    </ul>
    <p><b>Địa chỉ :</b> Số nhà 23 - Ngõ 106 - Tân Thịnh,TP.Thái Nguyên</p>
    <p class="float-left">Hệ thống website được thiết kế bởi <b>Hoàng Kiên</b> © <b>2020</b>.</p>
    <a href="#top" class="float-right" style="font-size: 25px" alt="lên đầu trang" title="lên đầu trang"><i class="fas fa-caret-square-up"></i></a>
  </div>
</footer>
</div>
<?php require_once('footer.php'); ?>