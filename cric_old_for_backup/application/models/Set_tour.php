<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Set_tour extends CI_Model {


	function __construct() {
        parent::__construct();
		$this->load->database();
		
    }
    
	function settour($data){
		$data1 = $data;
		$this->db->insert('tournament',$data1);
    }   
	
	
   	
}
