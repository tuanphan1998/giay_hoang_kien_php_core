<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $sanpham['ten'] ?> - Giày Hoàng Kiên</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            margin-top: 56px;
            font-family: Helvetica Neue, sans-serif;
        }
        
        .sidebar-sticky {
            z-index: 0 !important;
            margin-top:56px;
            height: 100%;
        }

        .bd-footer {
            text-align: left;
            font-size: .875rem;
            background-color: #E0E0E0;
        }

        .bd-footer-links li {
            display: inline-block;
        }

        .bd-footer a {
            font-weight: 600;
            color: #495057;
        }

        .bd-footer-links {
            padding-left: 0;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0"></script>
    <?php require_once('./view/navbar.php') ?>
    <!-- main -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar-sticky fixed-top px-1 col-2 border-right">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1  text-info">
                      <span><i class="fas fa-plus-circle"></i> Danh mục sản phẩm</span>
                      
                    </h6>
                    <ul class="nav flex-column">
                        <?php while($data = $listdanhmuc->fetch_assoc()){ ?>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="danhmuc.php?id=<?php echo $data['id_danhmuc'] ?>">
                                <i class="fas fa-angle-right"></i> <?php echo $data['ten'] ?>
                            </a>
                        </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">
                                <i class="fas fa-angle-right"></i> Phụ kiện hãng khác
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-info">
          <span><i class="fas fa-plus-circle"></i> Website</span>
        </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">
                                <i class="fas fa-angle-right"></i> Chính sách bảo hành
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">
                                <i class="fas fa-angle-right"></i> Đổi trả hàng
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">
                                <i class="fas fa-angle-right"></i> Tin tức
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success" style="border-bottom: 1px dashed #ccc">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-success"><i class="fas fa-home"></i> Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="danhmuc.php?id=<?php echo $danhmuc['id_danhmuc'] ?>" class="text-success"><?php echo $danhmuc['ten'] ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $sanpham['ten'] ?></li>
                      </ol>
                    </nav>
                </h6>
                <!-- pk noi bat -->
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo $sanpham['anhdaidien'] ?>" style="max-width: 100%;border: 1px dashed #ccc;" alt="<?php echo $sanpham['ten'] ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="product-title py-1">
                            <h1 class="h3 text-success"><?php echo $sanpham['ten'] ?></h1>
                        </div>
                        <div class="product-price py-1">
                            <span class="h4 text-danger"><?php echo $sanpham['gia'] ?> VNĐ</span> <span style="text-decoration: line-through;"><?php echo $sanpham['gia']+50000 ?> VNĐ</span>
                        </div>
                        <form action="sanpham.php?task=addtocart" method="POST">
                        <input type="hidden" name="id" value="<?php echo $sanpham['id_sanpham'] ?>">
                        <div class="product-option py-1">
                            <span class="h6">Màu sắc : </span>
                            <?php 
                            //Xử lý màu sắc
                            $mang_mausac = explode('|', $sanpham['mausac']);
                             ?>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <?php foreach($mang_mausac as $key=>$mausac){ ?>
                                <label class="btn btn-secondary">
                                    <input type="radio" <?php if($key==0) echo 'checked'; ?> name="mausac" id="<?php echo $key ?>" autocomplete="off" value="<?php echo $mausac ?>"> <?php echo $mausac ?>
                                </label>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="product-soluong py-1">
                            <span class="h6">Số lượng :</span>
                            <input type="number" value="1" min="1" max="100" class="form-control" style="display: inline;width: 4em;" name="soluong">
                        </div>
                        <div class="py-1">
                            <?php if(isset($_SESSION['user_data'])){ ?>
                            <button class="btn btn-outline-success"><i class="fas fa-cart-plus"></i> Thêm vào giỏ</button>
                            </form>
                            <a href="hoadon.php?id=<?php echo $_GET['id'] ?>" class="btn btn-success">Đặt mua</a>
                            <?php } else { ?>
                            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-cart-plus"></i> Thêm vào giỏ</button>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Đặt mua</button>
                            <?php } ?>
                        </div>
                        <div class="py-1">
                            <h6>Thông tin lưu ý :</h6>
                            <p>Hoàn tiền 100% nếu chất lượng sản phẩm không như cam kết</p>
                            <p>Phản hồi chất lượng dịch vụ: 0938.284.482</p>
                            <p>Hotline: <b>0888 663 333</b> | Hoạt động từ 8h30 đến 18h00 (T2-T7)</p>
                        </div>
                    </div>
                </div>
                <!-- tab -->
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active text-success" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Mô tả sản phẩm</a>
                        <a class="nav-item nav-link text-success" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Bình luận</a>
                        <a class="nav-item nav-link text-success" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Sản phẩm liên quan</a>
                    </div>
                </nav>
                <div class="tab-content border border-top-0 p-2" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <?php echo $sanpham['mota'] ?>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="fb-comments" data-href="http://remax.com/set_<?php echo $_GET['id']?> " data-width="" data-numposts="5"></div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        
                        <div class="card-deck mb-3 text-center">
                            <?php if(isset($dulieutrong)){
                                echo '<h2 class="center">Danh mục chưa có sản phẩm nào !</h2>';
                            } else {
                            ?>
                            <?php $i=0;while($data = $sanphamtuongtu->fetch_assoc()){ ?>
                            <div class="card mb-4 shadow-sm">
                                <img src="<?php echo $data['anhdaidien'] ?>" height="200px" class="card-img-top border-bottom" alt="<?php echo $data['ten'] ?>">
                                <div class="card-body">
                                    <h6 class="card-title"><?php echo $data['ten'] ?></h6>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li><span style="color: red"><?php echo $data['gia'] ?></span> <small class="text-muted" style="text-decoration: line-through">$200.000</small></li>
                                    </ul>
                                </div>
                                <div class="card-footer bg-transparent border-0 row justify-content-center">
                                    <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="btn btn-success col-6 rounded-0">Xem</a>
                                    <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="btn btn-info col-6 rounded-0">Đặt hàng</a>
                                </div>
                            </div>
                            <?php } }?>
                        </div>
                    </div>
                </div>
                <!-- endtab -->
            <!-- footer -->
              <footer class="bd-footer text-muted mt-5">
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
              </div>
            </footer>
            
<?php require_once('./view/footer.php') ?>