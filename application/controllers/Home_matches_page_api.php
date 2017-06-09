<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_matches_page_api extends CI_Controller {

    function __construct() {
        parent::__construct();
        
    }

	public function index()
	{
		$this->load->model('home_matches_page_api_model');
		echo  $this->home_matches_page_api_model->all_home();		
	}
	
	
}
