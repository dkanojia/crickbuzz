<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tournament_model extends CI_Model {


	function __construct() {
        parent::__construct();
		$this->load->database();
		
    }
    
	function create_tour($data){
		$this->db->insert('tournament' , $data);
    }   
	
	
	
	
	function getAllTournament(){
		$this->db->select('*');
		$this->db->from('tournament');
		
		$query= $this->db->get();
		$data =  $query->result_array();
		
		$str = '';
		foreach($data as $value){
			$str = $str . '<option value= "'.$value['intId'].'">'.$value['tour_name'].'</option>';
		}
		
		return $str;
	}
	
	
	function updatescore(){
		//$this->db->
		$data = ''; 
		return $data;
		
    } 
	function past(){
		$this->db->select('*');
		$this->db->from('tournament');
		$query = $this->db->get();
		$data = $query->result_array();
		
		$str = '';
		$ii = 1;
		foreach($data as $value){
			$start_date1 = $value['tour_start_date'];
			$end_date1 = $value['tour_end_date'];
			//echo '<script>alert("'.$start_date1.'")</script>';
			
			$start_date1= (strtotime($start_date1));
			$end_date1= (strtotime($end_date1));
			//echo '<script>alert("'.$start_date1.'")</script>';

			if($end_date1 < time()){
					$str = $str. '<tr><td>'.$ii.'</td><td>'.$value['tour_name'].'</td><td>'.$value['tour_sponser'].'</td><td>'.$value['tour_start_date'].'</td><td>'.$value['tour_end_date'].'</td><td>'.$value['teams'].'</td><td><button class= "btn btn-success btn-xs"><a href= "'.base_url().$value['intId'].'" >EDIT</a></button><button class= "btn btn-danger btn-xs"><a href= "'.base_url().$value['intId'].'" >DELETE</a></button></td></tr>';
			$ii++;

			}
				 //echo ( '<script>alert("'.($str).'")</script>');
		}
		// echo ( '<script>alert("'.($str).'")</script>');

		return $str;
		
		
	}
	function upcoming(){
		$this->db->select('*');
		$this->db->from('tournament');
		$query = $this->db->get();
		$data = $query->result_array();
		
		$str = '';
		$ii = 1;

		foreach($data as $value){
			$start_date1 = $value['tour_start_date'];
			$end_date1 = $value['tour_end_date'];
			//echo '<script>alert("'.$start_date1.'")</script>';
			$start_date1= (strtotime($start_date1));
			$end_date1= (strtotime($end_date1));
			
			//echo '<script>alert("'.$start_date1.'")</script>';

			
			if($start_date1 > time() ){
				
					$str = $str. '<tr><td>'.$ii.'</td><td>'.$value['tour_name'].'</td><td>'.$value['tour_sponser'].'</td><td>'.$value['tour_start_date'].'</td><td>'.$value['tour_end_date'].'</td><td>'.$value['teams'].'</td><td><button class= "btn btn-success btn-xs"><a href= "'.base_url().$value['intId'].'" >EDIT</a></button><button class= "btn btn-danger btn-xs"><a href= "'.base_url().$value['intId'].'" >DELETE</a></button></td></tr>';
			$ii++;

			}
					 
		}

		return $str;

		
	}
	function running(){
		$this->db->select('*');
		$this->db->from('tournament');
	
		$query = $this->db->get();
		$data = $query->result_array();
		
		$str = '';
		$ii = 1;
		foreach($data as $value){
			$start_date1 = $value['tour_start_date'];
			$end_date1 = $value['tour_end_date'];
			//echo '<script>alert("'.$start_date1.'")</script>';
			$start_date1= (strtotime($start_date1));
			$end_date1= (strtotime($end_date1));
			//echo '<script>alert("'.$start_date1.'")</script>';

			if($start_date1 < time() && $end_date1 > time()){
				$str = $str. '<tr><td>'.$ii.'</td><td>'.$value['tour_name'].'</td><td>'.$value['tour_sponser'].'</td><td>'.$value['tour_start_date'].'</td><td>'.$value['tour_end_date'].'</td><td>'.$value['teams'].'</td><td><button class= "btn btn-success btn-xs"><a href= "'.base_url().$value['intId'].'" >EDIT</a></button><button class= "btn btn-danger btn-xs"><a href= "'.base_url().$value['intId'].'" >DELETE</a></button></td></tr>';
						$ii++;

			}
					// echo ( '<script>alert("'.($str).'")</script>');
		}
		 //echo ( '<script>alert("'.($str).'")</script>');
		return $str;
	}
	
	
	function deletescore(){
		
    } 
	
   	
}
