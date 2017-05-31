<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class get_tour extends CI_Model {


	function __construct() {
        parent::__construct();
		$this->load->database();
		
    }
    
	function upcoming(){
 
		
        $this->db->select ( '*' );
        $this->db->from ( 'tournament' );
        $this->db->where ( 'tour_end_date >', date('d-m-Y') );

        $query = $this->db->get ();
		return $query->result_array();
    }   
	
	function running(){
 
        $this->db->select ( '*' );
        $this->db->from ( 'tournament' );
        $this->db->where ( 'tour_end_date <', date('d-m-Y') );

        $query = $this->db->get ();
		return $query->result_array();
    }    
	function past(){
		$this->db->select ( '*' );
        $this->db->from ( 'tournament' );
        $this->db->where ( 'tour_end_date >', date('d-m-Y') );

        $query = $this->db->get ();
		return $query->result_array();
    } 
   	
}
