<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        // Load url helper
    }

	
	public function submit_create_match()
	{
		$data['tournament_id'] = $this->input->post('tour_name');
		if(isset($data['tournament_id'])){}else{$data['tournament_id'] = '';}
		
		$data['team1_id'] = $this->input->post('team1');
		$data['team2_id'] = $this->input->post('team2');
		
		$data['title'] = $this->input->post('match_title');
		
		$day = $this->input->post('day');
		$month = $this->input->post('month');
		$year = $this->input->post('year');
		$hours = $this->input->post('hours');
		$mintues = $this->input->post('mintues');
		
		$country = $this->input->post('country');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		
		
		
		$this->load->model('player_model');

		$country11 =  $this->player_model->countryByCode($country);
		$data['country'] = $country11[0]['name'];
		
		$state =  $this->input->post('state');
		$this->load->model('player_model');

		$state11 =  $this->player_model->stateByCode($state);
		$data['state'] = $state11[0]['name'];
		
		$city =  $this->input->post('city');
		$this->load->model('player_model');
		$city11 =  $this->player_model->cityByCode($city);
		$data['city'] = $city11[0]['name'];
		
		
		$data['place'] = $city.','.$state.','.$country;
		$data['start_time'] = $hours.' : '.$mintues;
		$date1 = $day.'-'.$month.'-'.$year;
		$data['start_date'] = date($date1);
		
		$data['ground_name'] = $this->input->post('ground_name');
		$data['overs'] = $this->input->post('overs');
		$data['online_link'] = $this->input->post('yu_link');
		
		$this->load->model('match_model');
		$this->match_model->create_match($data);
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('success_player');
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
		
	}
	public function create()
	{
		
		
		$this->load->model('player_model');
		$data['country'] = $this->player_model->load_country();
		
		$this->load->model('tournament_model');
		$data['tournaments']= $this->tournament_model->getAllTournament();
		
		$this->load->model('team_model');
		$data['teams'] = $this->team_model->getTeamList();
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('create_match' , $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
		$this->load->view('local_js_create_match');
	}
	
	public function view()
	{
		$this->load->model('match_model');
		$data['mathces']= $this->match_model->getAllMatches();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_match' , $data );
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
		$this->load->view('local_js_create_match');
	}
	
	public function edit()
	{
		echo 'working';

		
	}
	public function update()
	{
		echo 'working';
	}
	
	public function delete1()
	{
		echo 'working';
	}
}
