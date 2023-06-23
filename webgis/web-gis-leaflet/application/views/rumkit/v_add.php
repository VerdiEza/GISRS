
<div class="col-lg-7">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    Lokasi Rumah Sakit
                                </div>
                                <div class="panel-body">
                                <div id="map" style="width: 100%; height: 506px;"></div>
<script>
var map = L.map('map').setView([-6.918132, 106.931548], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);


</script>
                                </div>
                            </div>
                            <!-- /.col-lg-4 -->
                        </div>
                        <div class="col-lg-5">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    Input Data Rumah Sakit
                                </div>
                                <div class="panel-body">

                                <?php echo 
                                form_open('rumkit/input');
                                ?>

                                                <div class="form-group">
                                                    <label>Nama Rumah Sakit</label>
                                                    <input class="form-control" name="nama_rs" placeholder="Masukkan Nama RS" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>No Telepon</label>
                                                    <input class="form-control" name="no_telepon" placeholder="08......." required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <input class="form-control" name="alamat" placeholder="Masukkan Alamat" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Latitude</label>
                                                    <input type='text' class="form-control" name="latitude" placeholder="Masukkan Latitude" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Longitude</label>
                                                    <input type='text' class="form-control" name="longitude" placeholder="Masukkan Longitude" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Deskripsi</label>
                                                   <textarea calss="form_control" name="deskripsi" id="" cols="41" placeholder="Tulis deskripsi..."required></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <button class="btn btn-success btn-sm" type='submit'>Simpan</button>
                                                    <button class="btn btn-danger btn-sm" type='reset'>Reset</button>
                                                </div>
                                <?php echo 
                                
                                form_close();
                                
                                ?>

                                </div>
                            </div>
                            <!-- /.col-lg-4 -->
                        </div>
                    </div>

                    </div>


                    
