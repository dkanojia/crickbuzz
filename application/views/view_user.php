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
  
  <div class ="container">
 </div>
            <div class="box-header with-border">
             <center> <h3 class="box-title"><b>USERS LIST</b></h3></center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
			  <div class="container">
	
	 <div class = "row" style= "margin-top: 2%;">
	<div class = "col-md-3 col-lg-3 col-sm-12 col-xm-12">
	<div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search By City">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
	</div>
	<div class = "col-md-3 col-lg-3 col-sm-12 col-xm-12">
	<div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search By Name">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
	</div>
	<div class = "col-md-3 col-lg-3 col-sm-12 col-xm-12">
	<div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search By Moblie">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
	</div>
  </div>
  
	
	          
  <table style = "margin-top: 2%;" class="table table-hover">
    <thead style = "background-color: rgba(0 , 0, 0, 0.3); color: #fff;">
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>City</th>
        <th>State</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
	<?php 

	$ii =1;
	foreach($fetuser as $key => $value){
		echo '<tr>';
		echo '<td>'.$ii.'</td>';
		echo '<td>'.$value['username'].'</td>';
		echo '<td>'.$value['email'].'</td>';
		echo '<td>'.$value['mobile'].'</td>';
		echo '<td>'.$value['city'].'</td>';
		echo '<td>'.$value['state'].'</td>';
		echo '<td><button class = "btn btn-warning btn-xs">Edit</button><button class = "btn btn-danger btn-xs">Delete</button></td>';
		echo '</tr>';
		$ii++;
		
	}
	?>
    </tbody>
  
</div> 
</div>
              <!-- /.box-body -->
              <div class="box-footer">
                 <tfoot style = "background-color: rgba(0 , 0, 0, 0.3); color: #fff;">
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>City</th>
        <th>State</th>
        <th>Option</th>
      </tr>
    </tfoot>
      </table>        </div>
</section>
   
			  
             
              <!-- /.box-footer -->
          </div>
  
  
	<!------ form started-------->
	 <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


 