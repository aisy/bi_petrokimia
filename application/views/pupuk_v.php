                <div class="page-content-wrap">                
                
                <div class="row">
                  <div class="col-md-12">
                      
                          <div class="row">
                                  <div class="col-sm-4">
                                    <a href="<?=base_url()?>Device/tambah_device"><button class="btn btn-success">Add Device</button></a>
                                  </div>                        
                          </div>
                        
                   </div>
               </div>
                    
                    
                    <div class="row" style="margin-top:10px;">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title"><strong>Device Data</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Device</th>
                                                <th>Room</th>
                                                <th>Name</th>
                                                <th>Power</th>
                                                <th>GPIO</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $i = 1;
                                              foreach($device as $data1){ ?>
                                            <tr>
                                                
                                                <td><?=$i?></td>
                                                <td><?=$data1->namaKamar?></td>
                                                <td><?=$data1->nama?></td>
                                                <td><?=$data1->daya?></td>
                                                <td><?=$data1->gpio?></td>
                                                <td width="20%">
                                            <div class="btn-group">
                                              <a class="btn btn-primary" href="<?=base_url()?>Device/edit_device/<?=$data1->idPerangkat;?>"> <i class="fa fa-edit"></i></a>
                                              <a class="btn btn-danger" href="<?=base_url()?>Device/delete/<?=$data1->idPerangkat;?>"><i class="fa fa-times"></i></a>
                                            </div>
                                                </td>
                                            </tr>
                                            
                                            <?php 
                                            $i++;
                                            } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

                        </div>
                    </div>                                
                    
                </div>