<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tournament_page_api_model extends CI_Model {


	function __construct() {
        parent::__construct();
		$this->load->database();
		
    }
    
	function all_home() {
		$this->db->select('*');
		$this->db->from('tournament');
		
		$query = $this->db->get();
		$data = $query->result_array();
		
		$ongoing = '';
		$upcoming = '';
		$past = '';
		$all = '';
		
		foreach($data as $key => $value) {
			$tour_id = $value['intId'];
			$tour_name = $value['tour_name'];
			$tour_banner = $value['tour_banner'];
			$tour_sponser = $value['tour_sponser'];	
			$tour_teams = $value['teams'];
			$tour_start_date = $value['tour_start_date'];
			$tour_end_date = $value['tour_end_date'];
			$tour_team_count = $value['team_count'];

			$start_date =  strtotime($tour_start_date);
			$end_date =  strtotime($tour_end_date);
			$date =  date("d-m-Y");
			$today_date = strtotime($date);

			// echo strtotime($start_date1)."</br>";
			// echo strtotime($date)."</br>";
			$img_src = "http://".getenv('HTTP_HOST')."/cric/public/team_s_banner/".$value['tour_name']."/".$value['tour_banner'];

			if(($start_date <= $today_date) && ($end_date > $today_date)){		
			// if(($status == 1) || ($status == 2) ){		
				$ongoing = $ongoing . '{ "tournament_id":"'.$tour_id.'", "start_date":"'.$tour_start_date.'"  , "end_date":"'.$tour_end_date.'" ,"status":"ongoing" , "banner_image":"'.$img_src.'", "tournament_name":"'.$tour_name.'", "tournament_sponser":"'.$tour_sponser.'", "tournament_teams":"'.$tour_teams.'"},';				

			}elseif($start_date > $today_date){
				
				$upcoming = $upcoming . '{ "tournament_id":"'.$tour_id.'", "start_date":"'.$tour_start_date.'"  , "end_date":"'.$tour_end_date.'" ,"status":"upcoming" , "banner_image":"'.$img_src.'", "tournament_name":"'.$tour_name.'", "tournament_sponser":"'.$tour_sponser.'", "tournament_teams":"'.$tour_teams.'"},';
			}elseif($end_date < $today_date){
				$past = $past . '{ "tournament_id":"'.$tour_id.'", "start_date":"'.$tour_start_date.'"  , "end_date":"'.$tour_end_date.'" ,"status":"past" , "banner_image":"'.$img_src.'", "tournament_name":"'.$tour_name.'", "tournament_sponser":"'.$tour_sponser.'", "tournament_teams":"'.$tour_teams.'"},';
			}			
	    }
		
	    // $ongoing = rtrim( $ongoing , ',');
		// $upcoming = rtrim( $upcoming , ',');
		// $past = rtrim( $past , ',');
		$all = $past.'  '.$ongoing.'  '.$upcoming ;
		$all = rtrim( $all, ',');
		$all = '['.$all.']';
	
		$data = '"all_tournament": '.$all.' ';
		echo '{"response":"true" , '.$data.'}';
	}
	//echo $res;
	//echo '{"response":"true" , "data": }';
}
?>