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
    
  <h4 id="loading" style="display: none;">loading...</h4>
<div id="message"><?php echo "<font color='red'>";if(isset($error)){echo $error; } echo "</font>";?> <!-- Error Message will show up here --></div>
<hr><hr id="line"> 
	<div style = "color: green"><center><?php  if(isset($message_succ)){
		echo '<h3>'.$message_succ."</h3>";
	}
	?></center></div>
	<!------ form started-------->
	<div ><center><h3 style= "color: green;" ><?php  if(isset($success)){echo 'User Created Successfully!!';}?></h3></center></div>
	<div class="container">
	<div class = "colo-lg-10 col-md-10 col-sm-12 col-xm-12">
		<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Player</h3>
            </div>
            <!-- /.box-header -->
            
			
			<!-- form start -->
			
			<form enctype="multipart/form-data"  class="form-horizontal" action = "player_create_submit" method= "post">
              <div class="box-body">
			  
			  <div class= "col-md-8 col-lg-8 col-sm-12 col-sm-12">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-12 col-xm-12 col-lg-2 col-md-2 control-label"> Name*:</label>
<script>
  // $( function() {
  //   $( "#datepicker" ).datepicker();
  // } );
</script>
                  <div class="col-sm-12 col-xm-12 col-md-6 col-lg-6">
                    <input type="text" required name  = "username" class="form-control" id="inputEmail3" placeholder="Username">
                  </div>
                </div>
				
	

	<div class="form-group">
                  <label for="inputEmail3" class="col-sm-12 col-xm-12 col-lg-2 col-md-2 control-label">Date Of Birth:</label>

                  <div class="col-sm-12 col-xm-12 col-md-6 col-lg-6">
                    <input name = "dob" type="text" id="datepicker" class="form-control" placeholder="dd-mm-yyyy">
                  </div>
                </div>
 


				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-12 col-xm-12 col-lg-2 col-md-2 control-label">Email*:</label>

                  <div class="col-sm-12 col-xm-12 col-md-6 col-lg-6">
                    <input required type="email" name  = "email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
				
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-12 col-xm-12 col-lg-2 col-md-2 control-label">Mobile:</label>

                  <div class="col-sm-12 col-xm-12 col-md-6 col-lg-6">
                    <input type="text" name  = "mobile" class="form-control" id="inputEmail3" placeholder="Mobile">
                  </div>
                </div>
				
				
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-12 col-xm-12 col-lg-2 col-md-2 control-label">Country*:</label>

                  <div class="col-sm-12 col-xm-12 col-md-6 col-lg-6">
                   <select required onchange = "get_state(this.value)" class = "form-control" name  = "country">
					<option value= "">Choose Country</option>
					<?php   
					
					foreach($country as $key => $value){
						echo '<option  id = "'.$value['id'].'" value = "'.$value['id'].'">'.$value['name'].'</option>';
					}
					
					?>
				   </select>
                  </div>
                </div>
				
				
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-12 col-xm-12 col-lg-2 col-md-2 control-label">State*:</label>

                  <div class="col-sm-12 col-xm-12 col-md-6 col-lg-6">
                   <select required onchange = "get_city(this.value)" class = "form-control" id = "load_state" name  = "state">
					<option value= "">Choose State</option>
					
				   </select>
                  </div>
                </div>
				
				
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-12 col-xm-12 col-lg-2 col-md-2 control-label">City*:</label>

                  <div class="col-sm-12 col-xm-12 col-md-6 col-lg-6">
                    <select required id = "load_city"  name = "city" class= "form-control" >
					<option value= "">Choose city</option>
                    </select>
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-12 col-xm-12 col-lg-2 col-md-2 control-label">Team:</label>

                  <div class="col-sm-12 col-xm-12 col-md-6 col-lg-6">
                   <select name  = "team" id = "" class="form-control">
					<option value= "">Choose Team</option>
					
						<?php   
					
						foreach($team as $key => $value){
							echo '<option  id = "'.$value['team_name'].'" value = "'.$value['team_name'].'">'.$value['team_name'].'</option>';
						}
					
					
					
					?>
				   </select>
                  </div>
                  </div>
				   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-12 col-xm-12 col-lg-2 col-md-2 control-label">Role:</label>
				   <div class="col-sm-12 col-xm-12 col-md-6 col-lg-6">
                  <span>Batsman</span><input type="radio" name="role" value="batsman" checked> <span>Bowler</span>
					<input type="radio" name="role" value="bowler"> <span>All Rounder</span>
					<input type="radio" name="role" value="allrounder"> <br>
				  </div>
				  </div>
				  
				  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-12 col-xm-12 col-lg-2 col-md-2 control-label">Attributes:</label>

                  <div class="col-sm-12 col-xm-12 col-md-6 col-lg-6">
                  <span>Right-Hand-Batsman</span><input type="radio" name="bat" value="right-hand-batsman" checked> <span>Left-Hand-Batsman</span>
					<input type="radio" name="bat" value="left-hand-batsman"> <br>
				<span>Left-Hand-Spinner</span><input checked type="radio" name="bowl" value="left-hand-sppiner"><span>Right-Hand-Spinner</span><input  type="radio" name="bowl" value="right-hand-sppiner"><span>Left-Hand-Faster</span><input type="radio" name="bowl" value="left-hand-faster"><span>Right-Hand-Faster</span><input type="radio" name="bowl" value="right-hand-faster"><br><span>Wicket-keeper</span><input type="checkbox" name="wktkeep" value="wktkeep"><br>
				   
				   
				   </div>
				   </div>
                  </div>
				<div class= "col-lg-4 col-md-4 col-xm-12 col-sm-12">
					<p style = "color: green;">Choose Profle photo</p>
				<div>
				
				 <input accept="image/*" type='file' name  = "userfile" id="imgInp" />
				<img id="blah" src="<?php 'http://'.getenv('HTTP_HOST'); ?>/cric/public/img/upload_profile_pic.png" alt="choose your image" />
				</div>
    
					
				</div>
				
			
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
			   <div class ="row">
			    <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                <button  class="btn btn-default"><a href = "">Cancel</a></button>
				</div>
				<div class = "col-lg-7 col-md-7 col-xm-12 col-sm-12">
                <button type="submit" class="btn btn-info pull-right">Register</button>
                </div>
               </div>
              </div>
              <!-- /.box-footer -->
           
            
         </div>
	 </form>
	 <!--/ form start -->
	</div>
	
  </div>
  <!-- /.content-wrapper -->
<style>
	#blah {
		border-radius: 50%;
		height: 300px;
		width: 250px;
	}
</style>

<script>



			//// get state list by ajax accrording country
	function get_state(aa) {
		var pp  = aa;
		//alert(pp);
		$.ajax({url: "load_state/"+pp, success: function(result){
        $("#load_state").html(result);
    }});
	}	
	/////get city list by ajax regarding state 
		function get_city(bb) {
		var pp  = bb;
		//alert(pp);

		$.ajax({url: "load_city/"+pp, success: function(result){
				$("#load_city").html(result);
				//alert(result);

			}});		
		}
	
	
	
</script>
