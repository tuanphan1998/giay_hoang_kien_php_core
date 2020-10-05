<?php require_once('./view/header_quanly.php') ?>
<h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success" style="border-bottom: 1px dashed #ccc">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
        <li class="breadcrumb-item active" aria-current="page">Quản lý</li>
      </ol>
    </nav>
</h6>
<!-- thong ke -->
<div class="row">
    <div class="col-12">
        <div class="card-deck m-0">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Danh mục
                    <div class="card-body-icon">
                        <i class="fas fa-list-ol"></i>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Số danh mục : <?php echo $this->model->count('danhmuc') ?></h5>
                    <p class="card-text">
                        <ul>
                            <li><a href="#" class="text-white">Danh sách</a></li>
                            <li><a href="#" class="text-white">Thêm danh mục</a></li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">Sản phẩm
                    <div class="card-body-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Số sản phẩm : <?php echo $this->model->count('sanpham') ?></h5>
                    <p class="card-text">
                        <ul>
                            <li><a href="#" class="text-white">Danh sách</a></li>
                            <li><a href="#" class="text-white">Thêm sản phẩm</a></li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Hóa đơn
                    <div class="card-body-icon">
                        <i class="fas fa-clipboard"></i>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Số hóa đơn : <?php echo $this->model->count('hoadon') ?></h5>
                    <p class="card-text">
                        <ul>
                            <li><a href="#" class="text-white">Danh sách</a></li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">Người dùng
                    <div class="card-body-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Số người dùng : <?php echo $this->model->count('thanhvien') ?></h5>
                    <p class="card-text">
                        <ul>
                            <li><a href="#" class="text-white">Danh sách</a></li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end thong ke -->
<!-- binh luan moi -->
<div class="row">
    <div class="col-12">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-2 text-info">
          <span><i class="fas fa-cube"></i>  Đơn hàng mới nhất</span>
          <a class="d-flex align-items-center text-info" href="#">
            Xem thêm <i class="fas fa-chevron-right"></i>
          </a>
        </h6>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="align-middle text-center">Mã hóa đơn</th>
                    <th scope="col" class="align-middle text-center">Danh sách sản phẩm</th>
                    <th scope="col" class="align-middle text-center">Số lượng</th>
                    <th scope="col" class="align-middle text-center">Tổng tiền</th>
                    <th scope="col" class="align-middle text-center">Người đặt</th>
                    <th scope="col" class="align-middle text-center">Ngày đặt hàng</th>
                    <th scope="col" class="align-middle text-center">Tình trạng</th>
                    <th scope="col" class="align-middle text-center">Tác vụ</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1;if(is_null($listhoadon)){
                    echo '<tr><td colspan="8">Chưa có hóa đơn nào !</td></tr>';
                } else {
                while($hd = $listhoadon->fetch_assoc()){ ?>
                <tr>
                    <th scope="row" class="align-middle text-center"><?php echo $hd['id_hoadon'] ?></th>
                    <td class="align-middle">
                        <?php 
                        $tongtien = 0;
                        $mang_sanpham = explode('|', $hd['listidsanpham']); //Xử lý sản phẩm
                        $mang_mausac = explode('|', $hd['listmausac']);
                        foreach($mang_sanpham as $key=>$sp){ ?>
                            <li style="list-style: square;">
                                <a href="sanpham.php?id=<?php echo $sp ?>"><?php echo $this->model->getSanPham($sp)['ten'] ?></a> (<?php echo $mang_mausac[$key] ?>)
                            </li>
                        <?php } ?>
                    </td>
                    <td class="align-middle">
                        <?php 
                        $mang_soluong = explode('|', $hd['listsoluongsanpham']); //Xử lý số lượng
                        foreach($mang_soluong as $sl){ ?>
                            <li style="list-style: square;">
                                <?php echo $sl ?>
                            </li>
                        <?php } ?>
                    </td>
                    <td class="align-middle">
                        <?php echo $hd['tongtien'] ?>.000 VNĐ
                    </td>
                    <td class="align-middle">
                        <a href="thanhvien.php?id=<?php echo $hd['idthanhvien'] ?>"><?php echo $this->model->getThanhVienByID($hd['idthanhvien'])['hoten'] ?></a>
                    </td>
                    <td class="align-middle">
                        <?php echo $hd['ngaygiaohang']; ?>
                    </td>
                    <td class="align-middle">
                        <?php if($hd['tinhtrang']==0) echo '<span class="bg-danger">Chưa duyệt</span>';if($hd['tinhtrang']==1) echo '<span class="bg-success">Đã duyệt</span>';  ?>
                    </td>
                    <td class="align-middle">
                        <a href="quanly.php?task=cthd&id=<?php echo $hd['id_hoadon'] ?>" class="btn btn-primary">Quản lý</a>
                    </td>
                </tr>
                <?php } }?>
            </tbody>
        </table>
    </div>
</div>

<!-- end binh luan -->
<?php require_once('./view/footer_quanly.php') ?>