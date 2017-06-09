<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match_team_list_api_model extends CI_Model {


	function __construct() {
        parent::__construct();
		$this->load->database();
		
    }
    
	function match_team_list($m_id) {
		$this->db->select('*');
		$this->db->from('matches');
		$this->db->where('intId',$m_id);
		
		$query = $this->db->get();
		$data = $query->result_array();
		
		$first_team_detail = '';
		$second_team_detail = '';
		
		foreach($data as $key => $value) {
			$team1_id = $value['team1_id'];
			$team2_id = $value['team2_id'];
			$start_date = $value['start_date'];
			$end_date = $value['end_date'];
			$start_time = $value['start_time'];
			$end_time = $value['end_time'];
			$ground_name = $value['ground_name'];
			$tournament_id = $value['tournament_id'];
			$overs = $value['overs'];
			$place = $value['place'];
			$status = $value['status'];

			$this->db->select('*');
			$this->db->from('team');
			$this->db->where('tid' , $team1_id);
			$query1 = $this->db->get();
			$team1 = $query1->result_array();
			
			
			$this->db->select('*');
			$this->db->from('team');
			$this->db->where('tid' , $team2_id);
			$query11 = $this->db->get();
			$team2 = $query11->result_array();
			
			$start_date1 =  strtotime($start_date.' '.$start_time);
			$end_date1 =  strtotime($end_date.' '.$end_time);
			
			
			if(isset($team1[0]['tid'])){ $team1_id = $team1[0]['tid'];}else{$team1[0]['tid'] = '';}
			if(isset($team1[0]['team_name'])){ $team1_name = $team1[0]['team_name'];}else{$team1[0]['team_name'] = '';}
			if(isset($team1[0]['team_logo'])){$team1_logo = $team1[0]['team_logo'];}else{$team1[0]['team_logo'] = '';}
			if(isset($team1[0]['country'])){$team1_country = $team1[0]['country'];}else{$team1[0]['country'] = '';}
			if(isset($team1[0]['state'])){$team1_state = $team1[0]['state'];}else{$team1[0]['state'] = '';}
			if(isset($team1[0]['city'])){$team1_city = $team1[0]['city'];}else{$team1[0]['city'] = '';}
			if(isset($team1[0]['captain'])){$team1_captain = $team1[0]['captain'];}else{$team1[0]['captain'] = '';}
			if(isset($team1[0]['vice_captain'])){$team1_vice_captain = $team1[0]['vice_captain'];}else{$team1[0]['vice_captain'] = '';}
			
			if(isset($team2[0]['team_name'])){$team2_name = $team2[0]['team_name'];}else{$team2[0]['team_name'] = '';}
			if(isset($team2[0]['team_logo'])){$team2_logo = $team2[0]['team_logo'];}else{$team2[0]['team_logo'] = '';}
			if(isset($team2[0]['team_logo'])){$team2_logo = $team2[0]['team_logo'];}else{$team2[0]['team_logo'] = '';}
			if(isset($team2[0]['country'])){$team2_country = $team2[0]['country'];}else{$team2[0]['country'] = '';}
			if(isset($team2[0]['state'])){$team2_state = $team2[0]['state'];}else{$team2[0]['state'] = '';}
			if(isset($team2[0]['city'])){$team2_city = $team1[0]['city'];}else{$team2[0]['city'] = '';}
			if(isset($team2[0]['captain'])){$team2_captain = $team2[0]['captain'];}else{$team2[0]['captain'] = '';}
			if(isset($team2[0]['vice_captain'])){$team2_vice_captain = $team2[0]['vice_captain'];}else{$team2[0]['vice_captain'] = '';}

			$t1_id = $team1[0]['tid'];
			$t2_id = $team2[0]['tid'];

			$first_team_detail = $first_team_detail . '{ "team_id":"'.$team1[0]['tid'].'", "team_name":"'.$team1[0]['team_name'].'", "team_logo":"'.$team1[0]['team_logo'].'", "captain":"'.$team1[0]['captain'].'", "vice_captain":"'.$team1[0]['vice_captain'].'", "country":"'.$team1[0]['country'].'", "state":"'.$team1[0]['state'].'", "city":"'.$team1[0]['city'].'"},';				

			$second_team_detail = $second_team_detail . '{ "team_id":"'.$team2[0]['tid'].'", "team_name":"'.$team2[0]['team_name'].'", "team_logo":"'.$team2[0]['team_logo'].'", "captain":"'.$team2[0]['captain'].'", "vice_captain":"'.$team2[0]['vice_captain'].'", "country":"'.$team2[0]['country'].'", "state":"'.$team2[0]['state'].'", "city":"'.$team2[0]['city'].'"},';
	    }
		
		$first_team_detail = rtrim( $first_team_detail , ',');
		$second_team_detail = rtrim( $second_team_detail , ',');

		$first_team_detail = '['.$first_team_detail.']';
		$second_team_detail = '['.$second_team_detail.']';
	
		$data = '{"team1": '.$first_team_detail.' , "team2": '.$second_team_detail.'}';
		echo '{"response":"true" , "data": '.$data.'}';
	}
	//echo $res;
	//echo '{"response":"true" , "data": }';
}
?>