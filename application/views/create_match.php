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
            <form role="form" enctype="multipart/form-data" action = "<?php echo 'http://'.getenv('HTTP_HOST');?>/cric/submit_create_match" method = "post">
              <div class="box-body">
			  
			  
			<div class= "col-md-6 col-lg-6 col-xm-12 col-sm-12">
			<div class="form-group">
                  <label for="exampleInputEmail1"> Tournament Name (in any)</label>
				  <select  name = "tour_name" class = "form-control" >
						<option value= ""> 
						Choose Tournament 
						</option>
						<?php
						 echo $tournaments;
						?>
					</select>
				  
			</div>
			</div>
			<div class= "col-md-6 col-lg-6 col-xm-12 col-sm-12">
				<div class="form-group">
                  <label for="exampleInputEmail1">  Overs*</label>
					<select required name = "overs" class = "form-control" >
						<option value= "">
						Overs
						</option>
						<?php  
							for($i= 5; $i <= 50; $i = $i+5){
								echo '<option value= "'.$i.'" >'.$i.'</option>';
								
							}
						?>
					</select>

			 </div>
			</div>

				  
				  
			   <div class= "col-md-6 col-lg-6 col-xm-12 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Team 1 Name*</label>
                
					<select required name = "team1" class = "form-control" >
						<option value= ""> 
						Choose Team 
						<option>
						
						<?php
							foreach($teams as $values){
								echo '<option id = "'.$values['tid'].'" value = "'.$values['tid'].'" >'.$values['team_name'].'</option>';
								// echo '<option values = "'.$values['tid'].'" >'.$values['team_name'].'</option>';
							}
						
						?>
					</select>
                  </div>
                </div>
				
				 <div class= "col-md-6 col-lg-6 col-xm-12 col-sm-12">
               <div class="form-group">
                  <label for="exampleInputEmail1">Team 2 Name*</label>
                
					<select required name = "team2" class = "form-control" >
						<option value= ""> 
						Choose Team 
						<option>
							<?php
							foreach($teams as $values){
								echo '<option id = "'.$values['tid'].'" value = "'.$values['tid'].'" >'.$values['team_name'].'</option>';
								// echo '<option values = "'.$values['tid'].'" >'.$values['team_name'].'</option>';
							}
						
						?>
					</select>
                  </div>
                </div>
				
				
				 <div class= "col-md-6 col-lg-6 col-xm-12 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputEmail1"> Match Name*</label>
                  <input type="text" required class="form-control"  name  = "match_title" placeholder=" ">
                  </div>
                </div> 
				<div class= "col-md-6 col-lg-6 col-xm-12 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputEmail1"> Ground Name*</label>
                  <input required type="text" class="form-control"  name  = "ground_name" placeholder="Ground Name">
                  </div>
                </div>
				
				

			        <div class="col-lg-4 col-md-4 col-xm-12  col-sm-12">
					
                  <label for="exampleInputEmail1"> Country  </label>
                  <select onchange = "get_state(this.value)" class="form-control" id = "" name  = "country" value = "<?php echo $player[0]['country']?>" >
					<option>Choose country</option>
