<?php require_once('./view/header_quanly.php'); ?>
<h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="quanly.php?task=qlhd">Danh sách hóa đơn</a></li>
        <li class="breadcrumb-item active" aria-current="page">Hóa đơn: <?php echo $hoadon['id_hoadon'] ?></li>
      </ol>
    </nav>
</h6>
<?php
$mang_id = explode('|', $hoadon['listidsanpham']); 
$mang_soluong = explode('|', $hoadon['listsoluongsanpham']);
$ketqua = array_combine($mang_id,$mang_soluong);
?>
<!-- cthd -->
<div class="row">
    <div class="col-12">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Mã Hóa Đơn : <?php echo $hoadon['id_hoadon'] ?></th>
              <th scope="col">Thông tin khách hàng</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Họ tên người nhận</th>
              <td><?php echo $hoadon['hoten'] ?></td>
            </tr>
            <tr>
              <th scope="row">Email người nhận</th>
              <td><?php echo $hoadon['email'] ?></td>
            </tr>
            <tr>
              <th scope="row">Số điện thoại</th>
              <td><?php echo $hoadon['sodienthoai'] ?></td>
            </tr>
            <tr>
              <th scope="row">Địa chỉ</th>
              <td><?php echo $hoadon['diachi'] ?></td>
            </tr>
            <tr>
              <th scope="row">Ngày giao hàng</th>
              <td><?php echo $hoadon['ngaygiaohang'] ?></td>
            </tr>
            <tr>
              <th scope="row">Tổng tiền</th>
              <td><?php echo $hoadon['tongtien'] ?></td>
            </tr>
          </tbody>
        </table>
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tên sản phẩm</th>
              <th scope="col">Màu sắc</th>
              <th scope="col">Giá</th>
              <th scope="col">Số lượng</th>
              <th scope="col">Tạm tính</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=1;foreach ($ketqua as $key => $value) {?>
            <tr>
              <th scope="row"><?php echo $i;$i++ ?></th>
              <td><?php echo $this->model->getSanPham($key)['ten'] ?></td>
              <td><?php echo $this->model->getSanPham($key)['mausac'] ?></td>
              <td><?php echo $this->model->getSanPham($key)['gia'] ?></td>
              <td><?php echo $value ?></td>
              <td><?php echo $this->model->getSanPham($key)['gia']*$value ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <div class="mb-3">
          <b>Tình trạng : </b>
          <?php if($hoadon['tinhtrang']==0){ ?>
          <a href="quanly.php?task=duyethd&id=<?php echo $hoadon['id_hoadon'] ?>" class="bg-warning rounded p-2 text-dark" onclick="return confirm('Xác nhận duyệt đơn hàng này?')">Duyệt đơn</a>
          <?php } else { ?>
            <span class="bg-success rounded p-2 text-light">Đã duyệt</span>
          <?php } ?>
          <a href="quanly.php?task=xoahd&id=<?php echo $hoadon['id_hoadon'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="bg-danger rounded p-2 text-light">Xóa</a>
        </div>
        
    </div>
</div>

<!-- end cthd -->
<?php require_once('./view/footer_quanly.php') ?>