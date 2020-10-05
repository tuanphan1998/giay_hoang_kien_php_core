<?php 
session_start();
require_once('./controller/timkiem.php');
$controller = new Controller();
$task = isset($_GET['tukhoa']) ? $_GET['tukhoa'] : 'error';
switch ($task) {
	case 'error':
		$controller->error();
		break;
	
	default:
		$controller->index();
		break;
}

 ?>