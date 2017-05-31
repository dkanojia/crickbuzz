				
<link rel="stylesheet" type="text/css" href="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/datepicker/datepicker3.css">
<!-- jQuery 2.2.3 -->

<script src="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/jquery/jquery-3.2.1.min.js"></script>
<!-- jQuery UI 1.11.4 -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Bootstrap WYSIHTML5 -->

<!-- Bootstrap 3.3.7 -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

<!-- Sparkline -->
<script src="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- jQuery Knob Chart -->
<script src="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

<script src="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/dist/js/app.min.js"></script>



<script src="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/plugins/datepicker/bootstrap-datepicker.js"></script>
				
	
<script>

//// img upload function to show iage o web page

function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});

</script>


</body>
</html>
