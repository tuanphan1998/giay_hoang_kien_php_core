<?php 
class Controller
{
	protected $model;
	public function __construct(){
		require_once('./model/model.php');
		$this->model = new Model();
	}

	public function index(){
		if(!isset($_GET['id'])){
			require_once('./view/error.php');
		} else {
			$listdanhmuc = $this->model->getsDanhMuc();
			$listsanpham = $this->model->getsSanPham();
			$sanpham = $this->model->getSanPham($_GET['id']);
			if(is_null($sanpham)){
				require_once('./view/error.php');
			} else {
				$sanphamtuongtu = $this->model->getsSanPhamByIDrandom($sanpham['iddanhmuc']);
				$danhmuc = $this->model->getDanhMuc($sanpham['iddanhmuc']);
				require_once('./view/sanpham.php');
			}
		}		
	}

	public function error(){
		require_once('./view/error.php');
	}

	public function themvaogio(){
		// unset($_SESSION['giohang']);
		//var_dump($_POST);
		if(!empty($_POST['soluong'])){
			$sanpham = $this->model->getSanPham($_POST['id']);
			$hoadonsp = array(
				$sanpham['id_sanpham'] => array(
					'id' => $sanpham['id_sanpham'],
					'ten' => $sanpham['ten'],
					'mausac' => $_POST['mausac'],
					'soluong' => $_POST['soluong'],
					'dongia' => $sanpham['gia'],
					'thanhtien' => $_POST['soluong']*$sanpham['gia'],
				)
			);

			if(!empty($_SESSION['giohang'])) {
				if(in_array($sanpham['id_sanpham'],array_keys($_SESSION['giohang']))) {
					foreach($_SESSION['giohang'] as $k => $v) {
							if($sanpham['id_sanpham'] == $k) {
								if(empty($_SESSION['giohang'][$k]['soluong'])) {
									$_SESSION['giohang'][$k]['soluong'] = 0;
								}
								$_SESSION['giohang'][$k]['soluong'] += $_POST['soluong'];
								$_SESSION['giohang'][$k]['thanhtien'] += $_POST['soluong']*$_SESSION['giohang'][$k]['dongia'];
								$_SESSION['giohang']['tongtien']+=$hoadonsp[$_POST['id']]['thanhtien'];
							}
					}
				} else {
					$_SESSION['giohang'] = $_SESSION['giohang']+$hoadonsp;
					$_SESSION['giohang']['tongtien']+=$hoadonsp[$_POST['id']]['thanhtien'];
				}
			} else {
				$_SESSION['giohang'] = $hoadonsp;
				$_SESSION['giohang']['tongtien']+=$hoadonsp[$_POST['id']]['thanhtien'];
			}

			header('location:giohang.php');
		}
	}
}

 ?>