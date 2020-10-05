<?php 
session_start();
require_once('./controller/giohang.php');
$controller = new Controller();
$task = isset($_GET['task']) ? $_GET['task'] : 'index';
switch ($task) {
	case 'error':
		$controller->error();
		break;
	case 'index':
		$controller->index();
		break;
	case 'xoa':
		$controller->xoa();
		break;
	default:
		$controller->index();
		break;
}

 ?>