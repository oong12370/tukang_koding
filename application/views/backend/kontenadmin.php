
       <div id="page-wrapper">
            <div class="row">
                <ol class="breadcrumb">
                  
                </ol>
                <div class="col-lg-12">
                    <h1 class="page-header">Data Konten</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                    <a href="<?php echo base_url(); ?>index.php/admin/tambah_konten" >
                        <button type="button" class="btn btn-primary">
                            Tambah 
                        </button>
                    </a>

                    <p></p>

<table id="konten" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Konten</th>
            <th>Katagori</th>
            <th>Deskripsi</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Judul Konten</th>
            <th>Katagori</th>
            <th>Deskripsi</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
    <tbody>
        <?php $no = 1; foreach ($ambilkonten as $ambilkonten ): ?>
        <tr>
            <th><?php echo $no; ?></th>
            <th><?php echo $ambilkonten->nama_konten; ?></th>
            <th><?php echo $ambilkonten->nama_katagori; ?></th>
            <th><?php echo $ambilkonten->deskripsi; ?></th>
            <th><?php echo $ambilkonten->tgl_konten; ?></th>
            <th class="text-center">
                                       
                                        <a class="btn btn-xs btn-success" href="edit_konten/<?php echo $ambilkonten->id_konten;?>"> Edit</a>
                                        <a class="btn btn-xs btn-danger"  href="hapuskonten/<?php echo $ambilkonten->id_konten;?>"> Hapus</a>
                                        
                                    </th>
            
        </tr>
       
        <?php $no++; endforeach; ?>
    </tbody>
</table>
<!--add -->

  <!-- edit -->
  
        
<script>
    $(document).ready(function(){
        $('#konten').DataTable();
    });
</script>
