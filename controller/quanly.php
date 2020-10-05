<?php 
class Controller
{
	protected $model;
	public function __construct(){
		require_once('./model/model.php');
		$this->model = new Model();
	}

	public function index(){
		$listhoadon = $this->model->getsHoaDon(10);
		require_once('./view/quanly.php');
	}

	public function error(){
		require_once('./view/error.php');
	}

	public function duyethoadon(){
		if($_SESSION['user_data']['level']==1){
			$id = $_GET['id'];
			if($this->model->confirmHD($id)){
				header('location:quanly.php?task=cthd&id='.$id.'');
			} else {
				echo 'Duyệt đơn không thành công !';
			}
		} else {
			echo 'Bạn không đủ quyền hạn thực hiện hành động này !';
		}
	}

	public function dangnhap(){
		$listdanhmuc = $this->model->getsDanhMuc();
		$listsanpham = $this->model->getsSanPham();
		if(!empty($_POST['tendangnhap'])&&!empty($_POST['matkhau'])){
			if($this->model->checkThanhVien($_POST['tendangnhap'],$_POST['matkhau'])){
				$_SESSION['user_data'] = $this->model->getThanhVien($_POST['tendangnhap'],$_POST['matkhau']);
				header('location:index.php');
			} else {
				$error3 = true;
				require_once('./view/user.php');
			}
		} else {
			$error = true;
			require_once('./view/user.php');
		}
		
	}

	public function dangky(){
		$listdanhmuc = $this->model->getsDanhMuc();
		$listsanpham = $this->model->getsSanPham();
		// gán các trường lỗi vào biến
		$tendangnhap_error = empty($_POST['tendangnhap']) ? 'true' : null;
		$matkhau_error = empty($_POST['matkhau']) ? 'true' : null;
		$hoten_error = empty($_POST['hoten']) ? 'true' : null;
		$email_error = empty($_POST['email']) ? 'true' : null;
		$sodienthoai_error = empty($_POST['sodienthoai']) ? 'true' : null;
		$diachi_error = empty($_POST['diachi']) ? 'true' : null;
		// check xem có trường nào lỗi không
		if($tendangnhap_error||$matkhau_error||$hoten_error||$email_error||$sodienthoai_error||$diachi_error){
			require_once('./view/user.php');
		} else {
			if($this->model->addThanhVien($_POST)){
				header('location:index.php');
			} else {
				$error2 = true;
				require_once('./view/user.php');
			}
		}
	}

	public function dangxuat(){
		unset($_SESSION['user_data']);
		unset($_SESSION['giohang']);
		header('location:index.php');
	}

	public function quanlydanhmuc(){
		$listdanhmuc = $this->model->getsDanhMuc();
		require_once('./view/quanlydanhmuc.php');
	}

	public function themdanhmuc(){
		if(!empty($_POST['ten'])&&!empty($_POST['mota'])&&!empty($_POST['anhdaidien'])){
			if($this->model->addDanhMuc($_POST)){
				$ketqua = true;
			} else {
				$ketqua = false;
			}
		}
		require_once('./view/themdanhmuc.php');
	}

	public function suadanhmuc(){
		if(isset($_GET['id'])){
			if(!is_null($this->model->getDanhMuc($_GET['id']))){
				//sửa danh mục
				if(!empty($_POST['ten'])&&!empty($_POST['mota'])&&!empty($_POST['anhdaidien'])){
					if($this->model->editDanhMuc($_POST,$_GET['id'])){
						$ketqua = true;
					} else {
						$ketqua = false;
					}
				} else {
					$error_ten = empty($_POST['ten']) ? 'true' : null;
				}
				$danhmuc = $this->model->getDanhMuc($_GET['id']);
				require_once('./view/suadanhmuc.php');
			} else {
				echo 'Danh mục không tồn tại !';
			} 
		} else {
			require_once('./view/error.php');
		}
	}

