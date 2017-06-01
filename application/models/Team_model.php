<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team_model extends CI_Model {


	function __construct() {
        parent::__construct();
		$this->load->database();
		
    }
    
	function delete_from_team($id, $team_id){
		 $this->db->where('team_id', $team_id);
		 $this->db->where('player_id', $id);
		if($this->db->delete('team_players') ){
			echo '1';
		}else{
			echo '0';
		}
	}
	function add_team_player($id, $team_id){
		$data['player_id']= $id;
		$data['team_id']= $team_id;
		
		$this->db->select('*');
		$this->db->from('team_players');
        $where_array = array('team_id' => $team_id, 'player_id' => $id);
		$this->db->where($where_array);
		$query_for_already_plyr = $this->db->get();
		$data_for_already_plyr =  $query_for_already_plyr->result_array();

		if($data_for_already_plyr){
			echo "0";
		}else{
			if($this->db->insert('team_players' , $data)){
				echo "1";
			}else{
				echo "0";
			}
		}
	}
	
	
	function getTeamList(){
		$this->db->select('*');
		$this->db->from('team');
		$query = $this->db->get();
		$data =  $query->result_array();
		
		return $data;
		
	}
	
	
	function create_team($data){
		$this->db->insert('team' , $data);
		$tid = $this->db->insert_id();
		return $tid;

    }   
	
	function alreadyInTeamPList($id){
		$this->db->select('*');
		$this->db->from('team_players');
		$this->db->where('team_id', $id);
		$query = $this->db->get();
		$data =  $query->result_array();
		
		$str  = '';
		$ii = 1;
		foreach($data as $key => $value){
			$pid = $value['player_id'];
			$this->db->select('*');
			$this->db->from('players');
			$this->db->where('pid', $pid);
			
			$query1 = $this->db->get();
			$data1 =  $query1->result_array();
			
			
			$str = $str . '<tr onclick = "removePl(this.id);" id = "'.$value['player_id'].'"><td>'.$ii.'</td><td>'.$data1[0]['name'].'</td><td>'.$data1[0]['role'].'</td><td>'.$data1[0]['city'].'</td></tr>';
			$ii++;
		}
		echo  $str;
	}
	
	function getAllPlayerList(){
		$this->db->select('*');
		$this->db->from('players');
		$query = $this->db->get();
		$data =  $query->result_array();
		$str  = '';
		$ii = 1;
		foreach($data as $key => $value){
			$str = $str . '<tr onclick = "addPl(this.id);" id = "'.$value['pid'].'"><td>'.$ii.'</td><td><img height = "60px" width = "60px" src= "http://'.getenv('HTTP_HOST').'/cric/public/profile_img/'.$value['name'].'/'.$value['profile_url'].'"></td><td>'.$value['name'].'</td><td>'.$value['role'].'</td><td>'.$value['mobile'].'</td><td>'.$value['city'].'</td></tr>';
			$ii++;
		}
		echo '<script>alert("'.$str.'")</script>';
		return $str;
	}
	
	function add_players(){
		$this->db->select('*');
		$this->db->from('players');
		
		$query = $this->db->get();
		$data =$query->result_array();	 
		
		$str = '';
		$ii = 1;
		foreach($data as $value){
			$str = $str . '<tr><td>'.$ii.'</td><td><img class="pprofile" src = "'.base_url().'/public/profile_img/'.$value['name'].'/'.$value['profile_url'].'"></td><td>'.$value['name'].'</td><td>'.$value['mobile'].'</td><td>'.$value['email'].'</td><td>'.$value['city'].'</td><td>'.$value['state'].'</td><td>'.$value['role'].'</td><td><button onclick= "make_dis(this.id)" id = "a'.$value['pid'].'" class = "btn btn-success btn-xs">Add</button><button onclick= "make_dis(this.id)" id = "c'.$value['pid'].'" class = "btn btn-info btn-xs">Make Caption</button><button onclick= "make_dis(this.id)" id = "v'.$value['pid'].'" class = "btn btn-warning btn-xs">Make Vice Caption</button></td></tr>';
			$ii++;
		}

		return $str;
	}
	
	
	function getteam(){
		$this->db->select('*');
		$this->db->from('team');
		
		$query = $this->db->get();
		//print_r($query);
		//echo '<script>alert("'.$query.'")</script>';

		$data = $query->result_array();
		$str = '';
		$ii =1;
		foreach($data as $value){
		//echo '<script>alert("'.$value['team_name'].'")</script>';

		$this->db->select('*');
		$this->db->from('team_players');
		
		$this->db->where('team_id', $value['tid']);
		$query_for_plyrs = $this->db->get();
		$res_plyrs = $query_for_plyrs->result_array();
		$count_i =0;
		foreach($res_plyrs as $value_count){
			$count_i++;
		}

		$str = $str . '<tr>
			<td>'.$ii.'</td>
			<td><img height= "50px" width = "60px" src = "http://'.getenv('HTTP_HOST').'/cric/public/team_logo/'.$value['team_name'].'/'.$value['team_logo'].'"></td>
			<td>'.$value['team_name'].'</td>
			<td>'.$value['captain'].'</td>
			<td>'.$value['vice_captain'].'</td>
			<td>'.$value['country'].'</td>
			<td>'.$value['state'].'</td>
			<td>'.$value['city'].'</td>
			<td>'.$count_i.'</td>
			<td>'.$value['created_on'].'</td>
			<td><button class= "btn btn-success btn-xs"><a href = "http://'.getenv('HTTP_HOST').'/cric/add_team_players/'.$value['tid'].'">VIEW</a></button><button  class= "btn btn-danger btn-xs"><a href = "'.$value['tid'].'">DELETE</a></button></td></tr>';
			$ii++;
		}
		echo '<script>alert("'.$str.'")</script>';
		return $str;
	}
	
	function getTeamPlayer($id){
		$this->db->select('*');
		$this->db->from('team_Players');
		$this->db->where('intId' , $id);
		
		
		
		$query = $this->db->get();
		$data = $query->result_array();
		
		
		$this->db->select('*');
		$this->db->from('team');
		$this->db->where('tid' , $id);
		$query1 = $this->db->get();
		$data1 = $query1->result_array();
		$cid = $data1[0]['caption'];
		$vcid = $data1[0]['vice_caption'];
		$str = '';
		$ii = 1;
		
		foreach($data as $value){
			$pid = $value['player_id'];
			
			$this->db->select('*');
			$this->db->from('players');
			$this->db->where('pid' , $pid);

			$query12 = $this->db->get();
			$data12 = $query12->result_array();
			if($data12[0]['wktkeep'] == 'wktkeep'){$wk = 'wk';}else{ $wk ='';}
			if($cid == $data12[0]['pid']){
					$str = $str . '<tr><td>'.$ii.'</td><td><img height = "60px" width = "60px" src = "http://'.getenv('HTTP_HOST').'/cric/public/profile_img/'.$data12[0]['name'].'/'.$data12[0]['profile_url'].'"></td><td>'.$data12[0]['name'].'<span style ="background-color: green;color: #fff;">vc</span><span style ="background-color: red;color: #fff;">wk</span></td><td>'.$data12[0]['mobile'].'</td><td>'.$data12[0]['role'].'</td><td>'.$data12[0]['city'].'</td><td>'.$data12[0]['bat'].'</td><td>'.$data12[0]['bowler'].'</td><td><button onclick="make_cap();" class= "btn btn-success btn-xs">make cap</button><button onclick="make_cap();" class= "btn btn-warning btn-xs">make vice cap</button></td></tr>';
			}
			elseif($vcid == $data12[0]['pid']){
$str = $str . '<tr><td>'.$ii.'</td><td><img height = "60px" width = "60px" src = "http://'.getenv('HTTP_HOST').'/cric/public/profile_img/'.$data12[0]['name'].'/'.$data12[0]['profile_url'].'"></td><td>'.$data12[0]['name'].'<span style ="background-color: green;color: #fff;">vc</span><span style ="background-color: red;color: #fff;">wk</span></td><td>'.$data12[0]['mobile'].'</td><td>'.$data12[0]['role'].'</td><td>'.$data12[0]['city'].'</td><td>'.$data12[0]['bat'].'</td><td>'.$data12[0]['bowler'].'</td><td><button onclick="make_cap();" class= "btn btn-success btn-xs">make cap</button><button onclick="make_cap();" class= "btn btn-warning btn-xs">make vice cap</button></td></tr>';				
			}else{
			
$str = $str . '<tr><td>'.$ii.'</td><td><img height = "60px" width = "60px" src = "http://'.getenv('HTTP_HOST').'/cric/public/profile_img/'.$data12[0]['name'].'/'.$data12[0]['profile_url'].'"></td><td>'.$data12[0]['name'].'<span style ="background-color: green;color: #fff;">vc</span><span style ="background-color: red;color: #fff;">wk</span></td><td>'.$data12[0]['mobile'].'</td><td>'.$data12[0]['role'].'</td><td>'.$data12[0]['city'].'</td><td>'.$data12[0]['bat'].'</td><td>'.$data12[0]['bowler'].'</td><td><button onclick="make_cap();" class= "btn btn-success btn-xs">make cap</button><button onclick="make_cap();" class= "btn btn-warning btn-xs">make vice cap</button></td></tr>';			}
			$ii++;
		}
		return $str;
		
    }   
	
	function getTeamById($id){
		$this->db->select('*');
		$this->db->from('team');
		$this->db->where('tid' , $id);
		
		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	function getAllTeamList(){
		
		$this->db->select('*');
		$this->db->from('team');
		

		$query = $this->db->get();
		$data =  $query->result_array();
		$str= '';
		foreach($data as $key => $value){
				$str = $str.'<option  value = "'.$value['tid'].'">'.$value['team_name'].',</option>';
		}
		
		return $str;
	}
	
	function ajax_search_name($name){
		$this->db->select('*');
		$this->db->from('players');
		$this->db->like('name' , $name);
		
		$query = $this->db->get();
		$data =$query->result_array();	 
		
		$str = '';
		$ii = 1;
		foreach($data as $value){
			$str = $str . '<tr><td>'.$ii.'</td><td><img height= "50px" width = "50px" class="pprofile" src = "'.base_url().'/public/profile_img/'.$value['name'].'/'.$value['profile_url'].'"></td><td>'.$value['name'].'</td><td>'.$value['mobile'].'</td><td>'.$value['email'].'</td><td>'.$value['city'].'</td><td>'.$value['state'].'</td><td>'.$value['role'].'</td><td><button onclick= "make_dis(this.id)" id = "a'.$value['pid'].'" class = "btn btn-success btn-xs">Add</button><button onclick= "make_dis(this.id)" id = "c'.$value['pid'].'" class = "btn btn-info btn-xs">Make Caption</button><button onclick= "make_dis(this.id)" id = "v'.$value['pid'].'" class = "btn btn-warning btn-xs">Make Vice Caption</button></td></tr>';
			$ii++;
		}
		//echo '<script>alert("'.$str.'")</script>';

		echo $str;	
		
		}
	function ajax_search_mobile($mobile){
		
		$this->db->select('*');
		$this->db->from('players');
		$this->db->like('mobile' , $mobile);
		
		$query = $this->db->get();
		$data =$query->result_array();	 
		
		$str = '';
		$ii = 1;
		foreach($data as $value){
			$str = $str . '<tr><td>'.$ii.'</td><td><img  "50px" width = "50px" class="pprofile" src = "'.base_url().'/public/profile_img/'.$value['name'].'/'.$value['profile_url'].'"></td><td>'.$value['name'].'</td><td>'.$value['mobile'].'</td><td>'.$value['email'].'</td><td>'.$value['city'].'</td><td>'.$value['state'].'</td><td>'.$value['role'].'</td><td><button onclick= "make_dis(this.id)" id = "a'.$value['pid'].'" class = "btn btn-success btn-xs">Add</button><button onclick= "make_dis(this.id)" id = "c'.$value['pid'].'" class = "btn btn-info btn-xs">Make Caption</button><button onclick= "make_dis(this.id)" id = "v'.$value['pid'].'" class = "btn btn-warning btn-xs">Make Vice Caption</button></td></tr>';
			$ii++;
		}
		//echo '<script>alert("'.$str.'")</script>';

		echo $str;	
		
		
	}
	function ajax_search_city($city){
		
		$this->db->select('*');
		$this->db->from('players');
		$this->db->like('city' , $city);
		
		$query = $this->db->get();
		$data =$query->result_array();	 
		
		$str = '';
		$ii = 1;
		foreach($data as $value){
			$str = $str . '<tr><td>'.$ii.'</td><td><img "50px" width = "50px" class="pprofile" src = "'.base_url().'/public/profile_img/'.$value['name'].'/'.$value['profile_url'].'"></td><td>'.$value['name'].'</td><td>'.$value['mobile'].'</td><td>'.$value['email'].'</td><td>'.$value['city'].'</td><td>'.$value['state'].'</td><td>'.$value['role'].'</td><td><button onclick= "make_dis(this.id)" id = "a'.$value['pid'].'" class = "btn btn-success btn-xs">Add</button><button onclick= "make_dis(this.id)" id = "c'.$value['pid'].'" class = "btn btn-info btn-xs">Make Caption</button><button onclick= "make_dis(this.id)" id = "v'.$value['pid'].'" class = "btn btn-warning btn-xs">Make Vice Caption</button></td></tr>';
			$ii++;
		}
		//echo '<script>alert("'.$str.'")</script>';

		echo $str;	
		
	}
	
	
	function add_ajax_team($id){
		$data['player_id'] = $id;
		$this->db->insert('team_players' , $data);
	}
	
	function add_ajax_caption($id){
		
	}
	
	function add_ajax_vicecaption($id){
		
	}
	
	function updateteam(){
		
    } 
	
	function team_list(){
		
		$this->db->select('*');
		$this->db->from('team');
		
		$query = $this->db->get();
		$data =$query->result_array();
		$str = '';
		foreach($data as $value){
			$str = $str . '<option value = "'.$value['tid'].'">'.$value['team_name'].'</option>';
		}
		
		return $str;
    } 
	
   	function add_teams_player($player_id,$team_id){
		$data['player_id']= $player_id;
		$data['team_id']= $team_id;
		 
		if($this->db->insert('team_players' , $data)){
			echo "1";
		}else{
			echo "0";

		}
		
	}
}
