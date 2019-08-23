<?php include 'header.php' ?>
    
  <?php  include 'slider.php' ?>
  



    <section id="contentSection">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="left_content">
         <div class="single_page">
          <div class="single_post_content">
            <h2><span>Tüm Konular</span></h2>
            <div class="col-lg-12 col-md-12 col-sm-12">
            <?php $iceriksor=$db->prepare("select * from icerik order by icerik_zaman DESC limit 25");
            $iceriksor->execute();

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
               <div  class=" col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
              <ul class="business_catgnav  wow fadeInDown">
                <li>
                  <figure class="bsbig_fig"> <a href="icerik.php?icerik_id=<?php echo $icerikcek['icerik_id'] ?>" class="featured_img"> <img alt="" src="<?php echo $icerikcek['icerik_resimyol']?>"> <span class="overlay"></span> </a>
                    <figcaption><?php echo $icerikcek['icerik_ad']?></figcaption>
                    <small><?php echo $icerikcek['icerik_zaman']?></small> 

                    <?php $detay = $icerikcek['icerik_detay'];
                    $uzunluk = strlen($detay);
                    $limit =200;
                    if ($uzunluk > $limit) {
                      $detay = substr($detay,0,$limit) . " .........  devamını görmek için resime tıklayınız...";
                    } ?>
                    <p><?php echo $detay ?></p>
                  </figure>
                    
                </li>
              </ul>
              </div>
                <div clear="both"></div>
                <?php } ?>
            </div>
          </div>
        </div>

        <ul class="pagination">
        <?php 
        $s=0;
        while ($s <$toplam) {
          $s++;?> 
        
        <?php if ($s==$sayfa) {?>


           <li class="active"><a href="index.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?><span class="sr-only"></span></a></li>

        
       <?php } else { ?>
           <li ><a href="index.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?><span class="sr-only"></span></a></li>

        <?php } 
          }
          ?>
        </ul>


        </div>
      </div>
    </div>
  </section>
 <?php include 'footer.php' ?>