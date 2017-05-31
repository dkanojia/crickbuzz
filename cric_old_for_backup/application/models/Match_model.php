<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match_model extends CI_Model {


	function __construct() {
        parent::__construct();
		$this->load->database();
		
    }
    
	function getMatchTeams($id){
		$this->db->select('*');
		$this->db->from('matches');
		$this->db->where('intId' , $id);
		
		$query = $this->db->get();
		$data = $query->result_array();
		
		
		$str =  '<option value= "">Choose team</option><option value = "'.$data[0]['team1_id'].'" >'.$data[0]['team1_id'].'</option><option value = "'.$data[0]['team2_id'].'" >'.$data[0]['team2_id'].'</option>';
		//print_r($str);
		echo $str;
	}
	
	function getAllMatchList(){
		$this->db->select('*');
		$this->db->from('matches');
		
		$query = $this->db->get();
		$data = $query->result_array();
		$str = '';
		foreach($data as $key => $value){
				$str = $str.'<option  value = "'.$value['intId'].'">'.$value['title'].',</option>';
		}
		return $str;
	}
	
	
	function create_match($data){
		$this->db->insert('matches' , $data);
    }  

	function getAllMatches(){
		$this->db->select('*');
		$this->db->from('matches');
		
		
		$query = $this->db->get();
		$data =$query->result_array();
		$ii=1;
		$str = '';
		foreach($data as $value){
			
			$this->db->select('tour_name');
			$this->db->from('tournament');
			$this->db->where('intId' , $value['tournament_id']);
			$query1 = $this->db->get();
			$data1 =$query1->result_array();
			if(isset($data1[0]['tour_name'])){}else{$data1[0]['tour_name'] ='';}
			
			$str = $str . '<tr><td>'.$ii.'</td><td>'.$data1[0]['tour_name'].'</td><td>'.$value['title'].'</td><td>'.$value['team1_id'].'</td><td>'.$value['team2_id'].'</td><td>'.$value['overs'].'</td><td>'.$value['ground_name'].'</td><td>'.$value['city'].'</td><td>'.$value['start_date'].'</td><td><button class= "btn btn-success btn-xs" ><a href = "">EDIT</a></button><button class= "btn btn-danger btn-xs" ><a href = "">DELETE</a></button></td></tr>';
			$ii++;
		}
		
		return $str;
		
	}
	
	function ruuningMatchList(){
		$this->db->select('*');
		$this->db->from('matches');
		$this->db->where('start_date >=' , date('d-m-Y'));
		
		$query = $this->db->get();
		$data =$query->result_array();
		
		$str = '';
		foreach($data as $value){
			
			$str = $str . '<option onclick= "" id = "'.$value['intId'].'"  value = "'.$value['intId'].'">'.$value['title'].'</option>';
		}
		
		return $str;
	}
	
	
	
   	
}
