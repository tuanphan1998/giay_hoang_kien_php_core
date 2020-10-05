 		
    </div>

    </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Trước hết bạn cần đăng nhập</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="quanly.php?task=dangnhap" method="POST">
      <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="username" name="tendangnhap" placeholder="Tên đăng nhập">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="password" name="matkhau" placeholder="Mật khẩu">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Trở lại</button>
        <button type="submit" class="btn btn-primary">Đăng nhập</button>
      </div>
      </form>
    </div>
  </div>

</div>
     <script src="assets/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>