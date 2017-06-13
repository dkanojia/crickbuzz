<script src= "<?php echo 'http://'.getenv('HTTP_HOST');?>public/plugins/select2/select2.min.js">
</script>

  <link rel="stylesheet" type="text/css" href="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/plugins/multiselect/multi.min.css">
 <script src="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/plugins/multiselect/multi.min.js"></script>


<script>
function chech(){
    var aa = $(".selected-wrapper").text();
    document.getElementById('players').value = aa;
}
</script>



        <script>
            $(document).ready(function() {
                $('select').multi({
                    search_placeholder: 'Search ...name ( city , mobile)',
                });
            });
        </script>