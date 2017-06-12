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
		}else{
			$this->load->model('match_model');
			$team2_name = $this->match_model->getSecondTeamName($id,$tid);
		    $data_for_echo['toss_winning_team_name'] = $team2_name;
			
			$this->load->model('team_model');
		    $team2_name = $this->team_model->teamnameById($tid);
		    $data_for_echo['team_name'] = $team2_name;
		}

		$batsman_list = '';

		$this->load->model('team_model');
		$p_list = $this->team_model->getListOfBatsman($tid);
		$data_for_echo['team_list'] = $p_list;

		

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('live_score',$data_for_echo);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
}
