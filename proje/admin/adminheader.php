
<?php
ob_start();
session_start();
 date_default_timezone_set('Europe/Istanbul');
include 'baglantii/baglan.php'; 

if(isset($_SESSION['kullanici'])){






$kullanicisor=$db->prepare("SELECT * from uyeler where kullanici=:ad");
$kullanicisor->execute(array(
'ad'=>$_SESSION['kullanici']
    ));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

$yetki=$kullanicicek['statu'];
if ($yetki==0) {?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>İstanbul Admin Yönetim Paneli</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/css/adminyenistiller.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="adminindex.php">İstanbul</a>
            </div>

            <div class="header-right">



<div class="btn-group">
  <button type="button" class="btn btn-danger"><?php echo $_SESSION['kullanici']; ?></button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">Profil</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="adminlogout.php">Çıkış</a></li>
  </ul>
</div>




            </div>
        </nav>
         <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                    </li>
                    <li>
                        <a  href="adminindex.php"><i class="fa fa-home "></i>Anasayfa</a>
                    </li>
                       <li>
                        <a  href="adminslider.php"><i class="fa fa-image "></i>Slider İşlemleri</a>
                    </li>
                     <li>
                        <a  href="adminicerik.php"><i class="fa fa-folder-open "></i>İçerik İşlemleri</a>
                    </li>
                     <li>
                        <a  href="adminyorum.php"><i class="fa fa-comment "></i>Yorum İşlemleri</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cog "></i>Ayarlar <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="admingenel_ayar.php"><i class="fa fa-coffee"></i>Genel Ayarlar</a>
                            </li>
                            <li>
                                <a href="adminsosyal_ayar.php"><i class="fa fa-flash "></i>Sosyal Ağ Ayarları</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </nav>

<?php } else{
        header("location: login.php?durum=izinsiz");
    
}






}
else{


header("location: login.php?durum=izinsiz");
    



 }?>

