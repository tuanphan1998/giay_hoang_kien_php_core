<?php require_once('./view/header_quanly.php') ?>
<h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="quanly.php?task=qldm">Danh mục</a></li>
        <li class="breadcrumb-item active" aria-current="page">Thêm danh mục</li>
      </ol>
    </nav>
</h6>
<!-- thêm danh mục mới -->
<div class="row">
    <div class="col-6 pb-2">
        <?php if(isset($ketqua)&&$ketqua){ ?>
        <div class="alert alert-success" role="alert">
          Thêm danh mục thành công ! <a href="quanly.php?task=qldm">Xem</a>
        </div>
        <?php } elseif(isset($ketqua)&&!$ketqua) { ?>
          <div class="alert alert-danger" role="alert">
            Thêm danh mục thất bại !
          </div>
        <?php } ?>
        <form method="POST">
            <div class="form-group">
            <label for="ten">Tên danh mục</label>
            <input type="text" class="form-control" id="ten" placeholder="điền tên danh mục" name="ten">
          </div>
          <div class="form-group">
            <label for="mota">Mô tả</label>
            <textarea name="mota" id="mota" cols="30" rows="10" class="form-control" placeholder="điền mô tả cho danh mục"></textarea>
          </div>
          <div class="form-group">
            <label for="anhdaidien">Ảnh đại diện</label>
            <input type="text" class="form-control" placeholder="điền link ảnh" name="anhdaidien">
          </div>
          <button type="submit" class="btn btn-primary">Thêm danh mục</button>
        </form>
    </div>
</div>

<!-- end thêm danh mục mới -->
<?php require_once('./view/footer_quanly.php') ?>