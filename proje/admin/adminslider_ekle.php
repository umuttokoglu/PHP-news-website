
       <?php
        include 'adminheader.php'; 
        include 'baglantii/baglan.php'; 

       ?>
        <!-- /. NAV TOP  -->
      
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
          
                <div class="row">
                    <div class="col-md-12">                       
                      <div class="panel panel-default genelayarstil">
                       
                        <div class="panel-heading">
                           Slider İşlemleri<small><small>* Boş bırakılamaz!</small></small>
                            <!-- <div class="pull-right">
                                
                            <form id="searchForm">
                              <input type="text" placeholder="Arama...">
                              <input type="submit" value="Ara">
                            </form>
                        
                            </div>-->
                        </div>
                        

               <div class="panel panel-info">
                        
                        <div class="panel-body">
                            <form action="baglantii/islem.php" method="POST" role="form" class="col-md-6 adminayar" enctype="multipart/form-data" >
                                       

                                        <div class="form-group">
                                            <label>Resim Seç*</label>
                                            <input name="slider_resimyol" required="required"  class="form-control"  type="file">
                                        </div>
                                           

                                        <div class="form-group">
                                            <label>Slider Ad*</label>
                                            <input name="slider_ad" required="required" placeholder="Slider Adını Giriniz.." class="form-control"  type="text">
                                        </div>
                                           
                                   
                                        <div class="form-group">
                                            <label>Slider Link</label>
                                            <input name="slider_link" placeholder="Slider Linkini Giriniz.." class="form-control"  type="text">
                                        </div>
                                 
                                        
                                        <div class="form-group">
                                            <label>Slider Sıra*</label>
                                            <input name="slider_sira" required="required" value="0" class="form-control"  type="text">
                                        </div>    

                                        <div class="form-group" >
                                            <label>Slider Durumu</label>
                                            <select class="form-control" name="slider_durum">
                                                <option value="1">Aktif</option>
                                                <option value="0">Pasif</option>
                                            </select>
                                        </div>
                                        <button  type="submit" name="sliderkaydet" class="btn btn-success">Kaydet</button>

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