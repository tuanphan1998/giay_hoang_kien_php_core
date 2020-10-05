<?php require_once('./view/header_quanly.php') ?>
 <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="quanly.php">Quản lý</a></li>
        <li class="breadcrumb-item active" aria-current="page">Danh sách thành viên</li>
      </ol>
    </nav>
</h6>
<!-- danh sach hoa don -->
<div class="row">
    <div class="col-12">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="align-middle text-center">Mã thành viên</th>
                    <th scope="col" class="align-middle text-center">Tên đăng nhập</th>
                    <th scope="col" class="align-middle text-center">Họ và tên</th>
                    <th scope="col" class="align-middle text-center">Email</th>
                    <th scope="col" class="align-middle text-center">Số điện thoại</th>
                    <th scope="col" class="align-middle text-center">Địa chỉ</th>
                    <th scope="col" class="align-middle text-center">Chức vụ</th>
                    <th scope="col" class="align-middle text-center">Tác vụ</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1;while($hd = $listtv->fetch_assoc()){ ?>
                <tr>
                    <th scope="row" class="align-middle text-center"><?php echo $hd['id_thanhvien'] ?></th>
                    <td class="align-middle">
                        <?php echo $hd['tendangnhap'] ?>
                    </td>
                    <td class="align-middle">
                        <?php echo $hd['hoten'] ?>
                    </td>
                    <td class="align-middle">
                        <?php echo $hd['email'] ?>
                    </td>
                    <td class="align-middle">
                        <?php echo $hd['sodienthoai'] ?>
                    </td>
                    <td class="align-middle">
                        <?php echo $hd['diachi'] ?>
                    </td>
                    <td class="align-middle">
                        <?php if($hd['level']==1){echo "Admin";}else{echo "Thành viên";} ?>
                    </td>
                    <td class="align-middle">
                        <a href="quanly.php?task=suatv&id=<?php echo $hd['id_thanhvien'] ?>" class="btn btn-warning">Sửa</a>
                        <a href="quanly.php?task=xtv&id=<?php echo $hd['id_thanhvien'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- end danh sach hoa don -->
<?php require_once('./view/footer_quanly.php') ?>