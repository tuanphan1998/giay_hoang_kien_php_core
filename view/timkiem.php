<?php require_once('header.php'); ?>
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tìm kiếm cho từ khóa <b><?php echo $_GET['tukhoa'] ?></b></li>
          </ol>
        </nav>
    </h6>
    <!-- sản phẩm nổi bật -->
    <div class="card-deck mb-3 text-center">
        <?php if(isset($dulieutrong)){
            echo '<h2 class="text-center">Không tìm thấy sản phẩm chứa từ khóa <b>'.$_GET['tukhoa'].'</b> !</h2>';
        } else {
        ?>
        <?php $i=0;while($data = $sanpham->fetch_assoc()){ ?>
        <div class="col-3 mb-4 shadow-sm">
            <img src="<?php echo $data['anhdaidien'] ?>" height="200px" class="card-img-top border-bottom" alt="<?php echo $data['ten'] ?>">
            <div class="card-body">
                <h6 class="card-title"><?php echo $data['ten'] ?></h6>
                <ul class="list-unstyled mt-3 mb-4">
                    <li><span style="color: red"><?php echo $data['gia'] ?></span> <small class="text-muted" style="text-decoration: line-through">$200.000</small></li>
                </ul>
            </div>
            <div class="card-footer bg-transparent border-0 row justify-content-center">
                <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="btn btn-success col-6 rounded-0">Xem</a>
                <a href="button" class="btn btn-info col-6 rounded-0">Đặt hàng</a>
            </div>
        </div>
        <?php } }?>
    </div>
    <!-- end sản phẩm nổi bật -->
</div>
<?php require_once('footer.php'); ?>