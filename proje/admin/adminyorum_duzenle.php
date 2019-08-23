
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
                       <?php $yorumsor=$db->prepare("SELECT * from yorum where yorum_id=?");
               $id = $_GET['yorum_id'];
              $yorumsor->execute(array($id));
              $yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC); ?>

                        <div class="panel-heading">
                          <?php echo $yorumcek['yorum_yazan'] ?> Kişisinin Yorumunu Düzenle Eğer Uygunsa Onayla
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
                            <form action="baglantii/islem.php?yorum_id=<?php echo $yorumcek['yorum_id'] ?>" method="POST" role="form" class="col-md-12 adminayar">
                                      
                                        <div class="form-group">
                                            <label>Yorum Yazan</label>
                                            <input name="yorum_yazan"  value="<?php echo $yorumcek['yorum_yazan'] ?>" class="form-control"  type="text" readonly>
                                        </div>
                                           
                                        <div class="form-group">
                                            <label>Yorum Detay</label>
                                            <textarea  name="yorum_detay" readonly  class="form-control"  rows="8"><?php echo $yorumcek['yorum_detay']?></textarea>
                                        </div>
                                 
                                     

                                        <div class="form-group" >
                                            <label>Yorum Durumu</label>
                                            <select class="form-control"  name="yorum_durum">
                                            <?php if($yorumcek['yorum_durum']==1){ ?>
                                                  <option value="1">Aktif</option>
                                                  <option value="0">Pasif</option>
                                            <?php } 
                                              else{ ?>
                                                  <option value="0">Pasif</option>
                                                  <option value="1">Aktif</option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                        <button  type="submit" name="yorumduzenle" class="btn btn-success">Kaydet</button>

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