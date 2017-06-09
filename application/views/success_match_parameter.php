 <!-- Content Wrapper. Contains page content -->
 	<link rel="stylesheet" type="text/css" href="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/css-token/tokenfield-typeahead.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/css-token/bootstrap-tokenfield.css">
	
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     
<div id="message"><?php echo "<font color='red'>";if(isset($error)){echo $error; } echo "</font>";?> <!-- Error Message will show up here -->
</div>

<hr><hr id="line"> 

	<div style = "color: green">
	<center><?php  if(isset($message_succ)){
		echo '<h3>'.$message_succ."</h3>";
	}
	?></center>
	</div>
	<!------ form started-------->
	<div><center><h3 style= "color: green;" >Operation successfull</h3></center>
	</div>
  <div style = "color: green">
  <?php  if(isset($match_id)){
    echo '<h6 id="match_id">'.$match_id."</h6>";
    echo '<h6 id="team_id">'.$team_id."</h6>";
    echo '<h6 id="ininig_name_value">'.$ininig_name_value."</h6>";
  }
  ?>
  </div>
<style>
	#blah {
		border-radius: 50%;
		height: 300px;
		width: 250px;
	}
</style>
  <script>
        var timer = setTimeout(function() {
            var id = document.getElementById('match_id').innerHTML;
            var tid = document.getElementById('team_id').innerHTML;
            var inid = document.getElementById('ininig_name_value').innerHTML;
            var urls = "<?php echo 'http://'.getenv('HTTP_HOST');?>"
            var full_url = urls + "/cric/live_score/"+id+"/"+tid/+inid;
            window.location= full_url;
        }, 3000);
    </script>