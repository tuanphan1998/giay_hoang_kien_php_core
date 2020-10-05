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
		
		$sanpham = $this->model->searchSP($_GET['tukhoa']);
		if(is_null($sanpham)){
			$dulieutrong = true;
		}
		require_once('./view/timkiem.php');
		
	}

	public function error(){
		require_once('./view/error.php');
	}
}

 ?>