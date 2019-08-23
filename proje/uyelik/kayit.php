<?php
	include '../admin/baglantii/baglan.php';
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Kayıt Ol</title>
	</head>
	<body>
		<form class="" action="kayit.php" method="POST">
			<table>
				<tr>
					<td>Kullanıcı Adı : </td>
					<td><input type="text" name="kullanici"></td>
				</tr>
				<tr>
					<td>E-Mail : </td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Şifre : </td>
					<td><input type="password" name="sifre"></td>
				</tr>
				<tr>
					<td><input type="submit" name="" value="Kayıt Ol"></td>
				</tr>
			</table>
		</form>
		<?php
		
			if($_POST)
			{
				$kullanici = trim($_POST["kullanici"]);
				$email = trim($_POST["email"]);
				$sifre = trim(md5($_POST["sifre"]));
				
				if($kullanici == "" or $email == "" or $sifre == "")
				{
					echo "Lütfen Boş Alanları Doldurun";
				}
				else
				{
					$ekle = $db->prepare("INSERT INTO uyeler SET kullanici=?,email=?,sifre=?");
					$ekle->Execute(array($kullanici,$email,$sifre));
					if($ekle)
					{
						echo "Kayıt İşleminiz Başarıyla Gerçekleştirildi.";
						header("refresh: 2; URL=index.php");
					}
					else
					{
						echo "Kayıt İşleminiz Gerçekleştirilemedi.";
						header("refresh: 2; URL=kayit.php");
					}
				}
			}
			
		?>
	</body>
</html>