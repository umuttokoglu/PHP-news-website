<?php

	include '../admin/baglantii/baglan.php';
	error_reporting(0);

?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Üye Girişi</title>
  
  
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Giriş Yap</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Kayıt Ol</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<form class="" action="index.php" name="giris" onsubmit="return check_login()" method="POST">
					<div class="group">
						<label for="user" class="label">Kullanıcı Adı</label>
						<input id="user" type="text" class="input" name="kullanici">
						<input id="user" type="text" class="input" name="giris" style="display:none">
					</div>
					<div class="group">
						<label for="pass" class="label">Parola</label>
						<input id="pass" type="password" class="input" data-type="password" name="sifre">
					</div>
					<div class="group">
						<input type="submit" class="button" value="Giriş Yap">
					</div>
					<div class="hr"></div>
					
			
					<?php
				
					if(isset($_POST["giris"]))		
					{
						session_start();
						$kullanici = $_POST["kullanici"];
						$sifre = md5($_POST["sifre"]);
						
						$cek = $db->prepare("SELECT * FROM uyeler WHERE kullanici=? AND sifre=?");
						$cek->Execute(array($kullanici,$sifre));
						$islem = $cek->fetch();
						
						if($islem)
						{
							$_SESSION["giris"] = true;
							$_SESSION["kullanici"] = $islem["kullanici"];
							$_SESSION["email"] = $islem["email"];
							$_SESSION["sifre"] = $islem["sifre"];
							$_SESSION["statu"] = $islem["statu"];
							header("Location:../index.php");

						}
						else
						{
							echo "<div class='foot-lnk' style='color:#ff4141;'>Böyle Bir Kullanıcı Bulunmamakta.</div>";
						}
					}

					?>
					<?php
				
						if(isset($_POST["kayit"]))
						{
							$kullanici = trim($_POST["kullanici"]);
							$email = trim($_POST["email"]);
							$sifre = trim(md5($_POST["sifre"]));
							
							if($kullanici == "" or $email == "" or $sifre == "")
							{
								echo "<div class='foot-lnk'><label for='tab-1' style='color:#ff4141;'>Lütfen Boş Alanları Doldurun</a></div>";
							}
							else
							{
								$ekle = $db->prepare("INSERT INTO uyeler SET kullanici=?,email=?,sifre=?");
								$ekle->Execute(array($kullanici,$email,$sifre));
								if($ekle)
								{
									echo "<div class='foot-lnk'><label for='tab-1' style='color:#53b100;'>Kayıt İşleminiz Başarıyla Gerçekleştirildi.</a></div>";
								}
								else
								{
									echo "<div class='foot-lnk'><label for='tab-1' style='color:#ff4141;'>Kayıt İşleminiz Gerçekleştirilemedi.</a></div>";
								}
							}
						}
						
					?>
				</form>
			</div>
			<div class="sign-up-htm">
				<form class="" action="index.php" onsubmit="return check_register()" name="kayit" method="POST">
					<div class="group">
						<label for="user" class="label">Kullanıcı Adı</label>
						<input id="user" type="text" class="input" name="kullanici">
						<input id="user" type="text" class="input" name="kayit" style="display:none">
					</div>
					<div class="group">
						<label for="pass" class="label">E-Mail</label>
						<input id="pass" type="text" class="input" name="email">
					</div>
					<div class="group">
						<label for="pass" class="label">Parola</label>
						<input id="pass" type="password" class="input" data-type="password" name="sifre">
					</div>
					<div class="group">
						<input type="submit" class="button" value="Kayıt Ol">
					</div>
					<div class="hr"></div>
				</form>
			</div>
		</div>
	</div>
</div>
  
    <script>
    	function check_register(){
    		var isim = document.forms["kayit"]["kullanici"].value;
    		var email = document.forms["kayit"]["email"].value;
    		var parola = document.forms["kayit"]["sifre"].value;
    		var atpos=email.indexOf("@");
            var dotpos=email.lastIndexOf(".");

    		
    		if (isim == "") {
			alert("Lütfen isim kısmını boş bırakmayınız.");
			return false;
		}

		if (email == "" || atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
			alert("Lütfen geçerli bir email adresi giriniz.");
			return false;
		}
		
		if (parola == "") {
			alert("Lütfen parolanızı giriniz.");
			return false;
		}
		
    	}
    	
    	function check_login(){
    		var email = document.forms["giris"]["kullanici"].value;
    		var parola = document.forms["giris"]["sifre"].value;
		
		if (email == "") {
			alert("Lütfen kullanıcı adınızı boş bırakmayınız.");
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