	public function xoadanhmuc(){
		if($_SESSION['user_data']['level']==1){
			if($this->model->delDM($_GET['id'])){
				header('location:quanly.php?task=qldm');
			} else {
				echo "Xóa không thành công !";
			}
			
		} else {
			echo "Bạn không đủ quyền thực hiện thao tác này";
		}
	}

	public function xoahoadon(){
		if($_SESSION['user_data']['level']==1){
			if($this->model->delHD($_GET['id'])){
				header('location:quanly.php?task=qlhd');
			} else {
				echo "Xóa không thành công !";
			}
			
		} else {
			echo "Bạn không đủ quyền thực hiện thao tác này";
		}
	}

	public function xoasanpham(){
		if($_SESSION['user_data']['level']==1){
			if($this->model->delSP($_GET['id'])){
				header('location:quanly.php?task=qlsp');
			} else {
				echo "Xóa không thành công !";
			}
			
		} else {
			echo "Bạn không đủ quyền thực hiện thao tác này";
		}
	}

	public function xoathanhvien(){
		if($_SESSION['user_data']['level']==1){
			if($this->model->delTV($_GET['id'])){
				header('location:quanly.php?task=qltv');
			} else {
				echo "Xóa không thành công !";
			}
			
		} else {
			echo "Bạn không đủ quyền thực hiện thao tác này";
		}
	}

	public function quanlysanpham(){
		$listsanpham = $this->model->getsSanPham(50);
		require_once('./view/quanlysanpham.php');
	}

	public function themsanpham(){
		$listdanhmuc = $this->model->getsDanhMuc();
		//nếu người dùng gửi request post
		if($_SERVER["REQUEST_METHOD"] == "POST"){ 
			//check xem trường dữ liệu nào trống !
			if(empty($_POST['danhmuc'])){
				$error_danhmuc = true;
			} 
			if(empty($_POST['ten'])){
				$error_ten = true;
			} 
			if(empty($_POST['gia'])){
				$error_gia = true;
			} 
			if(empty($_POST['mota'])){
				$error_mota = true;
			} 
			if(empty($_POST['anhdaidien'])){
				$error_anhdaidien = true;
			} 
			if(empty($_POST['mausac'])){
				$error_mausac = true;
			} 
			if(empty($_POST['soluong'])){
				$error_soluong = true;
			}
			//thêm sản phẩm vào database
			if(!isset($error_danhmuc)&&!isset($error_ten)&&!isset($error_gia)&&!isset($error_mota)&&!isset($error_anhdaidien)&&!isset($error_mausac)&&!isset($error_soluong)){
				if($this->model->addSanPham($_POST)){ 
					$ketqua = true;
				} else {
					$ketqua = false;
				}
			} else {
				
			}
		}
		require_once('./view/themsanpham.php');
	}

	public function suasanpham(){
		if(isset($_POST['ok'])){
			if($this->model->editSanPham($_POST,$_GET['id'])){
				$ketqua=true;
			} else {
				$ketqua=false;
			}
		}
		$listdanhmuc = $this->model->getsDanhMuc();
		$sanpham = $this->model->getSanPham($_GET['id']);
		require_once('./view/suasanpham.php');

	}

	public function suathanhvien(){
		if(isset($_POST['ok'])){
			if($this->model->editNguoiDung($_POST,$_GET['id'])){
				$ketqua=true;
			} else {
				$ketqua=false;
			}
		}
		$nguoidung = $this->model->getThanhVienByID($_GET['id']);
		require_once('./view/suathanhvien.php');

	}

	public function quanlyhoadon(){
		$listhoadon = $this->model->getsHoaDon();
		require_once('./view/quanlyhoadon.php');
	}

	public function quanlythanhvien(){
		$listtv = $this->model->getsThanhVien();
		require_once('./view/quanlythanhvien.php');
	}

	public function chitiethoadon(){
		$hoadon = $this->model->getHoaDon($_GET['id'])->fetch_assoc();
		require_once('./view/chitiethoadon.php');
	}

}

 ?>