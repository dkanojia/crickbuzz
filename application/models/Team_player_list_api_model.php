<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team_player_list_api_model extends CI_Model {


	function __construct() {
        parent::__construct();
		$this->load->database();
		
    }
    
	function team_player_list($t_id) {
		$this->db->select('*');
		$this->db->from('team_players');
		$this->db->where('team_id', $t_id);
		
		$query = $this->db->get();
		$data = $query->result_array();
		
		$player_list = '';
		$ii = 1;
		foreach($data as $key => $value) {
			$id = $value['intId'];
			$player_id = $value['player_id'];
			$team_id = $value['team_id'];

			$this->db->select('*');
			$this->db->from('players');
			$this->db->where('pid' , $player_id);
			$p_query = $this->db->get();
			$player = $p_query->result_array();
						
			if(isset($player[0]['pid'])){ $player_id = $player[0]['pid'];}else{$player[0]['pid'] = '';}
			if(isset($player[0]['name'])){ $player_name = $player[0]['name'];}else{$player[0]['name'] = '';}
			if(isset($player[0]['profile_url'])){ $player_name = $player[0]['profile_url'];}else{$player[0]['profile_url'] = '';}

			$img_src = "http://".getenv('HTTP_HOST')."/cric/public/profile_img/".$player[0]['name'].'/'.$player[0]['profile_url'];


			$player_list = $player_list . '{ "player_id":"'.$player[0]['pid'].'", "player_name":"'.$player[0]['name'].'" , "player_image":"'.$img_src.'"},';
			$ii++;
	    }
		
		$player_list = rtrim( $player_list , ',');
		$player_list = '['.$player_list.']';

		// $data = '{"player_list": '.$player_list.'}';
		echo '{"response":"true" , "player_list": '.$player_list.'}';
	}
}
?>