<?php 

include 'adminheader.php';
?>
        <div id="page-wrapper">
          
                <div class="row">
                    <div class="col-md-12">                       
                      <div class="panel panel-default">
                        <div class="panel-heading">
                            Yorum İşlemleri
                        </div>
                         <div class="table-responsive">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Yorum Yazan</th>
                                            <th>Yorum Detay</th>
                                            <th>Yorum Tarih</th>
                                            <th>Yorum Durum</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                                    $sayfada=10;
                                    $sorgu=$db->prepare("select * from yorum");
                                    $sorgu->execute();
                                    $say=$sorgu->rowCount();
                                    $toplam=ceil($say/$sayfada);
                                    $sayfa=isset($_GET['sayfa']) ? (int) $_GET['sayfa'] :1;
                                    if($sayfa<1) $sayfa=1;
                                    if($sayfa>$toplam) $sayfa=$toplam;
                                    $limit=($sayfa-1)*$sayfada;
                                    $yorumsor=$db->prepare("select * from yorum order by yorum_zaman DESC limit $limit,$sayfada");
                                    $yorumsor->execute();
                                    while($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)){  ?>
                                      <tr>
                                          <td><?php echo $yorumcek['yorum_yazan'] ?></td>
                                          <td><?php echo $yorumcek['yorum_detay'] ?></td>
                                          <td><?php echo $yorumcek['yorum_zaman'] ?></td>
                                          <td>
                                            <?php if($yorumcek['yorum_durum']==1){ ?>
                                                 <label>Onaylanmış</label>
                                            <?php } 
                                              else{ ?>
                                                <label>Onaylanmamış</label>
                                            <?php } ?>
                                          </td>
                                          <td>
                                            <a href="adminyorum_duzenle.php?yorum_id=<?php echo $yorumcek['yorum_id'] ?>">
                                              <button name="yorumonay" class="btn btn-success btn-xs" ><i class="fa fa-check "></i>Onay İşlemleri</button>
                                            </a>
                                          </td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                  </table>

                                 <ul class="pagination">
        <?php 
        $s=0;
        while ($s <$toplam) {
          $s++;?> 
        
        <?php if ($s==$sayfa) {?>


           <li class="active"><a href="adminyorum.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?><span class="sr-only"></span></a></li>

        
       <?php } else { ?>
           <li ><a href="adminyorum.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?><span class="sr-only"></span></a></li>

        <?php } 
          }
          ?>
        </ul>

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