
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
                           Sosyal Ağ Ayarları
                            <!-- <div class="pull-right">
                                
                            <form id="searchForm">
                              <input type="text" placeholder="Arama...">
                              <input type="submit" value="Ara">
                            </form>
                        
                            </div>-->
                        </div>
                        

               <div class="panel panel-info">
                        
                        <div class="panel-body">
                            <form action="baglantii/islem.php" method="POST" role="form" class="col-md-6 adminayar" >
                                       
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input id="logo" name="ayar_facebook" class="form-control" value="<?php echo $ayarcek['ayar_facebook']?>" type="text">
                                        </div>
                                            <div class="form-group">
                                            <label>Twitter</label>
                                             <input id="title" name="ayar_twitter" class="form-control" value="<?php echo $ayarcek['ayar_twitter']?>" type="text">
                                        </div>
                                
                                          
                                  
                                 
                                        <button  type="submit" name="güncellesosyal" class="btn btn-success">Güncelle</button>

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