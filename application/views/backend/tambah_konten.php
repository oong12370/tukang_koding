 <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Konten</h4>
                  <p class="card-description">
                    
                  </p>
                  <form class="forms-sample" method="post" action="<?=site_url('admin/add_konten')?>">
                    <div class="form-group">
                      <label for="nama_konten">Judul</label>
                       <input type="hidden" class="form-control" id="tgl_konten" value="<?php echo date('Y-m-d');?>" name="tgl_konten" >
                      <input type="text" class="form-control" id="nama_konten" name="nama_konten" placeholder=" Judul" required>
                    </div>
                    <div class="form-group">
                      <label for="id_kat">Katagori</label>
                        <select class="form-control" id="id_katagori" name="id_katagori">
                        <option value="">Pilih Kategori</option>
                                    <?php foreach ($ambilkatagori as $ambilkatagori ):?>
                                    <option value="<?php echo $ambilkatagori->id_katagori; ?>"><?php echo $ambilkatagori->nama_katagori; ?></option>
                                    <?php  endforeach; ?>
                        </select>
                      </div>
                    <div class="form-group">
                    <label for="nama_konten">Deskripsi</label>
                        <div>
                          <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                        </div>
                      </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
           
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Remark</h4>
                  <p class="card-description">
                    Konten ini setiap kolom harus di isi agar lebih jelas dan maksud tujuan nya untuk promosikan hasil karya yang telah dibuat
                  </p>
                  
                </div>
              </div>
            </div>