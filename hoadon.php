<?php 
session_start();
require_once('./controller/hoadon.php');
$controller = new Controller();
$task = isset($_GET['task']) ? $_GET['task'] : 'index';
switch ($task) {
	case 'error':
		$controller->error();
		break;
	case 'index':
		$controller->index();
		break;
	case 'themhoadon':
		$controller->themhoadon();
		break;
	default:
		$controller->index();
		break;
}

 ?>