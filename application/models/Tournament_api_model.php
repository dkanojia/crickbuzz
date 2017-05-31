<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tournament_api_model extends CI_Model {


	function __construct() {
        parent::__construct();
		$this->load->database();
		
    }
    
	function all_home() {
		$this->db->select('*');
		$this->db->from('matches');
		
		$query = $this->db->get();
		$data = $query->result_array();
		
		$ongoing = '';
		$upcoming = '';
		$past = '';
		
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
			
			$this->db->select('*');
			$team = $this->db->from('team');
			$team = $this->db->where('tid' , $team1_id);
			$query1 = $this->db->get();
			$team1 = $query1->result_array();
			
			
			$this->db->select('*');
			$team = $this->db->from('team');
			$team = $this->db->where('tid' , $team2_id);
			$query11 = $this->db->get();
			$team2 = $query11->result_array();
			
			$this->db->select('*');
			$this->db->from('tournament');
			$this->db->where('intId' ,$tournament_id);
			$query2 = $this->db->get();
			$tourna = $query2->result_array();
			
			$start_date1 =  strtotime($start_date.' '.$start_time);
			$end_date1 =  strtotime($end_date.' '.$end_time);
			
			
			if(isset($team1[0]['team_name'])){ $team1_name = $team1[0]['team_name'];}else{$team1[0]['team_name'] = '';}
			if(isset($team2[0]['team_name'])){$team2_name = $team2[0]['team_name'];}else{$team2[0]['team_name'] = '';}
			if(isset($team1[0]['team_logo'])){$team1_logo = $team1[0]['team_logo'];}else{$team1[0]['team_logo'] = '';}
			if(isset($team2[0]['team_logo'])){$team2_logo = $team1[0]['team_name'];}else{$team2[0]['team_logo'] = '';}
			if(isset($tourna[0]['tour_name'])){$tour_name = $tourna[0]['tour_name'];}else{$tourna[0]['tour_name'] = '';}
			
			if($start_date1 < time() && $end_date1 > time()){		
				$ongoing = $ongoing . '{ "start_date":"'.$start_date.'"  , "end_date":"'.$end_date.'"  , "start_time" : "'.$start_time.'" , "end_time" : "'.$end_time.'" ,"status":"ongoing" ,  "ground_name":"'.$ground_name.'" , "overs":"'.$overs.'" , "place":"'.$place.'" , "tournament_name":"'.$tourna['tour_name'].'" ,"team1_name":"'.$team1['team_name'].'" ,"team2_name":"'.$team2['team_name'].'" ,"team1_logo":"'.$team1['team_logo'].'" ,"team2_logo":"'.$team2['team_logo'].'"},';				


			}elseif($start_date1 > time()){
				
				$upcoming = $upcoming . '{ "start_date":"'.$start_date.'"  , "end_date":"'.$end_date.'"  , "start_time" : "'.$start_time.'" , "end_time" : "'.$end_time.'" ,"status":"upcoming" ,  "ground_name":"'.$ground_name.'" , "overs":"'.$overs.'" , "place":"'.$place.'" , "tournament_name":"'.$tourna['tour_name'].'" ,"team1_name":"'.$team1['team_name'].'" ,"team2_name":"'.$team2['team_name'].'" ,"team1_logo":"'.$team1['team_logo'].'" ,"team2_logo":"'.$team2['team_logo'].'"},';
			}else{
				
				$past = $past . '{ "start_date":"'.$start_date.'"  , "end_date":"'.$end_date.'"  , "start_time" : "'.$start_time.'" , "end_time" : "'.$end_time.'" ,"status":"highlights" ,  "ground_name":"'.$ground_name.'" , "overs":"'.$overs.'" , "place":"'.$place.'" , "tournament_name":"'.$tourna[0]['tour_name'].'" ,"team1_name":"'.$team1[0]['team_name'].'" ,"team2_name":"'.$team2[0]['team_name'].'" ,"team1_logo":"'.$team1[0]['team_logo'].'" ,"team2_logo":"'.$team2[0]['team_logo'].'", "description":"'.$value['description'].'", "banner_image":"'.$value['banner_image'].'", "title":"'.$value['title'].'"},';
				
			}


			
			
			
	    }   
		
		
		$past = rtrim( $past , ',');
		$ongoing = rtrim( $ongoing , ',');
		$upcoming = rtrim( $upcoming , ',');
		$past = '['.$past.']';
	$ongoing = '['.$ongoing.']';
	$upcoming = '['.$upcoming.']';
	//echo $past;
	
	$data = '{"highlights": '.$past.' , "ongoing": '.$ongoing.' , "upcoming": '.$upcoming.'}';
	echo '{"response":"true" , "data": '.$data.'}';

   	
	}
	

	
	//echo $res;
	//echo '{"response":"true" , "data": }';
}
?>