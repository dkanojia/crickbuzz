<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tournament_match_list_api extends CI_Controller {

    function __construct() {
        parent::__construct();
        
    }

	public function index()
	{	
		$this->load->model('tournament_match_list_api_model');
		$id = '94';
		echo  $this->tournament_match_list_api_model->all_match($id);		
	}
	
	
}
