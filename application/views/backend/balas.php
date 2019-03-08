<head> 
      <meta charset = "utf-8"> 
      <title>CodeIgniter Test Pengiriman Email</title> 
   </head>

   <body> 
    <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Balas Pesan</h4>
                  <p class="card-description">
                    
                  </p>
                  <?php foreach ($get_pesan as $get_pesan): ?>
      <?php 
         echo $this->session->flashdata('notif'); 
      ?> 
      <form class="forms-sample" method="post" action="<?=site_url('admin/send_mail/'.$get_pesan->id_pesan)?>">
      <div class="form-group">
                      <label for="nama_konten">Email</label>
                      <input type="text" readonly class="form-control" id="email" name="email" value="<?php echo $get_pesan->email; ?>" required>
                    </div>
                    <div class="form-group">
                    <label for="nama_konten">Message</label>
                        <div>
                          <textarea name="pesan" id="pesan" class="form-control"></textarea>
                        </div>
                      </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>

      <?php 
         echo form_close(); 
      ?> 
      </div>
      </div>
      </div>
        <?php  endforeach; ?>
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
   </body>