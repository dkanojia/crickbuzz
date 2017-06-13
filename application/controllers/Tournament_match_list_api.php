<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tournament_match_list_api extends CI_Controller {

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
		$this->load->model('tournament_match_list_api_model');
		// $id = '94';
		echo  $this->tournament_match_list_api_model->all_match($id);		
	}
	
	
}
