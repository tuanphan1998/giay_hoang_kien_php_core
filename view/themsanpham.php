<?php require_once('./view/header_quanly.php'); ?>
<h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="quanly.php?task=qlsp">Sản phẩm</a></li>
        <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
      </ol>
    </nav>
</h6>
<!-- Thêm sản phẩm mới -->
<div class="row">
    <div class="col-6 pb-2">
    	<?php if(isset($ketqua)&&$ketqua){ ?>
        <div class="alert alert-success" role="alert">
          Thêm sản phẩm thành công ! <a href="quanly.php?task=qlsp">Xem</a>
        </div>
        <?php } elseif(isset($ketqua)&&!$ketqua) { ?>
          <div class="alert alert-danger" role="alert">
            Thêm sản phẩm thất bại !
          </div>
        <?php } ?>
        <form method="POST">
   		  <div class="form-group">
   		  	<label for="danhmuc">Danh mục</label>
   		  	<select name="danhmuc" id="danhmuc" class="form-control <?php if(isset($error_danhmuc)) echo 'is-invalid'; ?>">
   		  		<option value="" selected disabled hidden>Chọn danh mục</option>
   		  		<?php while($dm = $listdanhmuc->fetch_assoc()){ ?>
   		  		<option value="<?php echo $dm['id_danhmuc'] ?>"><?php echo $dm['ten'] ?></option>
   		  		<?php } ?>
   		  	</select>
   		  	<div class="invalid-feedback">Bạn phải chọn danh mục cho sản phẩm</div>
   		  </div>	
          <div class="form-group">
            <label for="ten">Tên sản phẩm</label>
            <input type="text" class="form-control <?php if(isset($error_ten)) echo 'is-invalid'; ?>" id="ten" placeholder="điền tên sản phẩm" <?php if(isset($_POST['ten'])) echo 'value="'.$_POST['ten'].'"' ?> name="ten">
            <div class="invalid-feedback">Tên sản phẩm không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="gia">Giá sản phẩm (đơn vị: VNĐ)</label>
            <input type="number" class="form-control <?php if(isset($error_gia)) echo 'is-invalid'; ?>" id="gia" placeholder="điền giá của sản phẩm" <?php if(isset($_POST['gia'])) echo 'value="'.$_POST['gia'].'"' ?> name="gia">
            <div class="invalid-feedback">Giá sản phẩm không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="mota">Mô tả</label>
            <textarea name="mota" id="mota" rows="5" class="form-control <?php if(isset($error_mota)) echo 'is-invalid'; ?>" placeholder="viết mô tả cho sản phẩm"><?php if(isset($_POST['mota'])) echo $_POST['mota']; ?></textarea>
            <div class="invalid-feedback">Mô tả không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="anhdaidien">Ảnh đại diện</label>
            <input type="text" class="form-control <?php if(isset($error_anhdaidien)) echo 'is-invalid'; ?>" name="anhdaidien" <?php if(isset($_POST['anhdaidien'])) echo 'value="'.$_POST['anhdaidien'].'"' ?> placeholder="điền link ảnh đại diện">
            <div class="invalid-feedback">Ảnh đại diện không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="mausac">Màu sắc</label>
            <input type="text" class="form-control <?php if(isset($error_mausac)) echo 'is-invalid'; ?>" id="mausac" placeholder="mỗi màu sắc cách nhau bởi dấu |" <?php if(isset($_POST['mausac'])) echo 'value="'.$_POST['mausac'].'"' ?> name="mausac">
            <div class="invalid-feedback">Màu sắc sản phẩm không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="soluong">Số lượng</label>
            <input type="number" min="0" class="form-control <?php if(isset($error_soluong)) echo 'is-invalid'; ?>" id="soluong" placeholder="điền số lượng sản phẩm có trong kho" <?php if(isset($_POST['soluong'])) echo 'value="'.$_POST['soluong'].'"' ?> name="soluong">
            <div class="invalid-feedback">Số lượng sản phẩm không được bỏ trống</div>
          </div>
          <button type="submit" class="btn btn-primary" name="ok">Thêm sản phẩm</button>
        </form>
    </div>
</div>

<!-- end Thêm sản phẩm mới -->
<?php require_once('./view/footer_quanly.php') ?>