
       <?php
        include 'adminheader.php'; 
               error_reporting(E_ALL ^ E_NOTICE); 
               ?>
    
        <!-- /. NAV TOP  -->
      
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
          
                <div class="row">
                    <div class="col-md-12">                       
                      <div class="panel panel-default genelayarstil">
                       <?php $iceriksor=$db->prepare("SELECT * from icerik where icerik_id=?");
               $id = $_GET['icerik_id'];
              $iceriksor->execute(array($id));
              $icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC); ?>

                        <div class="panel-heading">
                          <?php echo $icerikcek['icerik_ad'] ?> İçeriğini Düzenle
                          <!-- 
                            <div class="pull-right">
                                <form id="searchForm">
                                    <input type="text" placeholder="Arama...">
                                    <input type="submit" value="Ara">
                                </form>
                            </div>
                            -->
                        </div>
                        

               <div class="panel panel-info">
                        
                        <div class="panel-body">
                        
                                    <div class="col-md-6">
                            <form action="baglantii/islem.php?icerik_id=<?php echo $icerikcek['icerik_id'] ?>&icerik_resimyol=<?php echo $icerikcek['icerik_resimyol'] ?>" method="POST" role="form" class="col-md-12 adminayar" enctype="multipart/form-data" >
                                      

                                        <div class="form-group">
                                            <label>Şuan Bulunan Resim</label><br>
                                            <img width="200" height="100" src="../<?php echo $icerikcek['icerik_resimyol'] ?>">
                                            <input name="icerik_resimyol"  class="form-control"  type="file">
                                        </div>
                                           
                                        <div class="form-group" >
                                            <label>İçerik Tarih*</label>

                                                <input name="icerik_tarih" value="<?php echo date('Y-m-d') ?>" required="required"  class="form-control"  type="date">
                                                <input name="icerik_saat" value="<?php echo date('H:i:s') ?>" required="required"  class="form-control"  type="time">
                                          
                                        </div>
                                           

                                        <div class="form-group">
                                            <label>İçerik Ad</label>
                                            <input name="icerik_ad"  value="<?php echo $icerikcek['icerik_ad'] ?>" class="form-control"  type="text">
                                        </div>
                                           
                                   
                                        <div class="form-group">
                                            <label>İçerik Detay</label>
                                            <textarea  name="icerik_detay"   class="form-control"  rows="8"><?php echo $icerikcek['icerik_detay']?></textarea>
                                        </div>
                                 
                                        
                                        <div class="form-group">
                                            <label>İçerik Anahtar Kelimeler</label>
                                            <input name="icerik_keyword"  class="form-control" value="<?php echo $icerikcek['icerik_keyword'] ?>" type="text">
                                        </div>    

                                        <div class="form-group" >
                                            <label>İçerik Durumu</label>
                                            <select class="form-control" name="icerik_durum">
                                                <option value="1">Aktif</option>
                                                <option value="0">Pasif</option>
                                            </select>
                                        </div>
                                        <button  type="submit" name="icerikduzenle" class="btn btn-success">Kaydet</button>

                                    </form>
                                    </div>
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