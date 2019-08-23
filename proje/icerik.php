<?php include 'header.php'
 ?>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
 


  <section id="contentSection">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="left_content">
         <div class="single_page">
          <div class="single_post_content">
           <?php  
               $iceriksor=$db->prepare("select * from icerik where icerik_id=?");
               $id = $_GET['icerik_id'];
              $iceriksor->execute(array($id));
              $icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC); ?>
            <h2><span><?php echo $icerikcek['icerik_ad']?></span></h2>
           
              <ul class="business_catgnav  wow fadeInDown">
                <li>
                 <div  class="col-lg-4 col-md-4 col-sm-4">
                  <figure class="bsbig_fig"> <a href="icerik.php?icerik_id=<?php echo $icerikcek['icerik_id'] ?>" class="featured_img"> <img alt="" src="<?php echo $icerikcek['icerik_resimyol']?>"> <span class="overlay"></span> </a> <br> <br><small><?php echo $icerikcek['icerik_zaman']?></small>
                   </figure></div>

                    
                    <div  class="col-lg-8 col-md-8 col-sm-8">
                    <figcaption><?php echo $icerikcek['icerik_detay']?></figcaption>
                  </div>
                 
                </li>
              </ul>
              <div class="single_post_content col-lg-4 col-md-4 col-sm-4">

                  <h2><span>Yorumlar</span></h2>
                    <?php $yorumsor=$db->prepare("select * from yorum order by yorum_id DESC  limit 10");
                          $yorumsor->execute();
                           while($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)){  ?>
                                      <?php  $id = $_GET['icerik_id'];
                                      if($id== $yorumcek['yorumicerik_id']){
                                      if($yorumcek['yorum_durum']==1){ ?>
                                        <div class="form-group" >

                                            <div class="media-body">
                                            <label><?php echo $yorumcek['yorum_yazan']?></label><br>
                                             <figcaption><?php echo $yorumcek['yorum_detay']?></figcaption>

                                            </div>
                                        </div>
                                        <?php }
                                        } ?>
                                      
                              <?php } ?>
                            </div>
           
              
               <div class="single_post_content">
                  <h2><span>Yorum Yap</span></h2>
                            <form action="admin/baglantii/yorum.php?icerik_id=<?php echo $icerikcek['icerik_id'] ?>" method="POST" role="form" class="col-md-7 adminayar" enctype="multipart/form-data" >
                                       
                                          
                                             <?php if (isset($_SESSION['kullanici'])){ ?>
                                             <label>Yorum Yapan</label>
                                             <input name="yorum_yazan" value="<?php echo $_SESSION['kullanici']; ?>" required="required"  class="form-control"  type="text" readonly>
                                                    <?php } else{ ?>
                                                    <label>E-posta</label>
                                                     <input name="yorum_yazan" value="" required="required"  class="form-control"  type="text">
                                                     <?php } ?>
                                            <label>Tarih</label>
                                     
                                                <input name="yorum_tarih" value="<?php echo date('Y-m-d') ?>" required="required"  class="form-control"  type="date">
                                                <input name="yorum_saat" value="<?php echo date('H:i:s') ?>" required="required"  class="form-control"  type="time">
                                          
                                       
                                        <div class="form-group">
                                            <label>Yorum</label>
                                            <textarea required="required" name="yorum_detay"  placeholder="Metni buraya yazınız..." class="form-control" rows="8"></textarea>
                                        </div>
                                 
                                       
                                        <button  type="submit" name="yorumkaydet" class="btn btn-success">Kaydet</button>

                                    </form>
                                          </div>
                            </div>
           
          </div>
        </div>
        </div>
         
      </div>
    </div>
  </section>
 <?php include 'footer.php' ?>