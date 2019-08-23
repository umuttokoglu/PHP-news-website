<?php
ob_start();
session_start();
error_reporting(0);
include 'admin/baglantii/baglan.php'; 
$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>



<!DOCTYPE html>
<html>
<head>
<title><?php echo $ayarcek['ayar_title'];?></title>
<meta charset="utf-8">
<meta name="description" content="<?php echo $ayarcek['ayar_aciklama'];?>">
<meta name="keywords" content="<?php echo $ayarcek['ayar_anahtarkelime'];?>">
<meta name="author" content="<?php echo $ayarcek['ayar_yazar'];?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/yenistiller.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
      
  <section id="navArea ">
    <nav class="navbar navbar-inverse " role="navigation">
      <div class="navbar-header ">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse pad10">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Anasayfa</span></a></li>
          <!--<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">İstanbul</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="tur.php">Küçük bir tur</a></li>
              <li><a href="onemliyer.php">Önemli Yerler</a></li>
              <li><a href="tarih.php">Tarih</a></li>
              <li><a href="sanat.php">Kültür-Sanat</a></li>
            </ul>
          </li>-->


          <?php if (isset($_SESSION['kullanici'])){ ?>
           <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['kullanici'] ?></a>
            <ul class="dropdown-menu" role="menu">
              <!--<li><a href="uyelik/profil.php">Ayarlar</a></li>-->
              <li><a href="uyelik/logout.php">Çıkış Yap</a></li>
            </ul>
          </li>
          <?php } else{ ?>
 <li><a href="uyelik/index.php">Giris Yap/Kaydol</a></li>
<?php } ?>



   
        </ul>
      </div>
    </nav>
  </section>
  </header>
    <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
 


        <div class="latest_newsarea"> <span>Son Konular</span>

          <ul id="ticker01" class="news_sticker">
 <?php $iceriksor=$db->prepare("select * from icerik order by icerik_zaman DESC limit 25");
            $iceriksor->execute();
            
         while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)){  ?>

            <li><a href="icerik.php?icerik_id=<?php echo $icerikcek['icerik_id'] ?>"><img src="<?php echo $icerikcek['icerik_resimyol']?>" alt=""><?php echo $icerikcek['icerik_ad']?></a></li>
            
         
           <?php } ?>
            </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="<?php echo $ayarcek['ayar_facebook'];?>"></a></li>
              <li class="twitter"><a href="<?php echo $ayarcek['ayar_twitter'];?>"></a></li>
            </ul>
          </div>
        </div>
      </div>
    


    </div>
  </section>
