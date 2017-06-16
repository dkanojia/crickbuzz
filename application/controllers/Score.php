<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Score extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        // Load url helper
       // $this->load->helper('url');
    }


	
	public function create()
	{

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cre_tour');
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');

	}
	
	public function load_players_team($id ,$mid)
	{
		$this->load->model('score_model');
		$this->score_model->load_players_team($id , $mid);
		
		
	}
	public function load_team($id)
	{
		$this->load->model('match_model');
		$this->match_model->getMatchTeams($id);
			
	}
	
	public function view()
	{
		
		
		$this->load->model('tournament_model');
		$data['tournaments']= $this->tournament_model->getAllTournament();
		$this->load->model('score_model');
		$data['score']=$this->score_model->getscore();
		$this->load->model('match_model');
		$data['running_match'] =$this->match_model->ruuningMatchList();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_score' , $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
	
	public function update()
	{
		
		$this->load->model('score_model');
		
		$this->score_model->updatescore($data);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_score', $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
	
	public function delete1()
	{
		
		$this->load->model('get_tour');
		$data['upcoming'] =$this->get_tour->deletescore();
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_score', $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}

	public function updating()
	{
		
		$this->load->model('match_model');
		$data['mathces']= $this->match_model->getTodayMatches();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('score_updating_according_match', $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}

	public function match_parameters($id)
	{	

		$this->load->model('match_model');
		
		$data['match_name']= $this->match_model->getNameOfMatch($id);
		$data['tournament_name']= $this->match_model->getNameOfTournmament($id);
		$data['match_id'] = $id;
		$data['match_team_list'] = $this->match_model->getTeamList($id);

		$value = 1;

		$this->match_model->updateStatusOfMatch($id,$value);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('match_started', $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}

	public function set_parameter_match($id)
	{
		//getting data from player registration form
		
	    $ininig_name_value =  $this->input->post('inning_choose');
		
		if($ininig_name_value == 1)
			$ininig_name = 'Bat';
		else
			$ininig_name = 'Field';

	    $toss_winner_id =  $this->input->post('toss_winner_team');
	    $this->load->model('team_model');
	    $team11 = $this->team_model->teamnameById($toss_winner_id);
	    $data_for_echo['team_name'] = $team11;

	    $data['toss_winner_id'] = $toss_winner_id;
	    $data['match_id'] = $id;

		
		//insert in data base64_decode
		$this->load->model('match_model');
		$this->match_model->setmatch_parameter($data);
		
		$data_for_echo['message_succ'] = 'Match Parameters Successfully Set';
		$data_for_echo['match_id'] = $id;
		$data_for_echo['team_id'] = $toss_winner_id;
		$data_for_echo['ininig_name_value'] = $ininig_name_value;

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('success_match_parameter', $data_for_echo);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}

	public function live_score($id,$tid,$in_value)
	{	
		if($in_value == 1){
			$this->load->model('team_model');
		    $team1_name = $this->team_model->teamnameById($tid);
		    $data_for_echo['toss_winning_team_name'] = $team1_name;
		    $data_for_echo['team_name'] = $team1_name;
			
			$this->load->model('team_model');
			$data_for_echo['bowler_list'] = $this->team_model->getBowlerListOfSecondTeam($id,$tid);
			
		}else{
			$this->load->model('match_model');
			$team2_name = $this->match_model->getSecondTeamName($id,$tid);
		    $data_for_echo['toss_winning_team_name'] = $team2_name;
			

			$this->load->model('team_model');
		    $team2_name = $this->team_model->teamnameById($tid);
		    $data_for_echo['team_name'] = $team2_name;
			
			$data_for_echo['bowler_list'] = $this->team_model->getBowlerListOfFirstTeam($tid);
		}

		$batsman_list = '';

		$this->load->model('team_model');
		// $p_list = $this->team_model->getListOfBatsman($tid);
		$p_list = $this->team_model->getListOfBatsmanInDrpDown($tid);
		$data_for_echo['team_list'] = $p_list;
		
		$data_for_echo['m_id'] = $id;
		$data_for_echo['team_id'] = $tid;
		$data_for_echo['ininng_value'] = $in_value;

		

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('live_score',$data_for_echo);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}

	public function updating_live_score($id,$tid,$in_value)
	{	
		if($in_value == 1){
			$this->load->model('team_model');
		    $team1_name = $this->team_model->teamnameById($tid);
		    $data_for_echo['toss_winning_team_name'] = $team1_name;
		    $data_for_echo['team_name'] = $team1_name;
			
			$this->load->model('team_model');
			$data_for_echo['bowler_list'] = $this->team_model->getBowlerListOfSecondTeam($id,$tid);
			
		}else{
			$this->load->model('match_model');
			$team2_name = $this->match_model->getSecondTeamName($id,$tid);
		    $data_for_echo['toss_winning_team_name'] = $team2_name;
			
		    
			$this->load->model('team_model');
		    $team2_name = $this->team_model->teamnameById($tid);
		    $data_for_echo['team_name'] = $team2_name;
			
			$data_for_echo['bowler_list'] = $this->team_model->getBowlerListOfFirstTeam($tid);
		}



		$batsman_list = '';

		$this->load->model('team_model');
		// $p_list = $this->team_model->getListOfBatsman($tid);
		$p_list = $this->team_model->getListOfBatsmanInDrpDown($tid);
		$data_for_echo['team_list'] = $p_list;
		
		$data_for_echo['m_id'] = $id;
		$data_for_echo['team_id'] = $tid;
		$data_for_echo['ininng_value'] = $in_value;

		// Score Table
		$score_data['match_id'] = $id;
		$score_data['team_id'] =  $tid;
		$bt_id =  $this->input->post('batsman_list');
		
		$score_data['player_id'] =  $bt_id;
		$score_data['inning'] =  $in_value;
		
		$over =  $this->input->post('quant[2]');
		$score_data['over'] = $over;

		$ball_no = $this->input->post('quant[1]');
		$score_data['ball'] =  $ball_no;

		$run = $this->input->post('score_value');
		$score_data['run'] = $run;

		$extra_run = $this->input->post('extra_run');
		$bowler_id = $this->input->post('bowler_list');
		$p_status = $this->input->post('p_staus_name');

		$is_six = 0;
		$is_four = 0;
		$wicket = 0;
		$is_catch = 0;
		$is_stump = 0;
		$is_catch = 0;
		$is_run_out = 0;

		$four_count = 0;
		$six_count = 0;

		if($run == 6){
			$is_six = 1;
			$six_count = 1;
		}
		elseif($run == 4){
			$is_four = 1;
			$four_count = 1;
		}elseif($run == 0){

		}

		$score_data['is_six'] =  $is_six;
		$score_data['is_four'] =  $is_four;
		$score_data['wicket'] =  $wicket;
		$score_data['is_catch'] =  $is_catch;
		$score_data['is_stump'] =  $is_stump;
		$score_data['is_run_out'] =  $is_run_out;

		$this->load->model('score_model');
	    $this->score_model->setscore($score_data);

	    $player_score = $this->score_model->getPlayerScore($bt_id);

		// // Batsman Score
		$bt_score_data['player_id'] =  $bt_id;
		$bt_score_data['match_id'] =  $id;
		$bt_score_data['run'] =  $run;
		$bt_score_data['ball'] =  1;
		$bt_score_data['four_count'] =  $four_count;
		$bt_score_data['six_count'] =  $six_count;

		$this->score_model->setPlayerScore($player_score,$bt_score_data);

		$this->score_model->getBowlerScore($bowler_id);

		// // Bowler Score
		if($p_status == 1){
			$wicket = 1;
		}else{
			$wicket = 0;
		}

		// $economy_rate = 0;
		$hattrick_count = 0;

		$bw_score_data['player_id'] =  $bowler_id;
		$bw_score_data['match_id'] =  $id;
		$bw_score_data['wicket'] =  $wicket;
		$bw_score_data['over'] =  $over;
		$bw_score_data['ball'] =  $ball_no;
		$bw_score_data['economy_rate'] =  $run;
		$bw_score_data['hattrick_count'] =  $hattrick_count;

		$this->score_model->setBowlerScore($player_score, $bw_score_data);

		// Filder Score
		// $f_score_data['player_id'] =  $this->input->post();
		// $f_score_data['match_id'] =  $this->input->post();
		// $f_score_data['total_catches'] =  $this->input->post();
		// $f_score_data['total_run_out'] =  $this->input->post();



		// Match Score 
		// $mtch_score_data['id'] =  $this->input->post();
		// $mtch_score_data['match_id'] =  $this->input->post();
		// $mtch_score_data['team_id'] =  $this->input->post();
		// $mtch_score_data['team_id'] =  $this->input->post();




		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('updating_live_score',$data_for_echo);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
}
