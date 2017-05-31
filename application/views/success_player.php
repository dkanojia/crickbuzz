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

<style>
	#blah {
		border-radius: 50%;
		height: 300px;
		width: 250px;
	}
</style>
  <script>
        var timer = setTimeout(function() {
            window.location='<?php echo 'http://'.getenv('HTTP_HOST');?>'
        }, 3000);
    </script>