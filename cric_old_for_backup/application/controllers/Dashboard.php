<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        // Load url helper
    }

	

	public function index()
	{
		$data = '';
		$this->load->model('score_model');
		$data['matches']= $this->score_model->updatescore($data);
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');	}
}
