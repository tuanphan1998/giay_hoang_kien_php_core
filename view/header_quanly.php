<?php if(empty($_SESSION['user_data'])) header("location:index.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Quản lý - Website Hoàng Kiên</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">
    <style>
        body {
            margin-top: 56px;
        }
        
        .sidebar-sticky {
            z-index: 0 !important;
            margin-top:56px;min-height: 100%;border-right: 1px solid #ccc;
        }
        
        input {
            max-width: 100%;
        }
        
        .card-body-icon {
            position: absolute;
            z-index: 0;
            top: -1.25rem;
            right: -1rem;
            opacity: 0.4;
            font-size: 5rem;
            -webkit-transform: rotate(15deg);
            transform: rotate(15deg);
        }
    </style>
</head>

<body>
    <?php require_once('./view/navbar.php') ?>
    <!-- main -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar-sticky fixed-top px-1 col-2">
                    <!-- <div class="px-1"> -->
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1  text-secondary">
                      <a href="quanly.php" class="text-muted" style="text-decoration: none;"><i class="fas fa-home"></i> <b>Thống kê</b></a>

                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-muted" data-toggle="collapse" href="#qldm" role="button" aria-expanded="false" aria-controls="qldm">
                                <i class="fas fa-list-ol"></i> <b>Danh mục</b>
                            </a>
                        </li>
                        <div class="collapse" id="qldm">
                            <ul>
                                <li><a href="quanly.php?task=qldm">Danh sách danh mục</a></li>
                                <li><a href="quanly.php?task=tdm">Thêm danh mục</a></li>
                            </ul>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link text-muted" data-toggle="collapse" href="#qlsp" role="button" aria-expanded="false" aria-controls="qlsp">
                                <i class="fas fa-shopping-cart"></i> <b>Sản phẩm</b>
                            </a>
                        </li>
                        <div class="collapse" id="qlsp">
                            <ul>
                                <li><a href="quanly.php?task=qlsp">Danh sách sản phẩm</a></li>
                                <li><a href="quanly.php?task=tsp">Thêm sản phẩm</a></li>
                            </ul>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="quanly.php?task=qltv">
                                <i class="fas fa-users"></i> <b>Thành viên</b>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="quanly.php?task=qlhd">
                                <i class="fas fa-clipboard"></i> <b>Hóa đơn</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">