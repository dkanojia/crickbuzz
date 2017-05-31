<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Score_model extends CI_Model {


	function __construct() {
        parent::__construct();
		$this->load->database();
		
    }
    
	function ruuningMatchList(){
		
		$this->db->select('*');
		$this->db->from('matches');
		$query = $this->db->get();
		$data =  $query->result_array();
		$str = '';
		foreach($data as $value){
			$start_date = $value['start_date'];
			$end_date = $value['end_date'];
			
			$date = date('d-m-Y');
			$tim = (strtotime($date));
			$tim1 = (strtotime($start_date));
			$tim2 = (strtotime($end_date));
			
			if($tim1 <= $tim && $tim2 > $tim){
				$str = $str . '<option value ="'.$value['intId'].'">'.$value['title'].'</option>';
			}
			
		}
		return $str;
	}
	
	function load_players_team($id , $mid){
		$this->db->select('*');
		$this->db->from('matches');
		$this->db->where('intId' , $mid);

		$query = $this->db->get();
		$data =  $query->result_array();
		$team1 = $data[0]['team1_id'];
		
		if($team1 == $id){
			$bats_team = $team1;
			$ball_team = $data[0]['team2_id'];
		}else{
			$bats_team = $data[0]['team2_id'];
			$ball_team = $team1;
		}
		
		$this->db->select('*');
		$this->db->from('team');
		$this->db->where('team_name' , $bats_team);
		
		$query1 = $this->db->get();
		$data1 =  $query1->result_array();
		
		$this->db->select('*');
		$this->db->from('team');
		$this->db->where('team_name' , $ball_team);
		
		$query11 = $this->db->get();
		$data11 =  $query11->result_array();
		
		$bats_id = $data1[0]['tid'];
		$ball_id = $data11[0]['tid'];
		
		
		$this->db->select('*');
		$this->db->from('team_players');
		$this->db->where('team_id' , $bats_id);
		
		$query_bats_data = $this->db->get();
		$bats_data =  $query_bats_data->result_array();
		
		
		$this->db->select('*');
		$this->db->from('team_players');
		$this->db->where('team_id' , $ball_id);
		
		$query_ball_data = $this->db->get();
		$ball_data =  $query_ball_data->result_array();
		
		foreach($bats_data as $bats_data_vlaue){
				
		$this->db->select('*');
		$this->db->from('team_players');
		$this->db->where('team_id' , $ball_id);
		
		$query_ball_data = $this->db->get();
		$ball_data =  $query_ball_data->result_array();
		}
		
		foreach($ball_data as $ball_data_value){
				
		$this->db->select('*');
		$this->db->from('team_players');
		$this->db->where('team_id' , $ball_id);
		
		$query_ball_data = $this->db->get();
		$ball_data =  $query_ball_data->result_array();
		
		}
		
		
	}
	
	function runningTeamList($id){
		
		$this->db->select('*');
		$this->db->from('matches');
		$query = $this->db->get();
		$data =  $query->result_array();
		$str = '';
		
		foreach($data as $value1){
			
			
			
		}
		
		$ii= 0;
		foreach($data as $value){
			$start_date = $value['start_date'];
			$end_date = $value['end_date'];
			
			$date = date('d-m-Y');
			$tim = (strtotime($date));
			$tim1 = (strtotime($start_date));
			$tim2 = (strtotime($end_date));
			
			if($tim1 <= $tim && $tim2 > $tim){
				
				$team1_id[$ii] = $value['team1_id'];
				$team2_id[$ii] = $value['team2_id'];
				
				
			}
			$ii++;
		}
		return $str;
	}
	
	
	
	function setscore($data){
		$this->db->insert('score' , $data);
    }   
	
	function getscore(){
		$this->db->select('*');
		$this->db->from('score');
		$query = $this->db->get();
		return $query->result_array();
		
		
    }   
	function updatescore(){
		//$this->db->
		$data = ''; 
		return $data;
		
    } 
	function getMatchTeams($id){
		$this->db->select('*');
		$this->db->from('matches');
		$this->db->where('intId' , $id);
		
		$query = $this->db->get();
		$data =  $query->result_array();
		
		$team1_id = $data[0]['team1_id'];
		$team2_id = $data[0]['team2_id'];
		
		
		$this->db->select('*');
		$this->db->from('team');
		$this->db->where('tid' , $team1_id);
		$query1 = $this->db->get();
		$data1 =  $query1->result_array();
		
		
		$this->db->select('*');
		$this->db->from('team');
		$this->db->where('tid' , $team2_id);
		$query2 = $this->db->get();
		$data2 =  $query2->result_array();
		
		$str  = $str . '<option value = "">Choose Team</option><option value = "'.$team2_id.'">'.$data2[0]['team_name'].'</option><option value = "'.$team1_id.'">'.$data1[0]['team_name'].'</option>';
		
	}
	function deletescore(){
		
    } 
	
   	
}
