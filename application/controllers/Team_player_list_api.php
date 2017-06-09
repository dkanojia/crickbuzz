<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team_player_list_api extends CI_Controller {

    function __construct() {
        parent::__construct();
        
    }

	public function index()
	{	
		$this->load->model('team_player_list_api_model');
		$id = '1';
		echo  $this->team_player_list_api_model->team_player_list($id);		
	}
	
	
}
