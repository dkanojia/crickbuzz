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
	<div ><center><h3 style= "color: green;" ><?php  if(isset($success)){echo 'User Created Successfully!!';}?></h3></center></div>
	<div class="container">
	<div class = "col-lg-11 col-md-11 col-sm-12 col-xm-12">
		<div class="box box-success">
            <div class="box-header with-border">
              <center><h3 class="box-title"><b>USER REGISTRATION</b></h3></center>
            </div>
            <div class="box-body">
			
			<form action = "<?php echo 'http://'.getenv('HTTP_HOST');?>/cric/submit_user_form" method = "post">
              <input required class="form-control input-lg" name= "username" type="text" placeholder="Username*">
              <br>
			  <input required name = "password" id = "pass" class="form-control input-lg" type="password" placeholder="password*">
              <br>
			   <input required name = "cpassword" id = "cpass" class="form-control input-lg" type="password" placeholder="conform password*">
              <br>
			  <input required class="form-control input-lg" name  = "email" type="email" placeholder="email*">
              <br>
			  <input  class="form-control input-lg" name  = "mobile"  type="text" placeholder="mobile">
              <br>
			  
			  <div class = "col-lg-4 col-md-4 col-sm-12 col-xm-12">
				  <select required onchange = "get_state(this.value)" class = "form-control input-lg"   name  = "country"  >
				  
				  <option value = "">Country
				  </option>
				  
				  <?php   
					
					foreach($country as $key => $value){
						echo '<option  id = "'.$value['id'].'" value = "'.$value['id'].'">'.$value['name'].'</option>';
					}
					
					?>
				  </select>
              </div>
			    <div class = "col-lg-4 col-md-4 col-sm-12 col-xm-12">
				  <select required  onchange = "get_city(this.value)" class = "form-control input-lg"  id = "load_state" name  = "state" >
				  
				  					<option>State </option>

				  </select>
              </div>
			    <div required class = "col-lg-4 col-md-4 col-sm-12 col-xm-12">
				  <select id = "load_city"  name  = "city" class = "form-control input-lg">
				  
				  					<option>City </option>

				  </select>
              </div>
			  
			  <br>
			  <br>
			  <br>
			  <input class="btn btn-block btn-success btn-lg" value = "Register User" name  = "submit"  type="submit" >
              <br>
             </form>
            </div>
            <!-- /.box-body -->
          </div>
	
	</div>
    </section>
    <!-- /.content -->
    </div>
  </div>
  <!-- /.content-wrapper -->

 <script>
 
 var pass = document.getElementById('pass');
 var cpass = document.getElementById('cpass');
 if(pass!=cpass){
	 
 }else{
	 alert('password done not match , try again');
 }
 
 </script>
  
  
<script>



			//// get state list by ajax accrording country
	function get_state(aa) {
		var pp  = aa;
		//alert(pp);
		$.ajax({url: "<?php echo 'http://'.getenv('HTTP_HOST');?>/cric/load_state/"+pp, success: function(result){
        $("#load_state").html(result);
    }});
	}	
	/////get city list by ajax regarding state 
		function get_city(bb) {
		var pp  = bb;
		//alert(pp);

		$.ajax({url: "<?php echo 'http://'.getenv('HTTP_HOST');?>/cric/load_city/"+pp, success: function(result){
				$("#load_city").html(result);
				//alert(result);

			}});		
		}
	
	
	
</script>

	
<script>
	function get_cities(aa) {
		var pp  = aa;
		window.location.href = 'get_cities/'+pp;
	}
	
</script>
 