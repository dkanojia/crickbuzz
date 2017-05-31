<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        // Load url helper
       // $this->load->helper('url');
    }

	public function submit_user_form()
	{
		
		$data['username']  = $this->input->post('username');
		$data['email']  = $this->input->post('email');
		$data['mobile']  = $this->input->post('mobile');
		$data['password']  = $this->input->post('password');
		$country  = $this->input->post('country');
		$state = $this->input->post('state');
		$city  = $this->input->post('city');
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
			
	
		
		$this->load->model('user_model');
		$this->user_model->setuser($data);
		$data['success'] = 'User created successfully!!';
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('success_player');
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
	
	public function create()
	{
		$this->load->model('user_model');
		$data['fetstate'] =$this->user_model->getstate();
		$this->load->model('player_model');
		$data['country'] = $this->player_model->load_country();
		//$this->load->model('user_model');
		
	
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('create_user' , $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
	
	public function view()
	{
		
		$this->load->model('user_model');
		$data['fetuser'] =$this->user_model->getuser();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_user', $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
	
	public function update()
	{
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_tour');
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
	
	public function delete1()
	{
		
		$this->load->model('get_tour');
		
		$data['running'] =$this->get_tour->running();
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_tour', $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
}
