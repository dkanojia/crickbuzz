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
    
	
	
	<?php
		

	?>
		<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"> SEARCH  </h3>
            </div>
            <div class="box-body">
			  <div class = "row">
				<div class = " col-lg-offset-1 col-md-offset-1 col-lg-3 col-md-3 col-xm-12 col-sm-12">
				<input id = "plByName" class="form-control" type="text" placeholder="Search By Name">
              </div>
			  <div class = "col-lg-3 col-md-3 col-xm-12 col-sm-12">
				<input id = "plByCity" class="form-control" type="text" placeholder="Search By City">
              </div>
			  <div class = "col-lg-3 col-md-3 col-xm-12 col-sm-12">
				<input id = "plByMobile" class="form-control" type="text" placeholder="Search By Mobile">
              </div>
              
            </div>
            <!-- /.box-body -->
        </div>
		<div class="box-footer">
             
              </div>
	</div>
	<!------ / form started---------->
	
	<div class = "row">
	<div class="col-md-12 ">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
             <center> <h3 class="box-title"> PLAYERS LIST </h3><center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
              
             
  <table id= "userTable" class="table table-hover">
    <thead>
      <tr style = "background-color: rgba(0, 0, 0, 0.6); color: #fff;">
       
        <th>#</th>
        <th>IMAGE</th>
        <th>NAME</th>
        <th>ROLE</th>
        <th>DOB</th>
        <th>MOBILE</th>
        <th>CITY</th>
        <th>BAT STYLE</th>
        <th>BOLL STYLE</th>
        <th>TEAM</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody id = "view_player_tbl">
		<?php echo $players; ?>
    </tbody>
	   <tfoot>
      <tr style = "background-color: rgba(0, 0, 0, 0.6); color: #fff;">
        <th>#</th>
        <th>IMAGE</th>
        <th>NAME</th>
        <th>ROLE</th>
        <th>DOB</th>
        <th>MOBILE</th>
        <th>CITY</th>
		<th>BAT STYLE</th>
        <th>BOLL STYLE</th>        
		<th>TEAM</th>
        <th>ACTION</th>
      </tr>
    </tfoot>
  </table>

                
              <!-- /.box-body -->
              <div class="box-footer">
             
              </div>
              <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
	</div>
	</div>
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->

<style>
	a {
		color: #fff;
	}
</style>

<script>
// $('#checkAll').on('click', function() {
//         if (this.checked == true)
//             $('#userTable').find('input[name="checkboxRow"]').prop('checked', true);
//         else
//             $('#userTable').find('input[name="checkboxRow"]').prop('checked', false);
//     });

</script>