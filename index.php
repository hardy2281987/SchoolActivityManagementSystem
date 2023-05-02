<?php
require_once ("include/initialize.php"); 
if (!isset($_SESSION['IDNO'])) {
	redirect("login.php");
}
$content='home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';

switch ($view) { 
	
	case 'contact' :
        $title="Contact Us";	
		$content='contact.html';		
		break;


	case 'about' :
        $title="About Us";	
		$content='about.html';		
		break;

	case 'login' :
        $title="Login";	
		$content='login.php';		
		break;

	case 'events' :
        $title="Events";	
		$content='view_events.php';		
		break;

	case 'announcement' :
        $title="Announcement";	
		$content='view_announcement.php';		
		break;

	case 'register' :
        $title="Login";	
		$content='register.php';		
		break;
	case 'blog' :
        $title="Blog";	
		$content='single-blog.php';		
		break;
	case 'archives' :
        $title="Archives";	
		$content='archives.php';		
		break;

	case 'notification' :
        $title="Notification";	
		$content='allnotification.php';		
		break;


	case '5' :
        $title="Logout";	
		$content='logout.php';		
		break; 
	default :
	 //    $title="Home";	
		// $content ='home.php';	
		redirect("modstudent/")	;
}
require_once("navigation/navigations.php");
?>

