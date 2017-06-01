 <!-- Content Wrapper. Contains page content -->
 	<link rel="stylesheet" type="text/css" href="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/css-token/tokenfield-typeahead.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/css-token/bootstrap-tokenfield.css">
	<link rel="stylesheet" href="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/plugins/select2/select2.min.css">
	

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
		  
				<div class="box-header with-border">
					<center style= "color: green;"><h3 class="box-title"><b>CREATE TEAM </b></h3></center>
				</div>
            
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data"  class="form-horizontal" action= "<?php echo 'http://'.getenv('HTTP_HOST');?>/cric/create_team_submit" method = "post" role="form">
              <div class="box-body">
			  
			   <div class= "col-md-6 col-lg-6 col-xm-12 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Team Name</label>
                  <input type="text" class="form-control"  name  = "team" placeholder="Enter TeamName">
                  
				  
				  <div class= "col-lg-4 col-md-4 col-sm-12 col-xm-12">
                <div class="form-group">
				 <label for="exampleInputEmail1">Team Country</label>

                  <select onchange = "get_state(this.value)" class="form-control" id = "" name  = "country" value = "<?php echo $player[0]['country']?>" >
					<option> Country</option>
<?php   
					
					foreach($country as $key => $value){
						echo '<option  id = "'.$value['id'].'" value = "'.$value['id'].'">'.$value['name'].'</option>';
					}
					
					?>                  </select>
				                </div>
				                </div>

				
				 <div class= "col-lg-4 col-md-4 col-sm-12 col-xm-12">
				                <div class="form-group">
                  <label for="exampleInputEmail1">Team State</label>

                  <select onchange = "get_city(this.value)" class = "form-control" id = "load_state" name  = "state" value = "<?php echo $player[0]['state']?>" >
					<option>State </option>
                  </select>
				                </div>
				                </div>

				
				  <div class= "col-lg-4 col-md-4 col-sm-12 col-xm-12">     
				  <div class="form-group">
                  <label for="exampleInputEmail1">Team City</label>

                  <select class="form-control"  id = "load_city"  name  = "city" value = "<?php echo $player[0]['city']?>" >
					<option>City </option>
                  </select>
				
				
             </div>
			 
			  <style>
            /* Basic styling */
            body {
              background-color:#333;
                font-family: 'Roboto',sans-serif;
            }

            .container {
                box-sizing: border-box;;
                margin: 50px auto;
                max-width: 500px;
                padding: 0 20px;
                width: 100%;
				padding-bottom: 50px;
            }
            h1 { color:#fff;}
        </style>
   
   
			
			
			
		
		 
		 
		  
              <!-- /.box-body -->

              
           
			 
		 </div>
		 </div>
				
				
		<label for="exampleInputEmail1">Choose Players </label>

            <select multiple="multiple" onchange = "chech()" id = "players_list"  name="player_list[]">
				<?php echo $players; ?>
            </select>
			 
			 
             </div>
			  <div class= "col-md-6 col-lg-6 col-xm-12 col-sm-12">
                <div class="form-group">
                  <p style = "color: green;">Choose Banner photo</p>
				<div>
				
				 <input accept="image/*" type='file' name  = "userfile" id="imgInp" /><br>
				<img id="blah" src="<?php 'http://'.getenv('HTTP_HOST'); ?>/cric/public/img/upload_profile_pic.png" alt="choose your image" />
				</div>
                </div>
				
				
				
             </div>
			<div style= "margin-top: 30px;" class = "col-md-12 col-sm-12 col-xm-12 col-lg-12">
				<button  class = "btn btn-success btn-lg" type = "submit">CREATE TEAM</button>
		  </div>
        		 </form>


        </div>
	
	
        	 <div  class="box box-primary">
		 
		 
			
			
          <!-- /.box -->
			 </div>
	</section>
	
	<style>
	#blah {
		border-radius: 5%;
		height: 400px;
		width: 500px;
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

	