       <?php
        include 'adminheader.php'; 
        include 'baglantii/baglan.php'; 
        error_reporting(E_ALL ^ E_NOTICE); 

       ?>
        <!-- /. NAV TOP  -->
      
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
          
                <div class="row">
                    <div class="col-md-12">                       
                      <div class="panel panel-default genelayarstil">
                       <?php 
                        $slidersor=$db->prepare("SELECT * from slider where slider_id=?");
                        $id = $_GET['slider_id'];
                        $slidersor->execute(array($id));
                        $slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);
                         ?>

                        <div class="panel-heading">
                           <?php echo $slidercek['slider_ad']?> Düzenle
                            <!-- <div class="pull-right">
                                
                            <form id="searchForm">
                              <input type="text" placeholder="Arama...">
                              <input type="submit" value="Ara">
                            </form>
                        
                            </div>-->
                        </div>
                        

               <div class="panel panel-info">
                        
                        <div class="panel-body">
                            <form action="baglantii/islem.php?slider_id=<?php echo $slidercek['slider_id'] ?>" method="POST" role="form" class="col-md-6 adminayar" enctype="multipart/form-data" >
                                       <input type="hidden" name="slider_id" value="<?php echo $slidercek['slider_id'];?>">

                                        <div class="form-group">
                                            <label>Resim Seç*</label>
                                            <input name="slider_resimyol"   class="form-control"  type="file">
                                        </div>
                                           

                                        <div class="form-group">
                                            <label>Slider Ad*</label>
                                            <input name="slider_ad" required="required" value="<?php echo $slidercek['slider_ad']?>" class="form-control"  type="text">
                                        </div>
                                           
                                   
                                        <div class="form-group">
                                            <label>Slider Link</label>
                                            <input name="slider_link" value="<?php echo $slidercek['slider_link']?>" class="form-control"  type="text">
                                        </div>
                                 
                                        
                                        <div class="form-group">
                                            <label>Slider Sıra*</label>
                                            <input name="slider_sira" required="required" value="<?php echo $slidercek['slider_sira']?>" class="form-control"  type="text">
                                        </div>    

                                        <div class="form-group" >
                                            <label>Slider Durumu</label>
                                            <select class="form-control" name="slider_durum">
                                               <?php

                                                if ($slidercek['slider_durum']==1) { ?>
                                                  
                                                  <option value="1">Aktif</option>
                                                  <option value="0">Pasif</option>
                                                <?php  } 
                                                else { ?>
                                                    <option value="0">Pasif</option>
                                                    <option value="1">Aktif</option>
                                                <?php  } ?>
                                            </select>
                                        </div>
                                        <button  type="submit" name="sliderduzenle" class="btn btn-success">Kaydet</button>

                                    </form>
                            </div>
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




