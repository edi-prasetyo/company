</div>
</section>
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Database Perusahaan</strong>
  <div class="float-right d-none d-sm-inline-block">
    <b>App Version</b> 1.0.0
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/template/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/template/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/template/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/template/admin/plugins/sparklines/sparkline.js"></script>

<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/template/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/template/admin/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/template/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/template/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url(); ?>assets/template/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>assets/template/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/template/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/template/admin/dist/js/demo.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/template/admin/plugins/select2/js/select2.full.min.js"></script>
<!-- Dropify -->
<script src="<?php echo base_url(); ?>assets/template/admin/plugins/dropify/dist/js/dropify.min.js"></script>



<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/template/admin/plugins/chart.js/Chart.min.js"></script>







<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>

<script>
  $(document).ready(function() {
    $("#from-datepicker").datepicker({
      format: 'yyyy-mm-dd'
    });
    $("#from-datepicker").on("change", function() {
      var fromdate = $(this).val();
      alert(fromdate);
    });
  });
</script>

<script>
  $(function() {
    $('#reservationdate').datetimepicker({
      format: 'L',


    })
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

  });
</script>

<script>
  $('.dropify').dropify();
</script>

</body>

</html>