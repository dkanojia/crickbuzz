<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Players_detail_page_api extends CI_Controller {

    function __construct() {
        parent::__construct();
        
    }

	public function index()
	{
		$this->load->model('players_detail_page_api_model');
		$id = 34;
		echo  $this->players_detail_page_api_model->player_detail($id);		
	}
	
	
}
