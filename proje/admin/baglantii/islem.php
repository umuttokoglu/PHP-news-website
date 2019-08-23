<?php
ob_start();
error_reporting(0);

session_start();

include 'baglan.php';


if (isset($_POST['girisyap'])) {

 $kullanici=$_POST['kullanici'];
 $sifre=md5($_POST['sifre']);

if ($kullanici && $sifre) {
	$kullanicisor=$db->prepare("SELECT * from uyeler where kullanici=:ad and sifre=:sifre");
	$kullanicisor->execute(array(
		'ad'=>$kullanici,
		'sifre'=>$sifre
		));

$say=$kullanicisor->rowCount();

if ($say>0) {

	$_SESSION['kullanici'] =$kullanici ;
	
	header('Location:../adminindex.php');
}
else{
	header('Location:../login.php?durum=no');
}
}

}












if (isset($_POST['güncelle'])) {
	
$ayarkaydet=$db->prepare("UPDATE ayar SET 
ayar_logo=:logo,
ayar_title=:title,
ayar_siteurl=:siteurl,
ayar_aciklama=:aciklama,
ayar_anahtarkelime=:anahtarkelime,
ayar_yazar=:yazar
WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(
'logo'=>$_POST['ayar_logo'],
'title'=>$_POST['ayar_title'],
'siteurl'=>$_POST['ayar_siteurl'],
'aciklama'=>$_POST['ayar_aciklama'],
'anahtarkelime'=>$_POST['ayar_anahtarkelime'],
'yazar'=>$_POST['ayar_yazar']
));

if ($update) {
	Header("Location:../admingenel_ayar.php?durum=ok");
}
else{
	Header("Location:../admingenel_ayar.php?durum=no");
}
}

if (isset($_POST['güncellesosyal'])) {
	
$ayarkaydet=$db->prepare("UPDATE ayar SET 
ayar_facebook=:facebook,
ayar_twitter=:twitter
WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(
'facebook'=>$_POST['ayar_facebook'],
'twitter'=>$_POST['ayar_twitter']
));

if ($update) {
	Header("Location:../adminsosyal_ayar.php?durum=ok");
}
else{
	Header("Location:../adminsosyal_ayar.php?durum=no");
}
}


