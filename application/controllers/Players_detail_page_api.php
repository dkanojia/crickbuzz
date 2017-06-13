<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Players_detail_page_api extends CI_Controller {

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
        $this->load->model('players_detail_page_api_model');
		echo  $this->players_detail_page_api_model->player_detail($id);		
	}
	
	
}
