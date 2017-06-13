 <!-- Content Wrapper. Contains page content -->
 	<link rel="stylesheet" type="text/css" href="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/css-token/tokenfield-typeahead.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/css-token/bootstrap-tokenfield.css">
	<style>
		.ui-menu-item {
			margin-top: -250px;
			margin-left: 250px;
			color: #555555;
			font-size: 18px;
			background-color: #fff;
			padding-left: 90px;;
			width: 20%;
			list-style-type: none;
			border-style: inset;
			height: 30px;
			position: absolute;
			z-index: 1;
		}
	</style>
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
    
	
	
	<div class= "container">
	<div class="col-md-10 col-sm-12 col-xm-12 col-lg-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Tournaments </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form"  enctype="multipart/form-data"  method = "post" action = "create_tournament_submit">
              <div class="box-body">
				<div class = "row">
					<div class= "col-lg-12 col-md-12 col-sm-12 col-xm-12">
										<b>Tournament Starting  date*</b>

					</div>
					<div class = "clearfix"></div>
					<div class= "col-md-4 col-lg-4 col-sm-12 col-xm-12 ">
						<select id = "d1" name  = "d1" class = "form-control" >
							<option value = "">
							 Day
							</option>
							<?php 
								for($i =1 ; $i<32; $i++){
									echo '<option vlaue = "'.$i.'" >'.$i.'</optin>';
									
								}
							?>
						</select>
					</div>
					
					<div class= "col-md-4 col-lg-4 col-sm-12 col-xm-12 ">
					
					<select id = "m1" name  = "m1" class = "form-control" >
							<option value = "">
							 Month
							</option>
							<option value= "01">Jan</option>
							<option value= "02">Feb</option>
							<option value= "03">Mar</option>
							<option value= "04">Apr</option>
							<option value= "05">May</option>
							<option value= "06">Jun</option>
							<option value= "07">Jul</option>
							<option value= "08">Aug</option>
							<option value= "09">Sep</option>
							<option value= "10">Oct</option>
							<option value= "11">Nov</option>
							<option value= "12">Dec</option>
						</select>
					</div>
					
					<div class= "col-md-4 col-lg-4 col-sm-12 col-xm-12 ">
					
					<select id = "y1" name  = "y1" class = "form-control" >
							<option value = "">
							 Year
							</option>
							<?php
							$year = date('Y');
							for($i =1; $i < 5; $i++){
								echo '<option value = "'.$year.'">'.$year.'</option>';
								$year++;
							}
							  
							?>
						</select>
					</div>
					</div>
			  <div class = "row">
					<div class= "col-lg-12 col-md-12 col-sm-12 col-xm-12">
										<b>Tournament Ending date*</b></br>

					</div>
					<div class = "clearfix"></div>

					<div class= "col-md-4 col-lg-4 col-sm-12 col-xm-12 ">
						<select id = "d2" name  = "d2" class = "form-control" >
							<option value = "">
							 Day
							</option>
							<?php 
								for($i =1 ; $i<32; $i++){
									echo '<option vlaue = "'.$i.'" >'.$i.'</optin>';
									
								}
							?>
						</select>
					</div>
					
					<div class= "col-md-4 col-lg-4 col-sm-12 col-xm-12 ">
					
					<select id = "m2" name  = "m2" class = "form-control" >
							<option value = "">
							 Month
							</option>
							<option value= "01">Jan</option>
							<option value= "02">Feb</option>
							<option value= "03">Mar</option>
							<option value= "04">Apr</option>
							<option value= "05">May</option>
							<option value= "06">Jun</option>
							<option value= "07">Jul</option>
							<option value= "08">Aug</option>
							<option value= "09">Sep</option>
							<option value= "10">Oct</option>
							<option value= "11">Nov</option>
							<option value= "12">Dec</option>
						</select>
					</div>
					
					<div class= "col-md-4 col-lg-4 col-sm-12 col-xm-12 ">
					
					<select id = "y2" name  = "y2" class = "form-control" >
							<option value = "">
							 Year
							</option>
							<?php
							$year = date('Y');
							for($i =1; $i < 5; $i++){
								echo '<option value = "'.$year.'">'.$year.'</option>';
								$year++;
							}
							  
							?>
						</select>
					</div>
					</div>
			  
		
		
		
		
		
			  
				<label for="exampleInputPassword1">Tournament Name*</label>
					<input type = "hidden" name  = "teams" id = "teams" value= "" >
					<input type = "text" name  = "tour_name" placeholder = "Sponser Name" class = "form-control" >
				
				
					<label for="exampleInputPassword1">Sponser Name*</label>
					<input type = "hidden" name  = "teams" id = "teams" value= "" >
					<input type = "text" name  = "spons_name" placeholder = "Sponser Name" class = "form-control" >
				
                  	<label for="inputEmail3" class="col-sm-12 col-xm-12 col-lg-2 col-md-2 control-label">City*:</label>
                    <select required id = "load_city"  name = "city" class= "form-control" >
						<option value= "">Choose city</option>
						<?php   
							foreach($city as $key => $value){
								echo '<option  id = "'.$value['id'].'" value = "'.$value['id'].'">'.$value['name'].'</option>';
							}
						?>
                    </select>

				<label for="exampleInputPassword1">Choose Matches*</label>
                  <select multiple="multiple" id = "s_teams"  name="s_teams">
				<?php echo $matches; ?>
            </select>
			</div>
			  
			
				
                <div class="form-group col-lg-8 col-md-8">
                  	<p style = "color: green;">Choose Profle photo</p>
				<div>
				
				 <input accept="image/*" type='file' name  = "userfile" id="imgInp" />
				<img id="blah" src="<?php 'http://'.getenv('HTTP_HOST'); ?>/cric/public/img/upload_profile_pic.png" alt="choose your image" border="5"/>
				</div>
    
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" onclick = "chech();" class="btn btn-success btn-lg">CREATE TOURNAMENT</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

         
        </div>
	
	</div>
	<!------ / form started---------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<style>
	#blah {
		margin-top: 5%;
		border-radius: 2%;
		height: 200px;
		width: 100%;
	}
</style>

