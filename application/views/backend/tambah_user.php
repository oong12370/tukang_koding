 <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah User</h4>
                  <p class="card-description">
                    
                  </p>
                  <p><?php echo $this->session->flashdata('msg') ?></p>
                  <?php echo form_open_multipart('admin/tambah_manajemenuser'); ?>
              
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder=" Nama" required>
                    </div>
                     <div class="form-group">
                      <label for="email">email</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder=" Email" required>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder=" Password" required>
                    </div>
                    <div class="form-group">
                    <label for="alamat">Alamat</label>
                        <div>
                          <textarea name="alamat" id="alamat" class="form-control"></textarea>
                        </div>
                      </div>
                    <div class="form-group">
                            <label for="role">Studi</label>
                            <select name="studi" id="role" class="form-control" required>
                                <option value="">Pilih Studi</option>
                                <option value="SI (Sistem Informasi)">SI Sistem Informasi</option>
                                <option value="SMK">SMK</option>
                            </select>
                        </div>
                     <div class="form-group">
                      <label for="jabatan">Jabatan</label>
                      <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder=" Jabatan" required>
                    </div>
                    <div class="form-group">
                      <label for="foto">Foto</label>
                      <input type="file" name="gambar">
                    </div>
                    <button type="submit" name="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                 <?php echo form_close() ?>
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