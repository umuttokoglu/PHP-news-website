  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
           <?php $slidersor=$db->prepare("select * from slider order by slider_sira ASC limit 25");
            $slidersor->execute();
             while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)){  ?>
          <div class="single_iteam"><img src="<?php echo $slidercek['slider_resimyol']?>" alt="">
          
            <div class="slider_article slider_articleyeni">
              <a class="slider_tittle" href="icerik.php?icerik_id=<?php echo $icerikcek['icerik_id'] ?>"></a>
            </div>
          </div>
            <?php } ?>
         
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Son 5 Konu</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
             <?php $iceriksor=$db->prepare("select * from icerik order by icerik_zaman DESC  limit 5");
            $iceriksor->execute();?>
            <ul class="latest_postnav"><?php
         while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)){  ?>
            
              <li>
                <div class="media"> <a href="icerik.php?icerik_id=<?php echo $icerikcek['icerik_id'] ?>" class="media-left"> <img alt="" src="<?php echo $icerikcek['icerik_resimyol']?>"> </a>
                  <div class="media-body"> <a href="icerik.php?icerik_id=<?php echo $icerikcek['icerik_id'] ?>" class="catg_title"><?php echo $icerikcek['icerik_ad']?></a> </div>
                </div>
              </li>
           

                <?php } ?>
                 </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  