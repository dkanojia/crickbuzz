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
            <center> <h3 class="box-title"> Please set Match Parameters</h3><center>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
            <div class = "row">
              <div class="col-md-12 col-lg-12 col-sm-12 col-xm-12">
                <div class = "col-md-12 col-lg-12 col-sm-12 col-xm-12">
                  <form class="form-horizontal" role="form" action ="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/set_parameter_match/<?php echo $match_id?>" method= "post">
                    <div class="box-body">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Tournament Name </label>
                            <div class="col-sm-10">
                                <div><b><?php echo $tournament_name?></b></div>
                            </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Match Name</label>
                          <div class="col-sm-10">
                            <div><b><?php echo $match_name ?></b></div>
                          </div>
                      </div>                     
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Toss winner </label>
                          <div class="col-sm-10">
                            <select onchange = "" id = "t_s_team"  class= "form-control" name  = "toss_winner_team" >
                              <option value= "" >Choose Toss Winner Team
                              </option>
                              <?php
                              if(isset($match_team_list)){
                                echo $match_team_list;
                              }
                              ?>
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword4" class="col-sm-2 control-label">Choose Field OR Bat</label>
                          <div class="col-sm-10">
                            <select onchange = "" id = "inning_choose_id"  class= "form-control" name  = "inning_choose" >
                              <option value= "" >Take Decision
                              </option>
                              <option onclick= "" id = "1"  value = "1">Bat</option>
                              <option onclick= "" id = "2"  value = "2">Field</option>
                            </select>
                          </div>
                      </div>
                    </div>
                     <div class="box-footer">
                      <button type="submit" class="btn btn-info pull-right">SET MATCH PARAMETERS </button>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          <!-- /.box-body -->
        </div>
          <!-- /.box -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->  