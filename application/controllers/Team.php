<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

    function __construct() {
       parent::__construct();
        
    }

	
	public function add_player_ajax_search_name($name){
		$this->load->model('team_model');
		$this->team_model->ajax_search_name($name);
		
		
		
	}
	
	public function add_player_ajax_search_city($city){
		$this->load->model('team_model');
		$this->team_model->ajax_search_city($city);
	}
	
	public function add_player_ajax_search_mobile($mobile){
		$this->load->model('team_model');
		$this->team_model->ajax_search_mobile($mobile);
	}
	
	public function add_players()
	{
		$this->load->model('team_model');
		$data['player_list'] = $this->team_model->add_players();
		// $data['team_list'] = $this->team_model->getTeamPlayer($id);
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('add_players' , $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
		$this->load->view('local_js_add_players');
		
	}
	
	
	public function create_team_submit()
	{
		
		$data['team_logo'] =  $_FILES['userfile']['name'];

		$team=  $this->input->post('team');
		$country=  $this->input->post('country');
		$state=  $this->input->post('state');
		$city=  $this->input->post('city');
		
		$country=  $this->input->post('country');
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
		
		
		$data['team_name'] = $team;
		
		
		
		
		
		
		
		//folder create if not exist 
	$dir_ck = "./public/team_logo/".$team;
	if (!file_exists($dir_ck)) {
		mkdir($dir_ck, 0777, true);
	}
	
	//image upload code here
	   $config =  array(
                  'upload_path'     => $dir_ck,
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'overwrite'       => TRUE,
                  'max_size'        => "2048000",  // Can be set to particular file size
                  'max_height'      => "768",
                  'max_width'       => "1024"  
                );    
				$this->load->library('upload', $config);
				if($this->upload->do_upload())
				{
					//insert in data base64_decode
						$this->load->model('team_model');
						$this->team_model->create_team($data);
						$data['message_succ'] = 'team successfully registered';

							$this->load->view('header');
							$this->load->view('sidebar');
							$this->load->view('success_player', $data);
							$this->load->view('rightsidebar');
							$this->load->view('footer');
							$this->load->view('globaljs');
					//$data = array('upload_data' => $this->upload->data());
					//$this->load->view('upload_success');
				}
				else
				{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('error');
				}  
       
	}
	
	public function aj_remove_player_from_team($id , $team_id )
	{
		$this->load->model('team_model');
		$this->team_model->delete_from_team($id , $team_id);
	}
	
	public function aj_add_team_player($id , $team_id)
	{
		$this->load->model('team_model');
		$this->team_model->add_team_player($id,$team_id);
	}
	
	public function create()
	{
		$this->load->model('player_model');
		$data['country'] = $this->player_model->load_country();
		$data['players'] = $this->player_model->get_all_player_list();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('create_team' , $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
		$this->load->view('local_js_create_team');
		
	}
	
	public function edit($id)
	{
		$this->load->model('team_model');
		$data['team'] = $this->team_model->getteam();
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('edit_team', $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
		
	}
	
	public function teamAlreadyP($id)
	{
	
		$this->load->model('team_model');
		$this->team_model->alreadyInTeamPList($id);
		
	
	}
	
	public function view()
	{
		
		$this->load->model('team_model');
		$data['team'] = $this->team_model->getteam();
		$data['team_list'] = $this->team_model->team_list();
		
		
		
		$data['players'] =$this->team_model->getAllPlayerList();
		$this->load->view('globaljs');
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_team', $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
	}
	
	public function update()
	{
		
		$this->load->model('team_model');
		///$this->model->updateteam();

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_tour');
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
	
	public function ajax_add_in_team($id){
		$this->load->model('team_model');
		$this->team_model->add_ajax_team($id);
	}
	
	public function ajax_make_caption($id){
		$this->load->model('team_model');
		$this->team_model->add_ajax_caption($id);
	}
	
	public function ajax_make_vicecaption($id){
		$this->load->model('team_model');
		$this->team_model->add_ajax_vicecaption($id);
	}
	
	public function delete1()
	{
		
		$this->load->model('team_model');
		//$this->load->model('team');

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_tour');
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
}
