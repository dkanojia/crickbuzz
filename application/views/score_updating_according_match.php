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
    
  <!------ / form started---------->
  
  <div class = "row">
  <div class="col-md-12 ">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
             <center> <h3 class="box-title"> MATCH LIST </h3><center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
              
             
  <table id= "userTable" class="table table-hover">
    <thead>
      <tr style = "background-color: rgba(0, 0, 0, 0.6); color: #fff;">
        <th>#</th>
        <th>#</th>
        <th>TOURNAMENT NAME </th>
        <th>MATCH TITLE</th>
        <th>TEAM 1</th>
        <th>TEAM 2</th>
        <th>OVERS</th>
        <th>TIME</th>
        <th>DATE </th>
        <th>STATUS </th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody id = "view_player_tbl">
  <?php echo $mathces; ?>
  
    </tbody>
     <tfoot>
      <tr style = "background-color: rgba(0, 0, 0, 0.6); color: #fff;">
        <th>#</th>
        <th>#</th>
        <th>TOURNAMENT NAME </th>
        <th>MATCH TITLE</th>
        <th>TEAM 1</th>
        <th>TEAM 2</th>
        <th>OVERS</th>
        <th>TIME</th>
        <th>DATE </th>
        <th>STATUS </th>
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
  </div>
  <!-- /.content-wrapper -->

<style>
  a {
    color: #fff;
  }
</style>

<script>
$('#checkAll').on('click', function() {
        if (this.checked == true)
            $('#userTable').find('input[name="checkboxRow"]').prop('checked', true);
        else
            $('#userTable').find('input[name="checkboxRow"]').prop('checked', false);
    });


</script>