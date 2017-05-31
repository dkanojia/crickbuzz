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
	
	<section class="content" style="min-height: 0;" >
	      <!-- general form elements -->
          <div class="box box-primary">
		  <div class="container">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xm-12 ">
    
            <div class="box-header with-border">
             <center style = "color: green; font-size: 18px;" > <h3 class="box-title">CREATE MATCH </h3> </center>
            </div>
            <!-- /.box-header -->
			<div class= "row">
			<div class = "col-lg-8 col-md-8 col-sm-12 col-xm-12">
            <!-- form start -->
            <form role="form">
              <div class="box-body">
			   <div class= "col-md-6 col-lg-6 col-xm-12 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Team 1 Name</label>
                  <input type="text" class="form-control"  name  = "team" placeholder=" Team 1 Name">
                  </div>
                </div>
				
				 <div class= "col-md-6 col-lg-6 col-xm-12 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Team 2 Name</label>
                  <input type="text" class="form-control"  name  = "team" placeholder=" Team 2 Name">
                  </div>
                </div>
				
				
				 <div class= "col-md-12 col-lg-12 col-xm-12 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputEmail1"> Gorund Name</label>
                  <input type="text" class="form-control"  name  = "team" placeholder="Ground Name">
                  </div>
                </div>
				
					 <div class= "col-md-12 col-lg-12 col-xm-12 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputEmail1"> Match City </label>
                  <input type="text" class="form-control"  name  = "team" placeholder="City">
                  </div>
                </div>
				
				
				<div class= "col-md-12 col-lg-12 col-xm-12 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputEmail1"> Match Date </label>
                  <input type="text" class="form-control"  name  = "team" placeholder="dd-mm-yyyy">
                  </div>
                </div>
				
				
             </div>
              <!-- /.box-body -->

              
            </form>
			</div>
			<div class = "col-lg-4 col-md-4 col-sm-12 col-xm-12">
			</div>
			</div>
			<div class="row">
			 <button type="submit" class="btn btn-primary">Submit</button>
              </div>
			</div>
			
		  </div>
          <!-- /.box -->
			
        

        </div>
	
	
        
	</section>
	
	
	
	