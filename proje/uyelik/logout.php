<?PHP

	include '../admin/baglantii/baglan.php';
	session_start();
	session_destroy();
	
	header("location: ../index.php");
	
?>