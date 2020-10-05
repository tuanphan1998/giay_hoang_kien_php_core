<nav class="navbar navbar-light bg-white shadow-sm fixed-top" style="background: #356690 !important;">
    <a href="index.php" class="navbar-brand h1 text-light">Giày Hoàng Kiên</a>
    <form class="form-inline mr-auto" method="GET" action="timkiem.php">
        <input class="form-control rounded-0" type="search" name="tukhoa" placeholder="Search" aria-label="Search">
        <button class="btn btn-info my-2 my-sm-0 rounded-left rounded-0" type="submit">Tìm kiếm</button>
    </form>
    <div class="dropdown mr-2">
        <a href="<?php if(isset($_SESSION['user_data'])){ echo 'quanly.php?task=dangxuat';} else { echo 'index.php?task=user';} ?>" class="btn btn-secondary <?php if(isset($_SESSION['user_data'])) echo 'dropdown-toggle'; ?>" <?php if(isset($_SESSION[ 'user_data'])) echo 'data-toggle="dropdown"';?>><i class="far fa-user"></i> 
          <?php 
            if(isset($_SESSION['user_data'])){ 
                echo $_SESSION['user_data']['tendangnhap'];
            } else { 
                echo 'Đăng ký / Đăng nhập';
            } ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <?php if($_SESSION['user_data']['level']==1){ ?>
            <a class="dropdown-item" href="quanly.php">Quản lý</a>
            <?php } ?>
            <a class="dropdown-item" href="index.php?task=caidat">Cài đặt</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="quanly.php?task=dangxuat">Đăng xuất</a>
        </div>
    </div>
    <!-- cart -->
    <div class="btn-group">
        <button type="button" class="btn btn-info rounded-0"><i class="fas fa-shopping-cart"></i></button>
        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <?php if(empty($_SESSION['giohang'])){ ?>
                <li class="dropdown-item d-flex justify-content-between align-items-center">Chưa có sản phẩm nào trong giỏ hàng</li>
                <?php } else { ?>
                    <?php foreach($_SESSION['giohang'] as $sp){ ?>
                        <a class="dropdown-item d-flex justify-content-between align-items-center" href="sanpham.php?id=<?php echo $sp['id'] ?>" title="<?php echo $sp['ten'] ?>">
                            <?php echo substr($sp['ten'], 0,30);if(strlen($sp['ten'])>30) echo '...  '; ?>
                                <span class="badge badge-primary badge-pill"><?php echo $sp['soluong'] ?></span>
                        </a>
                        <?php } } ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center text-primary" href="giohang.php">xem giỏ hàng</a>
        </div>
    </div>
    <!-- endcart -->
</nav>