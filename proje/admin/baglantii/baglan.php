<?php 

try{
	$db=new PDO("mysql:host=localhost;dbname=u303600910_proje;charset=utf8", '','');
	//echo"bağlantı başarılı";
}

catch(PDOExpception $e){

echo $e->getMessage();

}

?>
