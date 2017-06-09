<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match_team_list_api extends CI_Controller {

    function __construct() {
        parent::__construct();
        
    }

	public function index()
	{	
		$this->load->model('match_team_list_api_model');
		$id = '15';
		echo  $this->match_team_list_api_model->match_team_list($id);		
	}
	
	
}
