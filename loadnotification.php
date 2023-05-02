<?php  
require_once ("include/initialize.php"); 

$IDNO = $_SESSION['IDNO'];
$type = $_GET['type'];

switch ($type) {
	case 'event':
		# code...
	$sql = "SELECT * FROM tblstudentnotif WHERE IDNO = '{$IDNO}' AND TYPE='Event'";
	$mydb->setQuery($sql); 
	$maxrow = $mydb->num_rows(); 
	 
	echo $maxrow;
		break;
	case 'announcement':
		
    $sql = "SELECT * FROM tblstudentnotif WHERE IDNO = '{$IDNO}' AND TYPE='Announcement'";
	$mydb->setQuery($sql); 
	$maxrow = $mydb->num_rows(); 
	 
	echo $maxrow;
		break;
 
}



?>