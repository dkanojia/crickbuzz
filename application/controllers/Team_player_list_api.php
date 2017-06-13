<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team_player_list_api extends CI_Controller {

    function __construct() {
        parent::__construct();
        
    }

    // function _remap($method, $params=array())
    // {
    //     $methodToCall = method_exists($this, $method) ? $method : 'index';
    //     return call_user_func_array(array($this, $methodToCall), $params);
    // }


	public function index()
	{	
		$id = $this->input->post_get('id', TRUE);
		$this->load->model('team_player_list_api_model');
		// $id = '1';
		echo  $this->team_player_list_api_model->team_player_list($id);		
	}
	
	
}
