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
     
	<!------ form started-------->
	
	
	
	<?php
		

	?>
	
	<div class="box">
        <div class="box-header with-border">
          <center><h3 class="box-title"><b>VIEW TOURNAMENT</b></h3></center>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
<table class="table table-hover">
    <thead style = "color: #fff;background-color: rgba( 0, 0, 0, 0.3);">
      <tr>
        <th># </th>
        <th>TOURNAMENT NAME</th>
        <th>TOUR SPONSER</th>
        <th>START DATE</th>
        <th>END DATE</th>
        <th>NO OF TEAMS </th>
        <th>ACTION  </th>
      </tr>
    </thead>
    <tbody>
			<?php 
			if(isset($running)){
				echo $running;
			}
			if(isset($past)){
				echo $past;
			}
			if(isset($upcoming)){
				echo $upcoming;
			}
?>
    </tbody>
	
	 <tfoot style = "color: #fff;background-color: rgba( 0, 0, 0, 0.3);">
      <tr>
        <th># </th>
        <th>TOURNAMENT NAME</th>
        <th>TOUR SPONSER</th>
        <th>START DATE</th>
        <th>END DATE</th>
        <th>NO OF TEAMS </th>
        <th>ACTION  </th>
      </tr>
    </tfoot>
  </table>        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <?php
		  ?>
        </div>
        <!-- /.box-footer-->
      </div>
	<!------ / form started---------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<style>

a {
	color: #fff;
}
</style>

 