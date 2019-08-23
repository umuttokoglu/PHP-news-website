<?php 
include 'baglantii/baglan.php'; 
include 'adminheader.php';


if (isset($_POST['arama'])) {
    $aranan=$_POST['aranan'];

$slidersor=$db->prepare("select * from slider where slider_ad LIKE '%$aranan%' order by slider_sira DESC limit 25 ");
$slidersor->execute();
$say=$slidersor->rowCount();
}
else{
    $slidersor=$db->prepare("select * from slider order by slider_sira DESC limit 25 ");
$slidersor->execute();

$say=$slidersor->rowCount();
}

?>
    
        <div id="page-wrapper">
          
                <div class="row">
                    <div class="col-md-12">                       
                      <div class="panel panel-default">
                       
                        <div class="panel-heading">
                            Slider İşlemleri 
                            <a href="adminslider_ekle.php"><button name="sliderduzenle" class="btn btn-success btn-xs"><i class="fa fa-plus-circle "></i>Yeni Slider Ekle</button></a>
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
                                            
                                            <th>Slider Resim</th>
                                            <th>Slider Ad</th>
                                            <th>Slider Sıra</th>
                                            <th>Slider Durum</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php


                                                        $sayfada=4;
              $sorgu=$db->prepare("select * from slider");
              $sorgu->execute();
              $say=$sorgu->rowCount();
              $toplam=ceil($say/$sayfada);
              $sayfa=isset($_GET['sayfa']) ? (int) $_GET['sayfa'] :1;
              if($sayfa<1) $sayfa=1;
              if($sayfa>$toplam) $sayfa=$toplam;
              $limit=($sayfa-1)*$sayfada;
              $slidersor=$db->prepare("select * from slider order by slider_sira ASC limit $limit,$sayfada");
              $slidersor->execute();

                                       while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)){  ?>
                                      <tr>
                                            <td><img width="200" height="100" src="../<?php echo $slidercek['slider_resimyol'] ?>"></td>
                                            
                                            <td><?php echo $slidercek['slider_ad'] ?></td>
                                            <td><?php echo $slidercek['slider_sira'] ?></td>
                                            <td><?php echo $slidercek['slider_durum'] ?></td>
                                           
                                           <!--<td><a href="adminslider_duzenle.php?slider_id=<?php //echo $slidercek['slider_id'] ?>"><button name="sliderduzenle" class="btn btn-primary btn-xs"><i class="fa fa-pencil "></i>Düzenle</button></a></td>-->
                                            
                                            <td><a href="baglantii/islem.php?slidersil=ok&slider_id=<?php echo $slidercek['slider_id']?>"><button name="slidersil" class="btn btn-danger btn-xs" style="width: 65px"><i class="fa fa-trash-o "></i>Sil</button></a></td>

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


           <li class="active"><a href="adminslider.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?><span class="sr-only"></span></a></li>

        
       <?php } else { ?>
           <li ><a href="adminslider.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?><span class="sr-only"></span></a></li>

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