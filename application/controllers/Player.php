<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        // Load url helper
       // $this->load->helper('url');
    }


	
	
	public function create()
	{
		$this->load->model('player_model');
		$data['country'] = $this->player_model->load_country();
		$data['team'] = $this->player_model->load_team();
	

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('create_player' , $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs'); 
	}
	
	
	public function edit_player_detail1($id)
	{
		 //echo '<script>alert("called")</script>';
		 // $data['country'] =  $this->input->post('country');
		 // $data['state'] =  $this->input->post('state');
		 // $data['city'] =  $this->input->post('city');
		
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
		 
		 $data['mobile'] =  $this->input->post('mobile');
		 $data['email'] =  $this->input->post('email');
		 $this->load->model('player_model');


		 
		 $this->player_model->edit_detail1($id , $data);
		 $this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('success_player');
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
		 
		
	}
	public function edit_player_detail($id)
	{
		
		 $data['name'] =  $this->input->post('name');
		 $data['battingStyle'] =  $this->input->post('battingStyle');
		 $data['bowlingStyle'] =  $this->input->post('bowlingStyle');
		 //echo '<script>alert("called")</script>';
		 $this->load->model('player_model');
		 $this->player_model->edit_detail($id , $data );
		 
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('success_player');
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
		
	}
	
	
	public function edit_photo($id , $name)
	{
		$name = urldecode($name);
		$name = stripcslashes($name);
		// echo '<script>alert($name)</script>';
		$photo_url =  $_FILES['userfile']['name'];
		//folder create if not exist 
	$dir_ck = "./public/profile_img/".$name;
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
					$this->load->model('player_model');
					$this->player_model->updateplayer_photo($id, $photo_url);
					
							$this->load->view('header');
							$this->load->view('sidebar');
							$this->load->view('success_player');
							$this->load->view('rightsidebar');
							$this->load->view('footer');
							$this->load->view('globaljs'); 
					//$data = array('upload_data' => $this->upload->data());
					//$this->load->view('upload_success');
				}
				else
				{
				$error = array('error' => $this->upload->display_errors());
				echo '<script>alert("Operation failed , try agian")</script>';
				$this->load->view('edit_player');
				}  
        
		
	}
	
	
	
	
	public function player_create_submit()
	{
		$this->load->helper('url');

	//getting data from player registration form
	
    $data['name'] =  $this->input->post('username');
    $data['role'] =  $this->input->post('role');
    $data['email'] =  $this->input->post('email');
    $data['mobile'] =  $this->input->post('mobile');
    $data['profile_url'] =  $_FILES['userfile']['name'];
    $data['dob'] =  $this->input->post('dob');
    $data['team'] =  $this->input->post('team');
	
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
	///echo '<script>alert("'.(($city11[0]['name'])).'")</script>';

    $data['bat'] =  $this->input->post('bat');
    $data['bowler'] =  $this->input->post('bowl');
    if($this->input->post('wktkeep') != null){
		 $data['wktkeep'] = $this->input->post('wktkeep');
	}else{
		$data['wktkeep']   =0;
	}
	
	
	//folder create if not exist 
	$user_name = $data['name'];
	$dir_ck = "./public/profile_img/".$user_name;
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
					$this->load->model('player_model');
					$this->player_model->setplayer($data);
						$data['message_succ'] = 'player successfully registered';

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
				$this->load->view('create_player', $error);
				}  
        
	
	
	
	
	
	
		
	
	
	
		
	}
	
	public function edit($id){
		$this->load->model('player_model');
		$data['country'] = $this->player_model->load_country();
		$data['player'] = $this->player_model->edit_player($id);
		
		
		
		
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('edit_player', $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs' , $data);
		$this->load->view('local_js_edit_player');
		
	}
	
	
	public function view()
	{
		
		$this->load->model('player_model');
		$data['players'] =$this->player_model->getplayer();
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_player', $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
		$this->load->view('local_js_view_player');
	}
	
	public function update()
	{
		
		$this->load->model('player_model');
		$data['upcoming'] =$this->player_model->update();
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_tour', $data['upcoming']);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
	
	public function delete1($id)
	{
		
		$this->load->model('player_model');
		$data['delete1'] =$this->player_model->deleteplayer($id);
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('success_player', $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
		
	public function load_state($country)
	{
		//echo '<script>alert("'.$country.'")</script>';
		$this->load->model('player_model');
		$data['states'] = $this->player_model->fet_state($country);
		$test = $data['states'];
		
		echo $test;
		//return $test;
	}
	
	public function player_by_name($name)
	{
		//echo '<script>alert("caller")</script>';

		//echo '<script>alert("'.$name.'")</script>';

		$this->load->model('player_model');
		$data['ajax_res'] =$this->player_model->ajax_name($name);
		$res = $data['ajax_res'];

		return $res;
	}
	
	public function player_by_city($city)
	{
		//echo '<script>alert("caller")</script>';

		$this->load->model('player_model');
		$data['ajax_res'] =$this->player_model->ajax_city($city);
		$res = $data['ajax_res'];
		//echo '<script>alert("'.$res.'")</script>';
		echo $res;
	}
	
	public function player_by_mobile($mobile)
	{
		$this->load->model('player_model');
		$data['ajax_res'] =$this->player_model->ajax_mobile($mobile);
		$res = $data['ajax_res'];
		//echo '<script>alert("'.$res.'")</script>';

		echo $res;

	}
	
	public function load_city($state)
	{
		//echo '<script>alert("'.$country.'")</script>';
		$this->load->model('player_model');
		$data['city'] = $this->player_model->fet_city($state);
		$test = $data['city'];
		echo $test;
		//return $test;
	}
	

	
}
