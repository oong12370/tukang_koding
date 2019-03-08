
       <div id="page-wrapper">
            <div class="row">
                <ol class="breadcrumb">
                  
                </ol>
                <div class="col-lg-12">
                    <h1 class="page-header">Data User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                    <a href="<?php echo base_url(); ?>index.php/admin/add_user" >
                        <button type="button" class="btn btn-primary">
                            Tambah 
                        </button>
                    </a>

                    <p></p>

<table id="konten" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jabatan</th>
            <th>Pendidikan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
             <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jabatan</th>
            <th>Pendidikan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
    <tbody>
        <?php $no = 1; foreach ($ambilbio as $ambilbio ): ?>
        <tr>
            <th><?php echo $no; ?></th>
            <th><?php echo $ambilbio->nama; ?></th>
            <th><?php echo $ambilbio->email; ?></th>
            <th><?php echo $ambilbio->jabatan; ?></th>
            <th><?php echo $ambilbio->studi; ?></th>
            <th><?php echo $ambilbio->alamat; ?></th>
            <th class="text-center">
                                       
                                        <a class="btn btn-xs btn-danger"  href="hapususer/<?php echo $ambilbio->Id_profile;?>"> Hapus</a>
                                        
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
