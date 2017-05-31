<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {


	function __construct() {
        parent::__construct();
		$this->load->database();
		
    }
    
	function setuser($data){
		$this->db->insert('users' , $data);
    }   
	
	function getuser(){
		$this->db->select('*');
		$this->db->from('users');
		$query = $this->db->get();
		return $query->result_array();
		
		
    }	
	function getstate(){
		$this->db->select('*');
		//$this->db->group_by('city_state'); 
		$this->db->from('cities');
		$query = $this->db->get();
		return $query->result_array();
		
		
    }
	
	function updateuser(){
		//$this->db->
		$data = ''; 
		return $data;
		
    }
	
	function deleteuser(){
		
    } 
	
   	
}
