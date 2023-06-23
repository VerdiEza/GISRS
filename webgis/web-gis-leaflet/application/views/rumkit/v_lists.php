<div class="col-lg-12">
        <div class="panel panel-danger">
            <div class="panel-heading">
                Data
            </div>
                <!-- /.panel-heading -->
                    <div class="panel-body">
                        <a href="<?= base_url('rumkit/input')?>" class='btn btn-primary btn-sm'>Input</a>
                        <div><br>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Rumah Sakit</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($rumkit as $key => $value) {?>
                                        <tr>
                                            <td><?= $no++;?></td>
                                            <td><?= $value->nama_rs ?> </td>
                                            <td><?= $value->no_telepon ?></td>
                                            <td><?= $value->alamat ?></td>
                                            <td><?= $value->latitude ?></td>
                                            <td><?= $value->longitude ?></td>
                                            <td>
                                                <a href="" class='btn btn-sm btn-success'>Edit</a>
                                                <a href=""  class='btn btn-danger btn-sm '>Delete</a>
                                            </td>
                                            
                                        </tr>
                                    <?php } ?>
                                        
                                    
                                </tbody>
                            </table>
                    </div> 
                </div> 
         </div> 
        </div> 
  </div> 

