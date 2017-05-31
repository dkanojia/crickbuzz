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
     
  
  <div class="box box-info">
  
  
            <div class="box-header with-border">
             <center> <h3 class="box-title"><b>PLAYERS LIST</b></h3></center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
			  <div class="container">
	
	 <div class = "row" style= "margin-top: 2%;">
	<div class = "col-md-3 col-lg-3 col-sm-12 col-xm-12">
	<div class="has-feedback">
                  <input id= "search_city" type="text" class="form-control input-sm" placeholder="Search By City">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
	</div>
	<div class = "col-md-3 col-lg-3 col-sm-12 col-xm-12">
	<div class="has-feedback">
                  <input id= "search_name" type="text" class="form-control input-sm" placeholder="Search By Name">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
	</div>
	<div class = "col-md-3 col-lg-3 col-sm-12 col-xm-12">
	<div class="has-feedback">
                  <input id= "search_mobile" type="text" class="form-control input-sm" placeholder="Search By Moblie">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
	</div>
	
	<div class = "col-md-2 col-lg-2 col-sm-12 col-xm-12">
	<div class="has-feedback">
                  <select class= "form-control" name = "team" id = "team"  >
					<option value = ""> Choose Team
					</option>
					
					<?php
						echo $team_list;
					?>
                  </select>
                </div>
	</div>
  </div>
  
	
	          
  <table style = "margin-top: 2%;" class="table table-hover">
    <thead style = "background-color: rgba(0 , 0, 0, 0.3); color: #fff;">
      <tr>
        <th>#</th>
        <th style="width: 10%;">PHOTO</th>
        <th>NAME</th>
        <th>MOBILE</th>
        <th>ROLE</th>
        <th>CITY</th>
        <th>BAT-STYLE</th>
        <th>BALL-STYLE</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody id = "player_list">
	
	
	
	<?php
			echo $team_list;
	?>
	
	
	
	
	
	
    </tbody>
  
</div> 
</div>
              <!-- /.box-body -->
              <div class="box-footer">
                 <tfoot style = "background-color: rgba(0 , 0, 0, 0.3); color: #fff;">
      <tr>
         <th>#</th>
        <th style="width: 10%;">PHOTO</th>
        <th>NAME</th>
        <th>MOBILE</th>
        <th>ROLE</th>
        <th>CITY</th>
        <th>BAT-STYLE</th>
        <th>BALL-STYLE</th>
        <th>ACTION</th>
      </tr>
    </tfoot>
      </table>        </div>
</section>
   
			  
             
              <!-- /.box-footer -->
          </div>
  
  <! -- ADD player-->
  
  
  
	<!------ form started-------->
	 <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<style>
 .pprofile {
	  height: 10%;
 }
 a{
	 color: #fff;
 }
 a:hover{
	 color: #ddd;
 }
</style>
<script>

function make_dis(aa){
    document.getElementById(aa).disabled = 'true';
}
</script>
 