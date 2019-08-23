<?php

ob_start();
session_start();
error_reporting(0);
include 'baglantii/baglan.php'; 

if(isset($_SESSION['kullanici'])){
$kullanicisor=$db->prepare("SELECT * from uyeler where kullanici=:ad");
$kullanicisor->execute(array(
'ad'=>$_SESSION['kullanici']
    ));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

$yetki=$kullanicicek['statu'];

 if ($yetki==0) {

 	header("location:adminindex.php");
 }else{
 	header("location:login.php");
 }
}else{
	header("location:login.php");
}
  ?>
