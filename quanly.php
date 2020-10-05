<?php 
session_start();
require_once('./controller/quanly.php');
$controller = new Controller();
$task = isset($_GET['task']) ? $_GET['task'] : 'error';
switch ($task) {
	case 'index':
		$controller->index();
		break;
	case 'dangky':
		$controller->dangky();
		break;
	case 'dangnhap':
		$controller->dangnhap();
		break;
	case 'dangxuat':
		$controller->dangxuat();
		break;
	case 'qldm':
		$controller->quanlydanhmuc();
		break;
	case 'tdm':
		$controller->themdanhmuc();
		break;
	case 'sdm':
		$controller->suadanhmuc();
		break;
	case 'xdm':
		$controller->xoadanhmuc();
		break;
	case 'qlsp':
		$controller->quanlysanpham();
		break;
	case 'tsp':
		$controller->themsanpham();
		break;
	case 'ssp':
		$controller->suasanpham();
		break;
	case 'xsp':
		$controller->xoasanpham();
		break;
	case 'qlhd':
		$controller->quanlyhoadon();
		break;
	case 'cthd':
		$controller->chitiethoadon();
		break;
	case 'qltv':
		$controller->quanlythanhvien();
		break;
	case 'suatv':
		$controller->suathanhvien();
		break;
	case 'xtv':
		$controller->xoathanhvien();
		break;
	case 'duyethd':
		$controller->duyethoadon();
		break;
	case 'xoahd':
		$controller->xoahoadon();
		break;
	default:
		$controller->index();
		break;
}

 ?>