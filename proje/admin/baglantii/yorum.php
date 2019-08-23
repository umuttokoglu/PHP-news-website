<?php
ob_start();
//error_reporting(E_ALL ^ E_NOTICE);
include 'baglan.php';
if (isset($_POST['yorumkaydet'])) {

	$id = $_GET['icerik_id'];

$tarih=$_POST['yorum_tarih'];
$saat=$_POST['yorum_saat'];
$zaman=$tarih." ".$saat;

$kaydet=$db->prepare("INSERT INTO yorum SET 
yorum_yazan=:yazan,
yorumicerik_id=:icerikid,
yorum_zaman=:zaman,
yorum_detay=:detay");

$insert=$kaydet->execute(array(
'yazan'=>$_POST['yorum_yazan'],
'icerikid'=>$id ,
'zaman'=>$zaman,
'detay'=>$_POST['yorum_detay']

));

if ($insert) {
	Header("Location:../../icerik.php?icerik_id=$id&durum=ok");
}
else{
	Header("Location:../../icerik.php?durum=no");
}

/*if (isset($_POST['yorumonay'])) {
	
$id = $_GET['yorum_id'];


$yorumonay=$db->prepare("UPDATE yorum SET 

yorum_onay=:onay
WHERE yorum_id=$id");

$update=$yorumonay->execute(array(

'onay'=>$_POST['yorum_onay']
));

if ($update) {
	Header("Location:../adminyorum.php?durum=ok");
}
else{
	Header("Location:../adminyorum.php?durum=no");
}
}

*/






}
