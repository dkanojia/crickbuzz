<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Players_detail_page_api_model extends CI_Model {


	function __construct() {
        parent::__construct();
		$this->load->database();
		
    }
    
	function player_detail($p_id) {
		$this->db->select('*');
		$this->db->from('players');
		$this->db->where('pid', $p_id);
		
		$query = $this->db->get();
		$data = $query->result_array();
		
		$player_detail = '';
		
		$ii = 1;
		
		foreach($data as $key => $value) {

			// if(isset($player[0]['pid'])){ $player_id = $player[0]['pid'];}else{$player[0]['pid'] = '';}

			$player_detail = $player_detail . '{ "id":"'.$value['pid'].'", "player_name":"'.$value['name'].'", "player_profile_url":"'.$value['profile_url'].'", "player_role":"'.$value['role'].'", "player_mobile":"'.$value['mobile'].'", "player_email":"'.$value['email'].'", "player_city":"'.$value['city'].'", "player_state":"'.$value['state'].'", "player_country":"'.$value['country'].'", "player_best_bat":"'.$value['best_ball'].'", "player_dob":"'.$value['dob'].'", "player_team":"'.$value['team'].'", "player_bat":"'.$value['bat'].'", "player_bowler":"'.$value['bowler'].'", "player_wktkeep":"'.$value['wktkeep'].'"},';
	    }
		
		$player_detail = rtrim( $player_detail , ',');

		$player_detail = '['.$player_detail.']';

		$data = '{"player_detail": '.$player_detail.'}';

		echo '{"response":"true" , "data": '.$data.'}';
	}
	//echo $res;
	//echo '{"response":"true" , "data": }';
}
?>