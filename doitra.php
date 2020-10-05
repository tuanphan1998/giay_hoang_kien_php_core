<?php 
require_once('./model/model.php');
$model = new Model();
$listdanhmuc = $model->getsDanhMuc();
require_once('view/header.php'); ?>
        <div class="row">
            <div class="col-12">
              <h1 class="text-center h3 mt-4">Chính sách đổi trả hàng</h1>
              <b>Chính sách đổi trả đính kèm trong sản phẩm</b>
              <br>
            </div>            
        </div>
    <!-- footer -->
  
            </div>
<?php require_once('view/footer.php'); ?>