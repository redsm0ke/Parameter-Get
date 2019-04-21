<?php
$page = (isset($_GET['page']))? $_GET['page'] : '';

switch ($page) {
	case 'home':
		include 'home.php';
		break;
		
	case 'tentang':
		include 'tentang.php';
		break;
		
	case 'hubungi':
		include 'hubungi.php';
		break;
	
	default:
		include 'home.php';
		break;
}
?>