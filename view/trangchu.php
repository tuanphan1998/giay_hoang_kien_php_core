<?php require_once('header.php'); ?>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img style="height:400px !important" src="assets/1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img style="height:400px !important" src="assets/2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img style="height:400px !important" src="assets/3.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-2 text-info">
		          <span><i class="fas fa-cube"></i>  Sản phẩm nổi bật</span>
		          <a class="d-flex align-items-center text-info" href="#">
		            Xem thêm <i class="fas fa-chevron-right"></i>
		          </a>
		        </h6>
                <!-- sản phẩm nổi bật -->
                <div class="card-deck mb-3 text-center">
                    <?php while($data = $listsanpham->fetch_assoc()){ ?>
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo $data['anhdaidien'] ?>" height="200px" class="card-img-top border-bottom" alt="<?php echo $data['ten'] ?>">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $data['ten'] ?></h6>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><span style="color: red"><?php echo $data['gia'] ?> VNĐ</span> <small class="text-muted" style="text-decoration: line-through"><?php echo $data['gia']+50000 ?> VNĐ</small></li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0 row justify-content-center">
                            <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="btn btn-success col-6 rounded-0">Xem</a>
                            <a href="hoadon.php?id=<?php echo $data['id_sanpham'] ?>" class="btn btn-info col-6 rounded-0">Đặt hàng</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- end sản phẩm nổi bật -->
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-2 text-info">
		          <span><i class="fas fa-cube"></i>  Phụ kiện iphone</span>
		          <a class="d-flex align-items-center text-info" href="danhmuc.php?id=1">
                    Xem thêm <i class="fas fa-chevron-right"></i>
                  </a>
		        </h6>
                <!-- pk iphone -->
                <div class="card-deck mb-3 text-center">
                    <?php while($data = $listiphone->fetch_assoc()){ ?>
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo $data['anhdaidien'] ?>" height="200px" class="card-img-top border-bottom" alt="<?php echo $data['ten'] ?>">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $data['ten'] ?></h6>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><span style="color: red"><?php echo $data['gia'] ?> VNĐ</span> <small class="text-muted" style="text-decoration: line-through"><?php echo $data['gia']+50000 ?> VNĐ</small></li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0 row justify-content-center">
                            <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="btn btn-success col-6 rounded-0">Xem</a>
                            <a href="hoadon.php?id=<?php echo $data['id_sanpham'] ?>" class="btn btn-info col-6 rounded-0">Đặt hàng</a>
                        </div>
                    </div>
                    <?php } ?>

                </div>
                <!-- end pkip -->
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-2 text-info">
		          <span><i class="fas fa-cube"></i>  Phụ kiện samsung</span>
		          <a class="d-flex align-items-center text-info" href="danhmuc.php?id=2">
                    Xem thêm <i class="fas fa-chevron-right"></i>
                  </a>
		        </h6>
                <!-- pk samsung -->
                <div class="card-deck mb-3 text-center">
                    <?php while($data = $listsamsung->fetch_assoc()){ ?>
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo $data['anhdaidien'] ?>" height="200px" class="card-img-top border-bottom" alt="<?php echo $data['ten'] ?>">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $data['ten'] ?></h6>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><span style="color: red"><?php echo $data['gia'] ?> VNĐ</span> <small class="text-muted" style="text-decoration: line-through"><?php echo $data['gia']+50000 ?> VNĐ</small></li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0 row justify-content-center">
                            <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="btn btn-success col-6 rounded-0">Xem</a>
                            <a href="hoadon.php?id=<?php echo $data['id_sanpham'] ?>" class="btn btn-info col-6 rounded-0">Đặt hàng</a>
                        </div>
                    </div>
                    <?php } ?>

                </div>
                <!-- end pkss -->
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