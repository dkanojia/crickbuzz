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
					<center style= "color: green;"><h3 class="box-title"><b>VIEW TEAM </b></h3></center>
				</div>
            
                   	          
  <table style = "margin-top: 2%;" class="table table-hover">
    <thead style = "background-color: rgba(0 , 0, 0, 0.3); color: #fff;">
      <tr>
        <th>#</th>
        <th style="width: 10%;">LOGO</th>
        <th>NAME</th>
        <th>CAPTAIN</th>
        <th>VICE CAPTAIN</th>
        <th>COUNTRY</th>
        <th>STATE</th>
        <th>CITY</th>
        <th>TOTAL PLAYERS</th>
        <th>REGISTERED DATE</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody id = "player_list">
	
	
	
	<?php
			echo $team;
	?>
	
	
	
	
	
	
    </tbody>
	
	 <tfoot style = "background-color: rgba(0 , 0, 0, 0.3); color: #fff;">
      <tr>
         <th>#</th>
        <th style="width: 10%;">LOGO</th>
        <th>NAME</th>
        <th>CAPTAIN</th>
        <th>VICE CAPTAIN</th>
        <th>COUNTRY</th>
        <th>STATE</th>
        <th>CITY</th>
        <th>TOTAL PLAYERS</th>
        <th>REGISTERED DATE</th>
        <th>ACTION</th>
      </tr>
    </tfoot>
  
</table>
	
        	<div class="box box-success">
            <div class="box-header with-border">
             <CENTER> <h3 class="box-title"> ADD PLAYER TO TEAM  </h3></CENTER>
            </div>
            <div class="box-body">
			  <div class="row">
				<div class=" col-lg-offset-1 col-md-offset-1 col-lg-3 col-md-3 col-xm-12 col-sm-12">
				<input id="plByName" class="form-control" type="text" placeholder="Search By Name">
              </div>
			  <div class="col-lg-3 col-md-3 col-xm-12 col-sm-12">
				<input id="plByCity" class="form-control" type="text" placeholder="Search By City">
              </div>
			  
              
            </div>
            <!-- /.box-body -->
			
			
<div class= "col-md-8 col-lg-8 col-sm-12 col-xm-12">
<center>
<h5 style = "BACKGROUND-COLOR: #DDD;"> ALL PLAYER LIST  </h5>
</center>			
</div>			
<div id = "div_team_player_list" class= "col-md-8 col-lg-8 col-sm-12 col-xm-12">


		<table id = "team_player_list" class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>PHOTO</th>
        <th>NAME</th>
        <th>ROLE</th>
        <th>MOBILE</th>
        <th>CITY</th>
      </tr>
    </thead>
    <tbody>
      
      <?php echo $players; ?>
    </tbody>
  </table>
			
</div>
			
			
			
<div id = "div_selected_player_list" class= "col-md-4 col-lg-4 col-sm-12 col-xm-12">
<select class = "form-control" onchange = "requst_already_pl_ls();" id = "team_already_players" name  = "team_already_players"  >
<option  value= ''>Choose Team</option>
<?php if($team_list){
	
	echo $team_list;
} ?>
</select>	
			
				<center>
<h5 style = "BACKGROUND-COLOR: #DDD;"> SELECTED PLAYER LIST  </h5>
</center>
					
					<table id = "team_selected" class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>NAME</th>
        <th>ROLE</th>
        <th>CITY</th>
      </tr>
    </thead>
    <tbody id = "team_selected_tbl">
     
    </tbody>
  </table>
		
</div>
		
        </div>
		<div class="box-footer">
             
              </div>
	</div>
	</section>
 </div>

	<style>
	#blah {
		border-radius: 5%;
		height: 400px;
		width: 500px;
	}
</style>




<script>

function requst_already_pl_ls(){
	var aa = document.getElementById('team_already_players').value;

	//alert(aa);
$.ajax({url: "requst_already_pl_ls/"+aa, success: function(result){
        //alert(result)
		$("#team_selected_tbl").html(result);
    }});
}

function addPl(aa){
	var team_id = document.getElementById('team_already_players').value;
		// alert(aa +','+team_id );

	if(team_id != ''){
	$.ajax({url: "add_team_player/"+aa+"/"+team_id, success: function(result){
		
		if(result == 1){
			requst_already_pl_ls();
		}else{
			alert("Player already in team");
		}
    }});
	}else{
		alert("Please select a team first!");
	}
}

function removePl(player_id){
	alert(player_id);
	var team_id = document.getElementById('team_already_players').value;
	if (confirm('Are you sure you want to Delete this player')) {
    // Save it!
		$.ajax({url: "aj_remove_player_from_team/"+player_id+"/"+team_id, success: function(result){
			if(result=='1'){
			alert("Delete successfully");
			requst_already_pl_ls();

			}
		}});
	
	} else {
    // Do nothing!
	}
	
}
</script>

	

<style>
a {
	color: #fff;
}

#div_team_player_list {
	
	 height: 400px !important;
    overflow: scroll;
}

#div_selected_player_list {
	
	 height: 400px !important;
    overflow: scroll;
}

</style>
 