if (isset($_POST['sliderkaydet'])) {

	$uploads_dir='../../images/Slider';

	@$tmp_name=$_FILES['slider_resimyol']["tmp_name"];
	@$name=$_FILES['slider_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



$kaydet=$db->prepare("INSERT INTO slider SET 
slider_ad=:ad,
slider_link=:link,
slider_sira=:sira,
slider_durum=:durum,
slider_resimyol=:resimyol");

$insert=$kaydet->execute(array(
'ad'=>$_POST['slider_ad'],
'link'=>$_POST['slider_link'],
'sira'=>$_POST['slider_sira'],
'durum'=>$_POST['slider_durum'],
'resimyol'=>$refimgyol
));

if ($insert) {
	Header("Location:../adminslider.php?durum=ok");
}
else{
	Header("Location:../adminslider.php?durum=no");
}
}





if ($_GET['slidersil']=="ok") {


	$sil=$db->prepare("DELETE from slider where slider_id=:slider_id");

	$kontrol=$sil->execute(array(
		'slider_id'=>$_GET['slider_id']
		));
if ($kontrol) {
	Header("Location:../adminslider.php?durum=ok");
}
else{
	Header("Location:../adminslider.php?durum=no");
}

}





/*if (isset($_POST['sliderduzenle'])) {
	


 $id = $_GET['slider_id'];

$duzenle=$db->prepare("UPDATE slider SET 
slider_ad=:ad,
slider_link=:link,
slider_sira=:sira,
slider_durum=:durum
WHERE slider_id=$id");

$update=$duzenle->execute(array(
'ad'=>$_POST['slider_ad'],
'link'=>$_POST['slider_link'],
'siteurl'=>$_POST['slider_sira'],
'durum'=>$_POST['slider_durum']
));
$slider_id=$id;

if ($update) {
	Header("Location:../adminslider_duzenle.php?slider_id=$slider_id&durum=ok");
}
else{
	Header("Location:../adminslider_duzenle.php?durum=no");
}
}*/



if (isset($_POST['icerikkaydet'])) {

	$uploads_dir='../../images/Icerik';

	@$tmp_name=$_FILES['icerik_resimyol']["tmp_name"];
	@$name=$_FILES['icerik_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


$tarih=$_POST['icerik_tarih'];
$saat=$_POST['icerik_saat'];
$zaman=$tarih." ".$saat;

$kaydet=$db->prepare("INSERT INTO icerik SET 
icerik_ad=:ad,
icerik_zaman=:zaman,
icerik_detay=:detay,
icerik_keyword=:keyword,
icerik_resimyol=:resimyol");

$insert=$kaydet->execute(array(
'ad'=>$_POST['icerik_ad'],
'zaman'=>$zaman,
'detay'=>$_POST['icerik_detay'],
'keyword'=>$_POST['icerik_keyword'],
'resimyol'=>$refimgyol
));

if ($insert) {
	Header("Location:../adminicerik.php?durum=ok");
}
else{
	Header("Location:../adminicerik.php?durum=no");
}
}

if ($_GET['iceriksil']=="ok") {
	$sil=$db->prepare("DELETE from icerik where icerik_id=:icerik_id");

	$kontrol=$sil->execute(array(
		'icerik_id'=>$_GET['icerik_id']
		));
if ($kontrol) {
	Header("Location:../adminicerik.php?durum=ok");
}
else{
	Header("Location:../adminicerik.php?durum=no");
}

}


if (isset($_POST['icerikduzenle'])) {
	

 $id = $_GET['icerik_id'];
if ($_FILES['icerik_resimyol']["size"]>0) {
	 $uploads_dir='../../images/Icerik';

	@$tmp_name=$_FILES['icerik_resimyol']["tmp_name"];
	@$name=$_FILES['icerik_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$tarih=$_POST['icerik_tarih'];
$saat=$_POST['icerik_saat'];
$zaman=$tarih." ".$saat;

$duzenle=$db->prepare("UPDATE icerik SET 
icerik_ad=:ad,
icerik_detay=:detay,
icerik_durum=:durum,
icerik_resimyol=:resimyol,
icerik_zaman=:zaman
WHERE icerik_id=$id");

$update=$duzenle->execute(array(
'ad'=>$_POST['icerik_ad'],
'detay'=>$_POST['icerik_detay'],
'durum'=>$_POST['icerik_durum'],
'zaman'=>$zaman,
'resimyol'=>$refimgyol
));
$icerik_id=$id;

if ($update) {
	$resimsilunlink=$_GET['icerik_resimyol'];
	unlink("../../$resimsilunlink");
	Header("Location:../adminicerik.php?durum=güncellendi");
}
else{
	Header("Location:../adminicerik.php?&durum=no");
}
	
}
else{

	$tarih=$_POST['icerik_tarih'];
$saat=$_POST['icerik_saat'];
$zaman=$tarih." ".$saat;
$duzenle=$db->prepare("UPDATE icerik SET 
icerik_ad=:ad,
icerik_detay=:detay,
icerik_durum=:durum,
icerik_zaman=:zaman
WHERE icerik_id=$id");

$update=$duzenle->execute(array(
'ad'=>$_POST['icerik_ad'],
'detay'=>$_POST['icerik_detay'],
'durum'=>$_POST['icerik_durum'],
'zaman'=>$zaman));
$icerik_id=$id;

if ($update) {
	Header("Location:../adminicerik.php?durum=güncellendi");
}
else{
	Header("Location:../adminicerik.php?&durum=no");
}
}


}

if (isset($_POST['yorumduzenle'])) {
	

 $id = $_GET['yorum_id'];

$duzenle=$db->prepare("UPDATE yorum SET 
yorum_yazan=:yazan,
yorum_detay=:detay,
yorum_durum=:durum
WHERE yorum_id=$id");

$update=$duzenle->execute(array(
'yazan'=>$_POST['yorum_yazan'],
'detay'=>$_POST['yorum_detay'],
'durum'=>$_POST['yorum_durum']
));

if ($update) {
	Header("Location:../adminyorum.php?durum=onaylandı");
}
else{
	Header("Location:../adminyorum.php?&durum=no");
}
	



}



/*
if (isset($_POST['mesajgonder'])) {

$kaydet=$db->prepare("INSERT INTO iletisim SET 
iletisim_ad=:ad,
iletisim_mail=:mail,
iletisim_detay=:detay");

$insert=$kaydet->execute(array(
'ad'=>$_POST['iletisim_ad'],
'mail'=>$_POST['iletisim_mail'],
'detay'=>$_POST['iletisim_detay']

));

if ($insert) {
	Header("Location:../../contact.php?durum=ok");

}
else{
	Header("Location:../../contact.php?durum=no");
}
}
*/



?>