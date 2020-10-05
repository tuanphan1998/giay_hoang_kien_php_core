<?php 
class Controller
{
	protected $model;
	public function __construct(){
		require_once('./model/model.php');
		$this->model = new Model();
	}

	public function index(){
		$listdanhmuc = $this->model->getsDanhMuc();
		$listsanpham = $this->model->getsSanPham();
		$listiphone = $this->model->getsIphone();
		$listsamsung = $this->model->getsSamsung();
		require_once('./view/trangchu.php');
	}

	public function user(){
		if(isset($_SESSION['user_data']))
			header('location:index.php');
		$listdanhmuc = $this->model->getsDanhMuc();
		require_once('./view/user.php');
	}

	public function caidat(){
		if(isset($_POST['ok'])){
			if($this->model->editNguoiDung($_POST,$_SESSION['user_data']['id_thanhvien'])){
				$ketqua=true;
			} else {
				$ketqua=false;
			}
		}
		$_SESSION['user_data'] = $this->model->getThanhVienByID($_SESSION['user_data']['id_thanhvien']);
		$listdanhmuc = $this->model->getsDanhMuc();
		require_once('./view/caidat.php');
	}
}

 ?>