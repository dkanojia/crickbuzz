<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	 
	 
    function __construct() {
        parent::__construct();
        
        // Load url helper
       // $this->load->helper('url');
    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('main');
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
}
