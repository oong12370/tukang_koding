
       <div id="page-wrapper">
            <div class="row">
                <ol class="breadcrumb">
                  
                </ol>
                <div class="col-lg-12">
                    <h1 class="page-header">Pesan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            

<table id="konten" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
    <tbody>
        <?php $no = 1; foreach ($ambilpesan as $ambilpesan ): ?>
        <tr>
            <th><?php echo $no; ?></th>
            <th><?php echo $ambilpesan->name; ?></th>
            <th><?php echo $ambilpesan->email; ?></th>
            <th><?php echo $ambilpesan->subject; ?></th>
            <th><?php echo $ambilpesan->message; ?></th>
            <th class="text-center">
                                       
                                        <a class="btn btn-xs btn-danger"  href="form_balas/<?php echo $ambilpesan->id_pesan;?>"> Balas</a>
                                        
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
