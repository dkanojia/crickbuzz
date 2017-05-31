 <!-- Content Wrapper. Contains page content -->
 	<link rel="stylesheet" type="text/css" href="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/css-token/tokenfield-typeahead.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/css-token/bootstrap-tokenfield.css">
	
  <div class="content-wrapper" style= "min-height: 0;">
    <!-- Content Header (Page header) -->
    <section style= "min-height: 0;" class="content-header">
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
	</section>
	
	
	<section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img data-toggle="modal" data-target="#myModal2" class="profile-user-img img-responsive img-circle" src="<?php  echo 'http://'.getenv('HTTP_HOST').'public/profile_img/'.$player[0]['name'].'/'.$player[0]['profile_url']; ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php  echo $player[0]['name'];?></h3>

              <p class="text-muted text-center"><?php echo $player[0]['team']; ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b> Bat Style</b> <a class="pull-right"><?php  echo $player[0]['bat']; ?></a>
                </li>
                <li class="list-group-item">
                  <b> Ball Style</b> <a class="pull-right"><?php echo $player[0]['bowler']?></a>
                </li>
                <li class="list-group-item">
                  <b>Best Bat</b> <a class="pull-right"><?php  echo $player[0]['best_bat']; ?></a>
                </li>
				
				<li class="list-group-item">
                  <b>Best Ball</b> <a class="pull-right"><?php  echo $player[0]['best_ball']; ?></a>
                </li>
              </ul>

              <p data-toggle="modal" data-target="#myModal"  class="btn btn-primary btn-block"><b>EDIT</b></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted"><?php  echo $player[0]['city'].','.$player[0]['state'].','.$player[0]['country']; ?></p>

              <hr>
			<strong><i class="fa fa-map-marker margin-r-5"></i> Mobile</strong>

              <p class="text-muted"><?php  echo $player[0]['mobile']; ?></p>

              <hr>
			  <strong><i class="fa fa-map-marker margin-r-5"></i> Email</strong>

              <p class="text-muted"><?php  echo $player[0]['email']; ?></p>
              
			  
			  <!--<strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>
				--->
              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
			   <p  data-toggle="modal" data-target="#myModal1"  class="btn btn-primary btn-block"><b>EDIT</b></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
       <div class="col-md-9">
		
		<div class="box box-primary">
            <div class="box-header with-border">
			<center style="color: green;">
				<h3>History</h3>
			</center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
			   <div class="tab-content">
              <div class="tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                   
                    <span class="description">Shared publicly - 7:30 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->

            
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  
                  <!-- END timeline item -->
                  <li>
                    
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

             
            </div>
        </div>
			  
               </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
	
	
			
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center>EDIT DETAILS</center> </h4>
      </div>
       <div class="modal-body">
   <form role="form" action ="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/edit_player_detail/<?php echo $player[0]['pid']; ?>" method= "post">
               
			   <div class="">
                  <label for="exampleInputEmail1">Name </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name  = "name" value = "<?php echo $player[0]['name']?>"  placeholder="Enter Name">
                </div></br>
				 <div class="form-group">
                  <select class="form-control" name  = "battingStyle" >
				  <option value  = "<?php echo $player[0]['bat'];?>" >Bating Style</option>
				  <option value  = "right-hand" >Right Hand</option>
				  <option value  = "left-hand" >Left Hand</option>
				  </select>
                </div>
				 <div class="form-group">
				  <select class="form-control" name  = "bowlingStyle"  >
				  <option value  = "<?php echo $player[0]['bowler']; ?>" >Bowling Style</option>
				  <option value  = "right-hand-spinner" >Right Hand Sppiner</option>
				  <option value  = "left-hand-spinner" >Left Hand Sppiner</option>
				  <option value  = "right-hand-faster" >Right Hand Faster</option>
				  <option value  = "left-hand-faster" >Left Hand Faster</option>
				  </select>
				 
				</div> 
               
              <!-- /.box-body -->

                <button type="submit" class="btn btn-success">Submit</button>
				<div class="clear"></div>	
							
            </form>
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


	
	
	<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
	   <form role="form" action = "<?php echo 'http://'.getenv('HTTP_HOST');?>edit_player_detail1/<?php echo $player[0]['pid']; ?>" method = "post">
             <div class= "row">
			   <div class="col-lg-4 col-md-4 col-xm-12  col-sm-12">
                  <select onchange = "get_state(this.value)" class="form-control" id = "" name  = "country" value = "<?php echo $player[0]['country']?>" >
					<option>Choose country</option>
