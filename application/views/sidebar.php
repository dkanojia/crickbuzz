
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>ADMINISTRATOR</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="active treeview">
          <a href="<?php echo 'http://'.getenv('HTTP_HOST');?>/cric/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          
          </a>
         
        </li>
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>TOURNAMENT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/create_tour"><i class="fa fa-circle-o"></i>Create Tournament</a></li>
            <li>
              <a href="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/tour_view"><i class="fa fa-circle-o"></i> View Tournament
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="running_tour"><i class="fa fa-circle-o"></i>  Running Tournament</a></li>
                <li>
                  <a href="upcoming_tour"><i class="fa fa-circle-o"></i> Upcoming Tournament
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                </li>
				<li>
                  <a href="past_tour"><i class="fa fa-circle-o"></i> Past Tournament
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                </li>
              </ul>
            </li>
           
          </ul>
        </li>

		
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>MATCH</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/create_match"><i class="fa fa-circle-o"></i>  Create Match </a></li>
            
		   <li>
              <a href="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/view_match"><i class="fa fa-circle-o"></i> View Match 
              </a>
           </li>
           
          </ul>
        </li>

		
		
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>TEAM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/create_team"><i class="fa fa-circle-o"></i>Create Team </a></li>
        <li>
              <a href="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/add_players"><i class="fa fa-circle-o"></i> Add Players 
              </a>
           </li>
		   <li>
              <a href="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/view_team"><i class="fa fa-circle-o"></i> View Team 
              </a>
           </li>
           
          </ul>
        </li>

		
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>PLAYER</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/create_player"><i class="fa fa-circle-o"></i>  Create Player </a></li>
            
		   <li>
              <a href="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/view_player"><i class="fa fa-circle-o"></i> View Player 
              </a>
           </li>
           
          </ul>
        </li>

		
		
		
		 <li class="treeview">
            <a href="#">
            <i class="fa fa-folder"></i> <span>SCORE</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
			 </a>
          <ul class="treeview-menu">
            
            <li>
              <a href="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/update_score"><i class="fa fa-circle-o"></i> View Score 
              </a>
           </li>
           <li>
              <a href="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/score_updating_according_match"><i class="fa fa-circle-o"></i> Start Match 
              </a>
           </li>
		   
		   <li><a href="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/update_score"><i class="fa fa-circle-o"></i>  View Past Score </a></li>
		  
          </ul>
        </li>

		
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>USER MANAGEMENT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/create_user"><i class="fa fa-circle-o"></i>   Create User </a></li>
            <li>
              <a href="<?php  echo 'http://'.getenv('HTTP_HOST'); ?>/cric/view_user"><i class="fa fa-circle-o"></i> View User
              </a>
           </li>
		  
          </ul>
        </li>

		
		
		
		
		
		
		
		
		
		
		
		
  </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  