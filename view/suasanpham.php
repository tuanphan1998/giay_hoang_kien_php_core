<?php require_once('./view/header_quanly.php'); ?>
<h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="quanly.php?task=qlsp">Sản phẩm</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $sanpham['ten'] ?></li>
      </ol>
    </nav>
</h6>
<!-- Sửa sản phẩm -->
<div class="row">
    <div class="col-6 pb-2">
    	<?php if(isset($ketqua)&&$ketqua){ ?>
        <div class="alert alert-success" role="alert">
          Sửa sản phẩm thành công ! <a href="sanpham.php?id=<?php echo $_GET['id'] ?>">Xem</a>
        </div>
        <?php } elseif(isset($ketqua)&&!$ketqua) { ?>
          <div class="alert alert-danger" role="alert">
            Sửa sản phẩm thất bại !
          </div>
        <?php } ?>
        <form method="POST">
   		  <div class="form-group">
   		  	<label for="danhmuc">Danh mục</label>
   		  	<select name="danhmuc" id="danhmuc" class="form-control <?php if(isset($error_danhmuc)) echo 'is-invalid'; ?>">
   		  		<?php while($dm = $listdanhmuc->fetch_assoc()){ ?>
   		  		<option value="<?php echo $dm['id_danhmuc'] ?>" <?php if($dm['id_danhmuc']==$sanpham['iddanhmuc']) echo 'selected' ?>><?php echo $dm['ten'] ?></option>
   		  		<?php } ?>
   		  	</select>
   		  	<div class="invalid-feedback">Bạn phải chọn danh mục cho sản phẩm</div>
   		  </div>	
          <div class="form-group">
            <label for="ten">Tên sản phẩm</label>
            <input type="text" class="form-control <?php if(isset($error_ten)) echo 'is-invalid'; ?>" id="ten" placeholder="điền tên sản phẩm" <?php echo 'value="'.$sanpham['ten'].'"' ?> name="ten">
            <div class="invalid-feedback">Tên sản phẩm không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="gia">Giá sản phẩm (đơn vị: VNĐ)</label>
            <input type="number" class="form-control <?php if(isset($error_gia)) echo 'is-invalid'; ?>" id="gia" placeholder="điền giá của sản phẩm" <?php echo 'value="'.$sanpham['gia'].'"' ?> name="gia">
            <div class="invalid-feedback">Giá sản phẩm không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="mota">Mô tả</label>
            <textarea name="mota" id="mota" rows="5" class="form-control <?php if(isset($error_mota)) echo 'is-invalid'; ?>" placeholder="viết mô tả cho sản phẩm"><?php echo $sanpham['mota'] ?></textarea>
            <div class="invalid-feedback">Mô tả không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="anhdaidien">Ảnh đại diện</label>
            <input type="text" class="form-control <?php if(isset($error_anhdaidien)) echo 'is-invalid'; ?>" name="anhdaidien" <?php echo 'value="'.$sanpham['anhdaidien'].'"' ?> placeholder="điền link ảnh đại diện">
            <div class="invalid-feedback">Ảnh đại diện không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="mausac">Màu sắc</label>
            <input type="text" class="form-control <?php if(isset($error_mausac)) echo 'is-invalid'; ?>" id="mausac" placeholder="mỗi màu sắc cách nhau bởi dấu |" <?php echo 'value="'.$sanpham['mausac'].'"' ?> name="mausac">
            <div class="invalid-feedback">Màu sắc sản phẩm không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="soluong">Số lượng</label>
            <input type="number" min="0" class="form-control <?php if(isset($error_soluong)) echo 'is-invalid'; ?>" id="soluong" placeholder="điền số lượng sản phẩm có trong kho" <?php echo 'value="'.$sanpham['soluong'].'"' ?> name="soluong">
            <div class="invalid-feedback">Số lượng sản phẩm không được bỏ trống</div>
          </div>
          <button type="submit" class="btn btn-primary" name="ok">Sửa sản phẩm</button>
        </form>
    </div>
</div>

<!-- end Sửa sản phẩm -->
<?php require_once('./view/footer_quanly.php') ?>