<?php 
session_start();
require_once('./controller/sanpham.php');
$controller = new Controller();
$task = isset($_GET['task']) ? $_GET['task'] : 'index';
switch ($task) {
	case 'error':
		$controller->error();
		break;
	case 'addtocart':
		$controller->themvaogio();
		break;
	default:
		$controller->index();
		break;
}

 ?>