<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tournament_match_list_api_model extends CI_Model {


	function __construct() {
        parent::__construct();
		$this->load->database();
		
    }
    
	function all_match($tr_id) {
		$this->db->select('*');
		$this->db->from('matches');
		$this->db->where('tournament_id',$tr_id);
		
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
			if(isset($team2[0]['team_logo'])){$team2_logo = $team2[0]['team_logo'];}else{$team2[0]['team_logo'] = '';}

			if(isset($tourna[0]['tour_name'])){$tour_name = $tourna[0]['tour_name'];}else{$tourna[0]['tour_name'] = '';}
			
			// $city.','.$state.','.$country;
			$city_id = '';
			$state_id = '';
			$country_id = '';
			
			if(isset($place) && $place != null){ 
				$place_arr [] = explode(",", $place);
				
				foreach ($place_arr as $p_value) {
					$city_id = $p_value[0];
					$state_id = $p_value[1];
					$country_id = $p_value[2];
				}
			}

			
			$this->db->select('*');
			$this->db->from('cities');
			$this->db->where('id' , $city_id);
			$city_query = $this->db->get();
			$city_result = $city_query->result_array();

			$this->db->select('*');
			$this->db->from('states');
			$this->db->where('id' , $state_id);
			$state_query = $this->db->get();
			$state_result = $state_query->result_array();

			$this->db->select('*');
			$this->db->from('countries');
			$this->db->where('id' , $country_id);
			$country_query = $this->db->get();
			$country_result = $country_query->result_array();

			$city_name = '';
			if(isset($city_result[0]['name'])){ 
				$city_name = $city_result[0]['name'];
			}else{
				$city_name = '';
			}

			$state_name = '';
			if(isset($state_result[0]['name'])){ 
				$state_name = $state_result[0]['name'];
			}else{
				$state_name = '';
			}

			$country_name = '';
			if(isset($country_result[0]['name'])){ 
				$country_name = $country_result[0]['name'];
			}else{
				$country_name = '';
			}

			$place = $city_name.','.$state_name.','.$country_name;


			// if($start_date1 < time() && $end_date1 > time()){		
			if(($status == 1) || ($status == 2) ){		
				$ongoing = $ongoing . '{ "start_date":"'.$start_date.'"  , "end_date":"'.$end_date.'"  , "start_time" : "'.$start_time.'" , "end_time" : "'.$end_time.'" ,"status":"ongoing" ,  "ground_name":"'.$ground_name.'" , "overs":"'.$overs.'" , "place":"'.$place.'" , "tournament_name":"'.$tourna[0]['tour_name'].'" ,"team1_name":"'.$team1[0]['team_name'].'" ,"team2_name":"'.$team2[0]['team_name'].'" ,"team1_logo":"'.$team1[0]['team_logo'].'" ,"team2_logo":"'.$team2[0]['team_logo'].'", "description":"'.$value['description'].'", "banner_image":"'.$value['banner_image'].'", "title":"'.$value['title'].'"},';				

			}elseif($status == 0){
				
				$upcoming = $upcoming . '{ "start_date":"'.$start_date.'"  , "end_date":"'.$end_date.'"  , "start_time" : "'.$start_time.'" , "end_time" : "'.$end_time.'" ,"status":"upcoming" ,  "ground_name":"'.$ground_name.'" , "overs":"'.$overs.'" , "place":"'.$place.'" , "tournament_name":"'.$tourna[0]['tour_name'].'" ,"team1_name":"'.$team1[0]['team_name'].'" ,"team2_name":"'.$team2[0]['team_name'].'" ,"team1_logo":"'.$team1[0]['team_logo'].'" ,"team2_logo":"'.$team2[0]['team_logo'].'", "description":"'.$value['description'].'", "banner_image":"'.$value['banner_image'].'", "title":"'.$value['title'].'"},';
			}elseif($status == 4){
				$past = $past . '{ "start_date":"'.$start_date.'"  , "end_date":"'.$end_date.'"  , "start_time" : "'.$start_time.'" , "end_time" : "'.$end_time.'" ,"status":"highlights" ,  "ground_name":"'.$ground_name.'" , "overs":"'.$overs.'" , "place":"'.$place.'" , "tournament_name":"'.$tourna[0]['tour_name'].'" ,"team1_name":"'.$team1[0]['team_name'].'" ,"team2_name":"'.$team2[0]['team_name'].'" ,"team1_logo":"'.$team1[0]['team_logo'].'" ,"team2_logo":"'.$team2[0]['team_logo'].'", "description":"'.$value['description'].'", "banner_image":"'.$value['banner_image'].'", "title":"'.$value['title'].'"},';
			}			
	    }
		
		$ongoing = rtrim( $ongoing , ',');
		$upcoming = rtrim( $upcoming , ',');
		$past = rtrim( $past , ',');

		$ongoing = '['.$ongoing.']';
		$upcoming = '['.$upcoming.']';
		$past = '['.$past.']';
	
		$data = '{"highlights": '.$past.' , "ongoing": '.$ongoing.' , "upcoming": '.$upcoming.'}';
		echo '{"response":"true" , "data": '.$data.'}';
	}
	//echo $res;
	//echo '{"response":"true" , "data": }';
}
?>