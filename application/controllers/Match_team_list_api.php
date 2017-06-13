<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match_team_list_api extends CI_Controller {

    function __construct() {
        parent::__construct();
        
    }

    // function _remap($method, $params=array())
    // {
    //     $methodToCall = method_exists($this, $method) ? $method : 'index';
    //     return call_user_func_array(array($this, $methodToCall), $params);
    // }

	public function index($id)
	{	
		$id = $this->input->post_get('id', TRUE);
		$this->load->model('match_team_list_api_model');
		// $id = '15';
		echo  $this->match_team_list_api_model->match_team_list($id);		
	}
	
	
}
