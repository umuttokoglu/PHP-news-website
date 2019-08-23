
       <?php
        include 'adminheader.php'; 
        include 'baglantii/baglan.php'; 

        $ayarsor=$db->prepare("select * from ayar where ayar_id=?");
        $ayarsor->execute(array(0));
        $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
       ?>
        <!-- /. NAV TOP  -->
      
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
          
                <div class="row">
                    <div class="col-md-12">                       
                      <div class="panel panel-default genelayarstil">
                       
                        <div class="panel-heading">
                           Genel Ayarlar
                            <!-- <div class="pull-right">
                                
                            <form id="searchForm">
                              <input type="text" placeholder="Arama...">
                              <input type="submit" value="Ara">
                            </form>
                        
                            </div>-->
                        </div>
                        

               <div class="panel panel-info">
                        
                        <div class="panel-body">
                            <form name="frm" action="baglantii/islem.php" method="POST" role="form" class="col-md-6 adminayar" >
                                       
                                        <div class="form-group">
                                            <label>Site Logo</label>
                                            <input id="logo" name="ayar_logo" class="form-control"  type="text">
                                        </div>
                                            <div class="form-group">
                                            <label>Site Başlığı</label>
                                             <input id="title" name="ayar_title" class="form-control" value="<?php echo $ayarcek['ayar_title']?>" type="text">
                                        </div>
                                
                                            <div class="form-group">
                                            <label>Site Adresi</label>
                                            <input id="siteurl" name="ayar_siteurl" class="form-control" value="<?php echo $ayarcek['ayar_siteurl']?>" type="text">
                                        </div>

                                            <div class="form-group">
                                            <label>Site Açıklaması</label>
                                            <input id="aciklama" name="ayar_aciklama" class="form-control" value="<?php echo $ayarcek['ayar_aciklama']?>" type="text">
                                        </div>
                                  
                                 
                                            <div class="form-group">
                                            <label>Site Anahtar Kelimeleri</label>
                                            <input id="anahtarkelime" name="ayar_anahtarkelime" class="form-control" value="<?php echo $ayarcek['ayar_anahtarkelime']?>" type="text">
                                        </div>
                                  
                                 

                                            <div class="form-group">
                                            <label>Site Yazarı</label>
                                            <input id="yazar" name="ayar_yazar" class="form-control" value="<?php echo $ayarcek['ayar_yazar']?>" type="text">
                                        </div>
                                  
                                 
                                  
                                 
                                        <button  type="submit" name="güncelle" class="btn btn-success">Güncelle</button>

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
 