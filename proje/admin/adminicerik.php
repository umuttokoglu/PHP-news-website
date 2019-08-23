<?php 

include 'adminheader.php';


if (isset($_POST['arama'])) {
    $aranan=$_POST['aranan'];

$iceriksor=$db->prepare("select * from icerik where icerik_ad LIKE '%$aranan%' order by icerik_id DESC limit 25 ");
$iceriksor->execute();
$say=$iceriksor->rowCount();
}
else{
    $iceriksor=$db->prepare("select * from icerik order by icerik_id DESC limit 25 ");
$iceriksor->execute();

$say=$iceriksor->rowCount();
}
?>
        <div id="page-wrapper">
          
                <div class="row">
                    <div class="col-md-12">                       
                      <div class="panel panel-default">
                       
                        <div class="panel-heading">
                            İçerik İşlemleri
                            <a href="adminicerik_ekle.php"><button name="icerikduzenle" class="btn btn-success btn-xs"><i class="fa fa-plus-circle "></i>Yeni içerik Ekle</button></a>
                            <div class="pull-right">
                                
                            <form id="searchForm" action="" method="POST">
                              <input type="text" name="aranan" placeholder="Arama...">
                              <input type="submit" name="arama" value="Ara">
                            </form>
                        
                            </div>
                        </div>
                         <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>İçerik Resim</th>
                                            <th>İçerik Tarih</th>
                                            <th>İçerik Ad</th>
                                            <th>İçerik Durum</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php


                                    $sayfada=4;
              $sorgu=$db->prepare("select * from icerik");
              $sorgu->execute();
              $say=$sorgu->rowCount();
              $toplam=ceil($say/$sayfada);
              $sayfa=isset($_GET['sayfa']) ? (int) $_GET['sayfa'] :1;
              if($sayfa<1) $sayfa=1;
              if($sayfa>$toplam) $sayfa=$toplam;
              $limit=($sayfa-1)*$sayfada;
              $iceriksor=$db->prepare("select * from icerik order by icerik_zaman DESC limit $limit,$sayfada");
              $iceriksor->execute();

                                        while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)){  ?>
                                      <tr>
                                            <td><img width="200" height="100" src="../<?php echo $icerikcek['icerik_resimyol'] ?>"></td>
                                            <td><?php echo $icerikcek['icerik_zaman'] ?></td>
                                            <td><?php echo $icerikcek['icerik_ad'] ?></td>
                                            <td><?php echo $icerikcek['icerik_durum'] ?></td>
                                           
                                           <td><a href="adminicerik_duzenle.php?icerik_id=<?php echo $icerikcek['icerik_id'] ?>"><button name="icerikduzenle" class="btn btn-primary btn-xs"><i class="fa fa-pencil "></i>Düzenle</button></a></td>
                                            <td><a href="baglantii/islem.php?iceriksil=ok&icerik_id=<?php echo $icerikcek['icerik_id'] ?>"><button name="iceriksil" class="btn btn-danger btn-xs" style="width: 65px"><i class="fa fa-trash-o "></i>Sil</button></a></td>

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                                 <ul class="pagination">
        <?php 
        $s=0;
        while ($s <$toplam) {
          $s++;?> 
        
        <?php if ($s==$sayfa) {?>


           <li class="active"><a href="adminicerik.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?><span class="sr-only"></span></a></li>

        
       <?php } else { ?>
           <li ><a href="adminicerik.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?><span class="sr-only"></span></a></li>

        <?php } 
          }
          ?>
        </ul>

                            </div>
                      
                      </div>
                    </div>
                </div>
                <!-- /. ROW  -->
             

        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
 <?php include 'adminfooter.php'; ?>