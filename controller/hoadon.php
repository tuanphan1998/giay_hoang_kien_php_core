<?php 
class Controller
{
	protected $model;
	public function __construct(){
		require_once('./model/model.php');
		$this->model = new Model();
	}

	public function listsoluong($data){
		$mang_soluong = array();
		foreach ($data as $key => $value) {
			if($key!='tongtien'){
				array_push($mang_soluong,$data[$key]['soluong']);
			}
		}
		$lsl = implode('|', $mang_soluong);
		return $lsl;
	}

	public function listmausac($data){
		$mang_mausac = array();
		foreach ($data as $key => $value) {
			if($key!='tongtien'){
				array_push($mang_mausac,$data[$key]['mausac']);
			}
		}
		$lms = implode('|', $mang_mausac);
		return $lms;
	}

	public function index(){
		if(empty($_SESSION['user_data']))
			header('location:index.php');
		$listdanhmuc = $this->model->getsDanhMuc();
		if(isset($_GET['id'])){
			$sanpham = $this->model->getSanPham($_GET['id']);
		}
		
		require_once('./view/hoadon.php');
	}

	public function error(){
		require_once('./view/error.php');
	}

	public function themhoadon(){
		if(isset($_POST['idspp'])){
			$sp = $this->model->getSanPham($_POST['idspp']);
			$data = array(
				'listidsanpham' => $_POST['idspp'],
				'listsoluongsanpham' => 1,
				'listmausac' => $sp['mausac'],
				'tongtien' => $sp['gia'],
				'idthanhvien' => $_SESSION['user_data']['id_thanhvien'],
				'ngaygiaohang' => date('Y-m-d'),
				'hoten' => $_POST['hoten'],
				'email' => $_POST['email'],
				'sodienthoai' => $_POST['sodienthoai'],
				'diachi' => $_POST['diachi'],
				'thanhtoan' => $_POST['thanhtoan'],
				'phuongthuc' => $_POST['thanhtoan'],
			);
		} else {
			$mang_sanpham = $_SESSION['giohang'];
			unset($mang_sanpham['tongtien']);
			$data = array(
				'listidsanpham' => implode('|', array_keys($mang_sanpham)),
				'listsoluongsanpham' => $this->listsoluong($_SESSION['giohang']),
				'listmausac' => $this->listmausac($_SESSION['giohang']),
				'tongtien' => $_SESSION['giohang']['tongtien'],
				'idthanhvien' => $_SESSION['user_data']['id_thanhvien'],
				'ngaygiaohang' => date('Y-m-d'),
				'hoten' => $_POST['hoten'],
				'email' => $_POST['email'],
				'sodienthoai' => $_POST['sodienthoai'],
				'diachi' => $_POST['diachi'],
				'thanhtoan' => $_POST['thanhtoan'],
				'phuongthuc' => $_POST['thanhtoan'],
			);
		}
		
		// echo '<pre>';
		// print_r($data);
		// echo '<pre>';
		if($this->model->addHoaDon($data)){
			echo 'Bạn đã đặt hàng thành công <a href="index.php">Trang chủ</a>';
			unset($_SESSION['giohang']);
		} else {
			echo 'lỗi rồi';
		}
	}
}

 ?>