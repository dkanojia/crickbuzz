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
	
	<div class="container">
	<div class="row">
	
		<div class="box box-primary">
            <div class="box-header with-border">
              <center style = "background-color: yellow"><h3 class="box-title">UPDATE SCORE</h3></center>
            </div>
            <!-- /.box-header -->
			
			<div class = "row">
			
			 <div class= "col-lg-6 col-md-6 col-xm-12 col-sm-12">
  <center><h4>Score Board</h4></center>
  
  <table class="table">
    <thead>
      <tr>
        <th>Batsman</th>
        <th>Run</th>
        <th>Bowler</th>
        <th>Ball</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
          
      <tr class="warning">
        <td>Robin</td>
        <td>2</td>
        <td>Smith</td>
        <td>1.4</td>
        <td>No run</td>
      </tr>
      <tr class="warning">
        <td>Robin</td>
        <td>2</td>
        <td>Smith</td>
        <td>1.4</td>
        <td>No run</td>
      </tr><tr class="warning">
        <td>Robin</td>
        <td>2</td>
        <td>Smith</td>
        <td>1.4</td>
        <td>No run</td>
      </tr><tr class="warning">
        <td>Robin</td>
        <td>2</td>
        <td>Smith</td>
        <td>1.4</td>
        <td>No run</td>
      </tr>
    </tbody>
  </table>
</div>
         
			<div class= "col-lg-6 col-md-6 col-xm-12 col-sm-12">
            <!-- form start -->
			<center>
			<h4>Update Form</h4>
			</center>
            <form role="form">
              <div class="box-body">
				
				<div class = "col-md-11 col-lg-11 col-sm-12 col-xm-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">BatsMan</label>
                  <select name = "batsman" class = "form-control">
					<option value = "" >Choose BatsMan
					</option>
                  </select>
				  
                </div>
                </div>
				
				<div class = "col-md-11 col-lg-11 col-sm-12 col-xm-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Bowler </label>
                <select name = "bowler" class = "form-control">
					<option value = "" >Choose Bowler
					</option>
                  </select>
                </div>
                </div>
				
				<div class = "col-md-11 col-lg-11 col-sm-12 col-xm-12">
				
				<div class= "col-md-6 col-lg-6 col-xm-12 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Over </label>
                  <input type="text" value = "0" disabled class="form-control" id="exampleInputEmail1">
                </div>
                </div>
				
				<div class= "col-md-6 col-lg-6 col-xm-12 col-sm-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">ball </label>
                  <select name  = "ball" class = "form-control" >
					<option value = "" >Choose Ball
					</option>
					<option value = "1" >1
					</option><option value = "2" >2
					</option><option value = "3" >3
					</option><option value = "4" >4
					</option><option value = "5" >5
					</option>
					<option value = "6" >6
					</option>
					
                  </select>
				  
                </div>
                </div>
				
				
                </div>
			
			
			<div class = "col-md-11 col-lg-11 col-sm-12 col-xm-12">
                <div class= "col-md-6 col-lg-6 col-sm-12 col-xm-12" >
				<div class="form-group">
                  <label for="exampleInputEmail1">Update Run </label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                </div>
				
				  <div class= "col-md-6 col-lg-6 col-sm-12 col-xm-12" >
				<div class="form-group">
                  <label for="exampleInputEmail1">Update Run </label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                </div>
				
                </div>
              
              </div>
              <!-- /.box-body -->

            </form>
          </div>
		  
		 </div>


          </div>
          </div>
          </div>
		  
		  
		  
		  
		  <div class = "row">
		  <div class="col-md-12 col-lg-12 col-sm-12 col-xm-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <center><h4 class="box-title"> SET MATCH PARAMETERS </h4></center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
			<div class = "col-lg-6 col-md-6 col-sm-12 col-xm-12">
            <form class="form-horizontal">
              <div class="box-body">
               
			   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tournament <br>(if any)</label>

                  <div class="col-sm-10">
                    <select class= "form-control" name  = "tournament" >
						<option value= "" >Choose Tournament
						<option>
						<?php
						if(isset($tournaments)){
							
							echo $tournaments;

						}
						?>
                    </select>
                  </div>
                </div>
				
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Match</label>

                  <div class="col-sm-10">
                    <select onchange = "l_team_f(this.value);"  class= "form-control" name  = "match" >
						<option value= "" >Choose Match
						</option>
						<?php echo $running_match; ?>
                    </select>
                  </div>
                </div>
               
			    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Toss winner </label>

                  <div class="col-sm-10">
                    <select onchange = "l_players(this.value)" id = "t_s_team"  class= "form-control" name  = "match" >
						<option value= "" >Choose Toss Winner Team
						</option>
                    </select>
                  </div>
                </div>
			   
              </div>
           
            </form>
			</div>
			<div class = "col-lg-6 col-md-6 col-sm-12 col-xm-12">
            <form class="form-horizontal">
              <div class="box-body">
               
			   <div class= "col-md-6 col-lg-6 col-sm-12 col-xm-12">
			   <div class="form-group">
                       
				<div class="col-sm-10">
                    <select  class= "form-control" name  = "match" >
						<option value= "" >Choose Strike 1 
						</option>
                    </select>
                  </div>
                </div>
                </div>
				<div class= "col-md-6 col-lg-6 col-sm-12 col-xm-12">
			   <div class="form-group">
                    
				<div class="col-sm-10">
                    <select  class= "form-control" name  = "match" >
						<option value= "" >Choose Strike 2
						</option>
                    </select>
                  </div>
                  
                </div>
                </div>
               
			    <div class="form-group">
                  

                  <div class="col-sm-12 col-xm-12 col-lg-12 col-md-12">
                    <select  class= "form-control" id= "c_matches" name  = "match" >
						<option value= "" >Choose Bowler
						</option>
                    </select>
                  </div>
                </div>
			   
                
              </div>
              <!-- /.box-body -->
             
              <!-- /.box-footer -->
            </form>
			
			
			</div>
			 <div class="box-footer">
               
                <button type="submit" class="btn btn-info pull-right">SET MATCH PARAMETERS </button>
              </div>
		  </div>
        
        </div>
		  </div>
        </div>
		
		
    </section>
	
	
	
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>

		//get all team as match
		function l_players(bb) {
		var mid = document.getElementById('c_matches').value;

		$.ajax({url: "<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/load_players_team/"+bb+"/"+mid, success: function(result){		

				$("#t_s_team").html(result);

			}});	
		
		}
		function l_team_f(bb) {
		var pp  = bb;
		
		$.ajax({url: "<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/load_team/"+pp, success: function(result){		

				$("#t_s_team").html(result);

			}});		
		}
</script>


 