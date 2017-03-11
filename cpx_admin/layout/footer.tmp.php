
</section>
<!-- /.content -->
</div>    </div>
<!--End Content wrapper-->
  <!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
    </div>
    <strong>Developed by  <a href="http://egyconnect.net">egyconnect</a>.</strong>
</footer>

<!-- Control Sidebar -->

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<!-- jQuery UI 1.11.4 -->

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="resources/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="resources/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="resources/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="resources/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="resources/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="resources/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="resources/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="resources/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="resources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<!-- FastClick -->
<script src="resources/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="resources/plugins/iCheck/icheck.min.js"></script>

<script src="resources/dist/js/app.js"></script>
<script src="resources/dist/js/myjs.js"></script>
<script type="text/javascript" src="resources/dist/js/omarius.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="resources/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="resources/dist/js/demo.js"></script>
<script>
function myfunc(){
    swal({
  title: "Are you sure?",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    swal("Deleted!", "Your imaginary file has been deleted.", "success");
  } else {
    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});
}
   function confirmDelete(url) {
    if (confirm("Are you sure you want to delete this?")) {
        window.location.href = url;
    } else {
        false;
    }       
}
</script>
<!-- iCheck 1.0.1 -->
<script src="resources/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<script>//Flat red color scheme for iCheck
    $('input[type="checkbox"], input[type="radio"]').not(".dontcheck").iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();</script>
<!-- FastClick -->
<script src="resources/plugins/fastclick/fastclick.js"></script>
<script>
   $('#selAll').on('click', function() {
   $(".cb").attr('checked', $(this).is(":checked"));
});
</script>

<script type="text/javascript" src="resources/plugins/ckeditor/config.js"></script>

<script type="text/javascript" src="resources/plugins/ckeditor/lang/en.js"></script>
<script type="text/javascript" src="resources/plugins/ckeditor/styles.js"></script>
<script type="text/javascript" src="resources/plugins/ckeditor/plugins/image/dialogs/image.js"></script>
</body>
</html>
