<?PHP

	include 'baglantii/baglan.php';
	session_start();
	session_destroy();
	
	header("location: login.php?durum=cikis");
	
?>