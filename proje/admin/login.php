<?php
error_reporting(0);
ob_start();
session_start();
 include 'baglantii/baglan.php' ?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yönetici Girişi</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #FFFFFF;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/logo-invoice.jpg" />
            </div>
        </div>
         <div class="row "><br>
               <h2 style="text-align:center;">Yönetim Paneli</h2>
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form action="baglantii/islem.php" method="POST" name="giris" onsubmit="return check_login()" role="form">
                                    <hr />
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="kullanici" required="" class="form-control" placeholder="Kullanıcı adınız..." />
                                        </div>
                                            <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" required="" name="sifre" class="form-control"  placeholder="Şifreniz..." />
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline">
                                              
                                            </label>
                                        </div>
                                        <button name="girisyap" type="submit" class="btn btn-success ">Giriş</button>
                                     <?php if ($_GET['durum']==no){ ?>

                                        <label>Kayıt bulunamadı.</label>   

                                     <?php } ?>
                                     <?php if ($_GET['durum']==cikis){ ?>
                                          <label>Başarıyla çıkış yaptınız.<a href="../index.php">Siteye dön.</a></label>   

                                     <?php } ?>
                                     <?php if ($_GET['durum']==izinsiz){ ?>
                                          <label>Yönetici değilsiniz.<a href="../index.php">Siteye dön.</a></label>   

                                     <?php } ?>
                                    <hr />
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>
 <script>
     
      
      function check_login(){
        var email = document.forms["giris"]["kullanici"].value;
        var parola = document.forms["giris"]["sifre"].value;
    
    if (email == "") {
      alert("Lütfen kullanıcı adını boş bırakmayınız.");
      return false;
    }
    
    if (parola == "") {
      alert("Lütfen parolanızı giriniz.");
      return false;
    }
    
      }
    </script>
</body>
</html>
