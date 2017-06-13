 <!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" type="text/css" href="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/css-token/tokenfield-typeahead.css">
<link rel="stylesheet" type="text/css" href="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/css-token/bootstrap-tokenfield.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
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
            <center> <h3 class="box-title"> Please Update Live Score</h3><center>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
            <div class = "row">
              <div class="col-md-12 col-lg-12 col-sm-12 col-xm-12">
                  <form class="form-horizontal" role="form" method= "post">
                  <!-- action ="<?php echo 'http://'.getenv('HTTP_HOST'); ?>/cric/live_score/<?php ?>"  -->
                    <div class="box-body">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Win Toss By</label>
                            <div class="col-sm-10">
                                <div><b><?php echo $toss_winning_team_name; ?></b></div>
                            </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Ist Inning (Batting)</label>
                          <div class="col-sm-10">
                            <div><b><?php echo $team_name; ?></b></div>
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="currenOver" class="col-sm-2 control-label">Current Over</label>
                          <div class="col-sm-10">
                            <div><b>
                                <div class="input-group" style="width: 150px; ">
                                  <span class="input-group-btn">
                                      <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
                                        <span class="glyphicon glyphicon-minus"></span>
                                      </button>
                                  </span>
                                  <input type="text" name="quant[2]" class="form-control input-number" value="1" min="1" max="100">
                                  <span class="input-group-btn">
                                      <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                                          <span class="glyphicon glyphicon-plus"></span>
                                      </button>
                                  </span>
                                </div>
                            <!-- <input type="text" required name  = "currentover" class="form-control" id="currentoverid" placeholder="1"> -->
                            </div>
                          </div>
                      </div>

                      <!-- <div class="center form-group" style="width: 150px; margin: 40px auto;">
                          <p>
                            </p><div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                        <span class="glyphicon glyphicon-minus"></span>
                                    </button>
                                </span>
                                <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
                            </div>
                          <p></p>
                          <p>
                            </p>
                        <p></p>
                      </div> -->


                      <div class="form-group">
                        <label for="currenBall" class="col-sm-2 control-label">Current Ball</label>
                          <div class="col-sm-10">
                            <div><b>
                            <div class="input-group" style="width: 150px; ">
                              <span class="input-group-btn">
                                  <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[1]">
                                    <span class="glyphicon glyphicon-minus"></span>
                                  </button>
                              </span>
                              <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="100">
                              <span class="input-group-btn">
                                  <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[1]">
                                      <span class="glyphicon glyphicon-plus"></span>
                                  </button>
                              </span>
                            </div>
                            <!-- <input type="text" required name  = "currentball" class="form-control" id="currentballid" placeholder="1"> -->
                            </div>
                          </div>
                      </div>
                       <div class="form-group">
                        <label for="chose Extra Run" class="col-sm-2 control-label">Extra Run </label>
                          <div class="col-sm-10">
                            <select onchange = "" id = "t_s_team"  class= "form-control" name  = "toss_winner_team" style="width: 150px; " >
                              <option value= "0" >Chosse Type
                              </option>
                              <option value= "1" >White Ball
                              </option>
                              <option value= "2" >No Ball
                              </option>
                            </select>
                          </div>
                      </div>
                      <div class = "row">
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12" style="text-align: right;">
                          Batsman 
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          Batsman's Name
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          Score Value
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          Playing Status
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12" style="text-align: right;">
                          Bowler's Name
                        </div>
                        <div class = "col-lg-2 col-md-2 col-xm-12 col-sm-12">
                          Ball Thrown
                        </div>
                      </div>
                      <div class = "row">
                        <div class = "col-lg-12 col-md-12 col-xm-12 col-sm-12">
                          <hr> 
                        </div>
                      </div>
                      <!-- <?php echo $team_list; ?> -->
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
                      <button type="submit" class="btn btn-info pull-right">Update Score </button>
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

<script>

  //plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});

$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});

$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});

$(".input-number").keydown(function (e) {
      // Allow: backspace, delete, tab, escape, enter and .
      if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
           // Allow: Ctrl+A
          (e.keyCode == 65 && e.ctrlKey === true) || 
           // Allow: home, end, left, right
          (e.keyCode >= 35 && e.keyCode <= 39)) {
               // let it happen, don't do anything
               return;
      }
      // Ensure that it is a number and stop the keypress
      if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
          e.preventDefault();
      }
  });

$(document).ready(function(){ 
  $(form).on('submit', function(){ 
        location.reload();
  });
})



</script>