<?php 
class Controller
{
	protected $model;
	public function __construct(){
		require_once('./model/model.php');
		$this->model = new Model();
	}

	public function index(){

		// Config phân trang
		$total = $this->model->total($_GET['id']); //tổng số mẩu tin
		$limit = 4; //số mẩu tin trên 1 trang
		$full = true;
		// end Config

		$getTotalPage = ceil($total/$limit);

		$listdanhmuc = $this->model->getsDanhMuc();
		$danhmuc = $this->model->getDanhMuc($_GET['id']);
		
		if(is_null($danhmuc)){
			require_once('./view/error.php');
		} else {
			require_once('./view/danhmuc.php');
		}
		
	}

	public function error(){
		require_once('./view/error.php');
	}
}

 ?>