<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tournament_page_api extends CI_Controller {

    function __construct() {
        parent::__construct();
        
    }

	public function index()
	{
		$this->load->model('tournament_page_api_model');
		echo  $this->tournament_page_api_model->all_home();		
	}
	
	
}
