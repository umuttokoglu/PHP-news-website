
       <?php
        include 'adminheader.php';        ?>
        <!-- /. NAV TOP  -->
      
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
          
                <div class="row">
                    <div class="col-md-12">                       
                      <div class="panel panel-default genelayarstil">
                       
                        <div class="panel-heading">
                           İçerik İşlemleri<small><small>* Boş bırakılamaz!</small></small>
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
                            <form action="baglantii/islem.php" method="POST" role="form" class="col-md-7 adminayar" enctype="multipart/form-data" >
                                       

                                        <div class="form-group">
                                            <label>Resim Seç</label>
                                            <input name="icerik_resimyol"  class="form-control"  type="file">
                                        </div>
                                           
                                        <div class="form-group" >
                                            <label>İçerik Tarih*</label>
                                     
                                                <input name="icerik_tarih" value="<?php echo date('Y-m-d') ?>" required="required"  class="form-control"  type="date">
                                                <input name="icerik_saat" value="<?php echo date('H:i:s') ?>" required="required"  class="form-control"  type="time">
                                          
                                        </div>
                                           

                                        <div class="form-group">
                                            <label>İçerik Ad*</label>
                                            <input name="icerik_ad" required="required" placeholder="İçerik Adını Giriniz.." class="form-control"  type="text">
                                        </div>
                                           
                                   
                                        <div class="form-group">
                                            <label>İçerik Detay*</label>
                                            <textarea required="required" name="icerik_detay"  placeholder="Metni buraya yazınız..." class="form-control" rows="8"></textarea>
                                        </div>
                                 
                                        
                                        <div class="form-group">
                                            <label>İçerik Anahtar Kelimeler</label>
                                            <input name="icerik_keyword"  class="form-control" placeholder="Anahtar kelimleri giriniz..." type="text">
                                        </div>    

                                        <div class="form-group" >
                                            <label>İçerik Durumu</label>
                                            <select class="form-control" name="icerik_durum">
                                                <option value="1">Aktif</option>
                                                <option value="0">Pasif</option>
                                            </select>
                                        </div>
                                        <button  type="submit" name="icerikkaydet" class="btn btn-success">Kaydet</button>

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