<?php   
					
					foreach($country as $key => $value){
						echo '<option  id = "'.$value['id'].'" value = "'.$value['id'].'">'.$value['name'].'</option>';
					}
					
					?>                  </select>
                </div>
				
				<div class="col-lg-4 col-md-4 col-xm-12  col-sm-12">
                
                  <label for="exampleInputEmail1"> State  </label>
				<select onchange = "get_city(this.value)" class = "form-control" id = "load_state" name  = "state" value = "<?php echo $player[0]['state']?>" >
					<option>Choose state</option>
                  </select>
                </div>
				
				<div class="col-lg-4 col-md-4 col-xm-12  col-sm-12">
                  <label for="exampleInputEmail1"> City  </label>                 
				 <select class="form-control"  id = "load_city"  name  = "city" value = "<?php echo $player[0]['city']?>" >
					<option>Choose city</option>
                  </select>
                </div>
				
				
			 <br>
			 <br/>
			
				
				
				<div class= "col-md-4 col-lg-4 col-xm-12 col-sm-12">
                <div class="form-group">
								</br>

                  <label for="exampleInputEmail1"> Day  </label>
                 <select class = "form-control" id = "m_day" name  = "day">
					<option class = "form-control" value = "">
					Day
					</option>
					<?php
						for($i = 1; $i <32 ; $i++){
							
							echo '<option>'.$i.'</option>';
							
						}
					?>
                 </select>
                  </div>
                </div>
				<div class= "col-md-4 col-lg-4 col-xm-12 col-sm-12">
                <div class="form-group">
				</br>
                  <label for="exampleInputEmail1"> Month  </label>
                 <select class = "form-control" id = "m_month" name  = "month">
					<option class = "form-control" value = "">
					Month
					</option>
					<option class = "form-control" value = "1">
					January
					</option>
					<option class = "form-control" value = "2">
					February
					</option>
					<option class = "form-control" value = "3">
					March
					</option>
					<option class = "form-control" value = "4">
					Aprail
					</option>
					<option class = "form-control" value = "5">
					May
					</option>
					<option class = "form-control" value = "6">
					June
					</option>
					<option class = "form-control" value = "7">
					July
					</option>
					
					<option class = "form-control" value = "8">
					August
					</option>
					<option class = "form-control" value = "9">
					September
					</option>
					<option class = "form-control" value = "10">
					October
					</option>
					<option class = "form-control" value = "11">
					November
					</option>
					<option class = "form-control" value = "12">
					Decmber
					</option>
                 </select>
                  </div>
                </div>
				
				<div class= "col-md-4 col-lg-4 col-xm-12 col-sm-12">
                <div class="form-group">
					</br>
                  <label for="exampleInputEmail1"> Year  </label>
                 <select class = "form-control" id = "m_year" name  = "year">
					<option  value = "">
					Year
					</option>
					<?php
					$year = date('Y');
						for($i=0 ; $i < 5; $i++){
							
							echo '<option value = "'.$year.'">'.$year.'</option>';
							$year++;
						}
					?>
                 </select>
                  </div>
                </div>
				<br/>
				
				<div class= "col-md-6 col-lg-6 col-xm-12 col-sm-12">
				
				<select name= "hours" id = "m_hour" class = "form-control">
					<option value = "">Hours
					</option>
					<?php  
						for($i=00; $i< 24; $i++){
							echo '<option value = "'.$i.'" >'.$i.'</option>';
						}
					
					?>
				</select>
				
				</div>
				<div class= "col-md-6 col-lg-6 col-xm-12 col-sm-12">
				<select onchange = "getTimeAll();" name= "mintues" id = "m_mintues" class = "form-control">
					<option value = "">Minutes
					</option>
					
					<?php  
						for($i=00; $i< 60; $i = $i+5){
							echo '<option value = "'.$i.'" >'.$i.'</option>';
							
						}
					
					?>
				</select>
				
				</div>
				<br><br>
				<div class="col-md-12 col-lg-12 col-sm-12 col-xm-12 ">
				
					<div class = "form-group">
						<label>
						Youtube Link
						</label>
						
						<input class = "form-control" type = "text" name= "yu_link" placeholder = "http://www.youube.com/Link" >
					</div>
				</div>

				 <!-- <div class="form-group">
					 <input accept="image/*" type='file' name  = "userfile" id="imgInp" />
					<img id="blah" src="<?php 'http://'.getenv('HTTP_HOST'); ?>/cric/public/img/upload_profile_pic.png" alt="choose your image" style="width: 150px;" />
				</div> -->
				
				<div class= "col-md-12 col-lg-12 col-xm-12 col-sm-12">
                <div class="form-group">
				</br><br/> <button type="submit"  class="btn btn-success btn-lg">CREATE MATCH</button>
				 </div>
                </div>
             </div>
              <!-- /.box-body -->

              
			<!-- <div class = "col-lg-8 col-md-8 col-sm-12 col-xm-12"> -->
			</div>

			<div class = "col-lg-4 col-md-4 col-sm-12 col-xm-12">
			
				<div class= "col-lg-12 col-md-12 col-xm-12 col-sm-12">
					<p >Choose Match photo</p>
					<div >
						 <input accept="image/*" type='file' name  = "userfile" id="imgInp" />
						<img id="blah" style="width: 240px;" src="<?php 'http://'.getenv('HTTP_HOST'); ?>/cric/public/img/upload_profile_pic.png" alt="choose your image" />
					</div>
    
				</div>
			</div>

            </form>
            
			</div>
			<div class="row">
			
              </div>
			</div>
			
		  </div>
          <!-- /.box -->
			
        

        </div>
	     <div class="box box-primary">
        </div>

        
	</section>
	<script>
	
	function getTimeAll(){
		//alert("sdjghu");
			var d  = document.getElementById('m_day').value;
			var m  = document.getElementById('m_month').value;
			var y  = document.getElementById('m_year').value;
			var h  = document.getElementById('m_hour').value;
			var min  = document.getElementById('m_mintues').value;
			/* alert("d , " + d);
			alert("m , " + m);
			alert("y , " + y);
			alert("h , " + h);
			alert("min , " + min); */
			
		if(d == '' && m == '' && y == '' && h == '' && min == ''){
			alert("Please fill date and time correct!");
		}else{
			function toTimestamp(strDate){
			   var datum = Date.parse(strDate);
			   return datum/1000;
			}
			var time1 = toTimestamp( m +'/'+d +'/'+ y+ ' ' + h+':'+min+': 00');
			var d = new Date();
			var n = d.getTime();
			var time2 = n/1000;
			if(time1 >= time2){
				
			}else{
				alert("Your select a past date , change it!");
			}
			//alert(toTimestamp('02/13/2009 23:31:30'));
		}
		
		
	}	
		
	
	</script>

	