 <!-- Content Wrapper. Contains page content -->
 	<link rel="stylesheet" type="text/css" href="<?php echo 'http://'.getenv('HTTP_HOST');?>/public/css-token/tokenfield-typeahead.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo 'http://'.getenv('HTTP_HOST');?>/public/css-token/bootstrap-tokenfield.css">
	
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
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
  
	<!------ form started-------->
	
	<div class="container">
	<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Different Height</h3>
            </div>
            <div class="box-body">
			<form role="form" action = "op_user_submit" method= "post">
              <div class="box-body">
			  <div class = "row">
			  <div class = "col-md-6 col-lg-6 col-xm-12 col-xm-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username </label>
                  <input type="text" name="username" class="form-control" id="exampleInputUsername" placeholder="Username ">
                </div>
                </div>
              </div>
			  
			  <div class = "row">
			    <div class = "col-md-6 col-lg-6 col-xm-12 col-xm-12">
                <div class="form-group">
                  <label for="exampleInputUser">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                 </div>
                </div>
              </div>
			  
			  
			 <div class = "row">
			  <div class = "col-md-6 col-lg-6 col-xm-12 col-xm-12">
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                 </div>
                </div>
              </div>
			  
			  <div class = "row">
			    <div class = "col-md-6 col-lg-6 col-xm-12 col-xm-12">
                <div class="form-group">
                  <label for="exampleInputPassword1">Mobile</label>
                  <input type="text" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="Mobile">
                 </div>
                </div>
              </div>
			  
			  <div class = "row">
			    <div class = "col-md-6 col-lg-6 col-xm-12 col-xm-12">
                <div class="form-group">
                  <label for="exampleInputPassword1">State</label>
                  <input type="text" name="state" class="form-control" id="exampleInputPassword1" placeholder="State">
                 </div>
                </div>
              </div> 
			  
			  <div class = "row">
			    <div class = "col-md-6 col-lg-6 col-xm-12 col-xm-12">
                <div class="form-group">
                  <label for="exampleInputPassword1">City</label>
                  <input type="text" name="city" class="form-control" id="exampleInputPassword1" placeholder="City">
                 </div>
                </div>
              </div>
			  
			 
			  
			 
			  <div class = "row">
			    <div class = "col-xm-12 col-sm-12 col-lg-6 col-md-6">
                 <div class="form-group">
                  <label for="exampleInputFile">Photo Upload</label>
                  <input type="file" id="exampleInputFile">

                
                 </div>
                </div>
              </div>
				
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
	</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


 