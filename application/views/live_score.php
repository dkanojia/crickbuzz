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
    <div class="box box-success">
      <div class="box-header with-border">
        <!-- <h3 class="box-title"> SEARCH  </h3> -->
      </div>
      <div class="box-body">
        <div class = "row">
          <!-- <div class = " col-lg-offset-1 col-md-offset-1 col-lg-3 col-md-3 col-xm-12 col-sm-12"> -->
            <!-- <input id = "plByName" class="form-control" type="text" placeholder="Search By Name"> -->
          <!-- </div> -->
        <div class = "col-lg-3 col-md-3 col-xm-12 col-sm-12">
          <!-- <input id = "plByCity" class="form-control" type="text" placeholder="Search By City"> -->
        </div>
        <div class = "col-lg-3 col-md-3 col-xm-12 col-sm-12">
          <!-- <input id = "plByMobile" class="form-control" type="text" placeholder="Search By Mobile"> -->
        </div>
        <div class = "col-lg-3 col-md-3 col-xm-12 col-sm-12">
          <!-- <input id = "plByMobile" class="form-control" type="text" placeholder="Search By Mobile"> -->
        </div>
        <div class = "col-lg-3 col-md-3 col-xm-12 col-sm-12">
          <!-- <div><b><?php ?></b></div> -->
          <label for="forTotalScore">Total Score : </label>
          <span><b>200</b></span>
          <div>
            <label for="forTotalOvers">Current Over : </label>
            <span><b>20</b></span>
          </div>
          <!-- <div><b><?php ?></b></div> -->
          <!-- <div><b>200</b></div> -->
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <div class="box-footer"></div>

  <!------ / form started---------->

    <div class = "row">
      <div class="col-md-12 ">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <center> <h3 class="box-title"> Please Update Live Socre</h3><center>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
            <div class = "row">
              <div class="col-md-12 col-lg-12 col-sm-12 col-xm-12">
                  <form class="form-horizontal" role="form" action ="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/set_parameter_match/<?php ?>" method= "post">
                    <div class="box-body">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Win Toss By</label>
                            <div class="col-sm-10">
                                <div><b><?php echo $toss_winning_team_name; ?></b></div>
                            </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Ist Inning</label>
                          <div class="col-sm-10">
                            <div><b><?php echo $team_name; ?></b></div>
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="currenOver" class="col-sm-2 control-label">Current Over</label>
                          <div class="col-sm-10">
                            <div><b><input type="text" required name  = "currentover" class="form-control" id="currentoverid" placeholder="1"></div>
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="currenBall" class="col-sm-2 control-label">Current Ball</label>
                          <div class="col-sm-10">
                            <div><b><input type="text" required name  = "currentball" class="form-control" id="currentballid" placeholder="1"></div>
                          </div>
                      </div>
                       <div class="form-group">
                        <label for="chose Extra Run" class="col-sm-2 control-label">Extra Run </label>
                          <div class="col-sm-10">
                            <select onchange = "" id = "t_s_team"  class= "form-control" name  = "toss_winner_team" >
                              <option value= "0" >Chosse Type
                              </option>
                              <option value= "1" >White Ball
                              </option>
                              <option value= "2" >No Ball
                              </option>
                            </select>
                          </div>
                      </div>
                      <?php echo $team_list; ?>
                      <div class = "row">
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12" style="text-align: right;">
                          Batsman 1 : 
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          Batsman Name
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          <input type="text" required name  = "batscore" class="form-control" id="batscore_id" placeholder="">
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          <input type="text" required name  = "outstatus" class="form-control" id="outstatus_id" placeholder="P/O">
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12" style="text-align: right;">
                          BowlerName
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          <input type="text" required name  = "bowl" class="form-control" id="bowl_id" placeholder="1">
                        </div>
                      </div>
                      <div class = "row">
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12" style="text-align: right;">
                          Batsman 2 : 
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          Batsman Name
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          <input type="text" required name  = "batscore" class="form-control" id="batscore_id" placeholder="">
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          <input type="text" required name  = "outstatus" class="form-control" id="outstatus_id" placeholder="P/O">
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12" style="text-align: right;">
                          BowlerName
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          <input type="text" required name  = "bowl" class="form-control" id="bowl_id" placeholder="1">
                        </div>
                      </div>
                      <div class = "row">
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12" style="text-align: right;">
                          Batsman 2 : 
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          Batsman Name
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          <input type="text" required name  = "batscore" class="form-control" id="batscore_id" placeholder="">
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          <input type="text" required name  = "outstatus" class="form-control" id="outstatus_id" placeholder="P/O">
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12" style="text-align: right;">
                          BowlerName
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          <input type="text" required name  = "bowl" class="form-control" id="bowl_id" placeholder="1">
                        </div>
                      </div>
                      <div class = "row">
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12" style="text-align: right;">
                          Batsman 3 : 
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          Batsman Name
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          <input type="text" required name  = "batscore" class="form-control" id="batscore_id" placeholder="">
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          <input type="text" required name  = "outstatus" class="form-control" id="outstatus_id" placeholder="P/O">
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12" style="text-align: right;">
                          BowlerName
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          <input type="text" required name  = "bowl" class="form-control" id="bowl_id" placeholder="1">
                        </div>
                      </div>
                     <!--  <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Toss winner </label>
                          <div class="col-sm-10">
                            <select onchange = "" id = "t_s_team"  class= "form-control" name  = "toss_winner_team" >
                              <option value= "" >Choose Toss Winner Team
                              </option>
                              <?php
                              // if(isset($match_team_list)){
                              //   echo $match_team_list;
                              // }
                              ?>
                            </select>
                          </div>
                      </div> -->
                    </div>
                     <div class="box-footer">
                      <button type="submit" class="btn btn-info pull-right">SET MATCH PARAMETERS </button>
                    </div>
                  </form>
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