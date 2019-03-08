        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.bootstrapdash.com/" target="_blank">Oong Julian</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Easy to learn, Hard to master <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->

  <script src="<?php echo base_url(); ?>vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url(); ?>vendors/js/vendor.bundle.addons.js"></script>
  <script src="<?php echo base_url(); ?>css/jquery-datatable/jquery.dataTables.js"></script>
 
  
  <!-- endinject -->
 
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>js/dashboard.js"></script>
  <!-- End custom js for this page-->
   <!-- Tynicame js for this page-->
  <script type="text/javascript" src="<?php echo base_url(); ?>css/tinymce/tinymce.min.js"></script>
  <script type="text/javascript">
  tinymce.init({
    selector: 'textarea',
    height: 100,
    plugins: [
      'advlist autolink lists link charmap preview',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime contextmenu paste code'
    ],
    toolbar: 'insertfile undo redo | bold italic | bullist numlist outdent indent'
  });
</script>
</body>

</html>