<?php   
					
					foreach($country as $key => $value){
						echo '<option  id = "'.$value['id'].'" value = "'.$value['id'].'">'.$value['name'].'</option>';
					}
					
					?>                  </select>
                </div>
				
				<div class="col-lg-4 col-md-4 col-xm-12  col-sm-12">
                  <select onchange = "get_city(this.value)" class = "form-control" id = "load_state" name  = "state" value = "<?php echo $player[0]['state']?>" >
					<option>Choose state</option>
                  </select>
                </div>
				
				<div class="col-lg-4 col-md-4 col-xm-12  col-sm-12">
                  <select class="form-control"  id = "load_city"  name  = "city" value = "<?php echo $player[0]['city']?>" >
					<option>Choose city</option>
                  </select>
                </div>
				
				
             </div><br>
			 <div class= "row">
				<div class= "col-md-12 col-lg-12 col-sm-12 col-xm-12">
				<input type = "text" class = "form-control" name  = "mobile" value= "<?php echo $player[0]['mobile']?>" placeholder ="Mobile">
				</div>
			 </div>
			 
			 <br>
			 <div class= "row">
				<div class= "col-md-12 col-lg-12 col-sm-12 col-xm-12">
				<input type = "text" class = "form-control" name  = "email" value= "<?php echo $player[0]['email']?>" placeholder ="Email">
				</div>
			 </div>
			 
			 <br>
			 <div class= "row">
				<div class= "col-md-12 col-lg-12 col-sm-12 col-xm-12">
				<input type = "text" class = "form-control" name  = "" value= "" placeholder ="Notes">
				</div>
			 </div><br>
				
              <!-- /.box-body -->

                <button type="submit" class="btn btn-success">Submit</button>
				<div class="clear"></div>	
							
            </form>
  
	  
		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

	
	<!--  profile upload model --->
	
			
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center>CHANGE PROFILE PHOTO </center> </h4>
      </div>
	  <form enctype="multipart/form-data"  class="form-horizontal" action = "<?php echo 'http://'.getenv('HTTP_HOST');?>edit_player_photo_upload/<?php echo $player[0]['pid'].'/'.$player[0]['name']; ?>" method= "post">
       <div class="modal-body">
	   <div class="row">
	   	<div style = "text-align: center;">
					
				<div>
				
				 <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xm-offset-4"><input accept="image/*" type='file' name  = "userfile" id="imgInp" />
				<img id="blah" src="<?php echo  'http://'.getenv('HTTP_HOST'); ?>/cric/public/img/upload_profile_pic.png" alt="choose your image" />
				</div>
    
					
				</div>
				</div>
       </div>
      
      <div class="modal-footer">
        <button type= "submit" class= "btn btn-success full-left">UPLOAD</button><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
	</form>
  </div>
</div>

<style>
	#blah {
		border-radius: 50%;
		height: 300px;
		width: 250px;
	}
</style>
	
	<!--  ./ profile upload model --->
	
	
	
	

	
<script>



			//// get state list by ajax accrording country
	function get_state(aa) {
		var pp  = aa;
		//alert(pp);
		$.ajax({url: "<?php echo 'http://'.getenv('HTTP_HOST');?>load_state/"+pp, success: function(result){
        $("#load_state").html(result);
    }});
	}	
	/////get city list by ajax regarding state 
		function get_city(bb) {
		var pp  = bb;
		//alert(pp);

		$.ajax({url: "<?php echo 'http://'.getenv('HTTP_HOST');?>load_city/"+pp, success: function(result){
				$("#load_city").html(result);
				//alert(result);

			}});		
		}
	
	
	
</script>

