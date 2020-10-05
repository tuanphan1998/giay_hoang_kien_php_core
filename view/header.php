<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Giày Hoàng Kiên</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">
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
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-info">
          <span><i class="fas fa-plus-circle"></i> Website</span>
        </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="dieukhoan.php">
                                <i class="fas fa-angle-right"></i> Chính sách bảo hành
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="doitra.php">
                                <i class="fas fa-angle-right"></i> Đổi trả hàng
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="lienhe.php">
                                <i class="fas fa-angle-right"></i> Liên hệ
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 bg-light">