<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player_model extends CI_Model {


	function __construct() {
        parent::__construct();
		$this->load->database();
		
    }
    

	function get_all_player_list(){
		$this->db->select('*');
		$this->db->from('players');
		

		$query = $this->db->get();
		$data =  $query->result_array();
		$str= '';
		foreach($data as $key => $value){
				$str = $str.'<option  value = "'.$value['pid'].'">'.$value['name'].'('.$value['city'].','.$value['mobile'].'),</option>';
		}
		
		return $str;
	}
	function edit_player($id){
		
		$this->db->select('*');
		//echo '<script>alert("'.$id.'")</script>';
		$this->db->from('players');
		$this->db->where('pid' , $id);
		

		$query = $this->db->get();
		return $query->result_array();
		
	}
	
		
		
		
		
	function countryByCode($data){
		$this->db->select('name');
		$this->db->from('countries');
		$this->db->where('id' , $data);

		$query = $this->db->get();
		$res['country'] = $query->result_array();
		return $res['country'];
	}
	function stateByCode($data){
		$this->db->select('name');
		$this->db->from('states');
		$this->db->where('id' , $data);

		$query = $this->db->get();
		$res['state'] = $query->result_array();
		return $res['state'];

	}
	function cityByCode($data){
		$this->db->select('name');
		$this->db->from('cities');
		$this->db->where('id' , $data);

		$query = $this->db->get();
		$res['city'] = $query->result_array();
		return $res['city'];
	}
	
	
	function setplayer($data){
		
		$this->db->insert('players' , $data);

    }   
	
	function getplayer(){
		$this->db->select('*');
		$this->db->from('players');
		$query = $this->db->get();
		$data =  $query->result_array();
		
		$str  = '';
		$ii = 1;
		foreach($data as $key => $value){
			$str = $str . '<tr><td>'.$ii.'</td><td><img "50px" width = "50px" class="pprofile" src = "http://'.getenv('HTTP_HOST').'/cric/public/profile_img/'.$value['name'].'/'.$value['profile_url'].'"></td><td>'.$value['name'].'</td><td>'.$value['role'].'</td><td>'.$value['dob'].'</td><td>'.$value['mobile'].'</td><td>'.$value['city'].'</td><td>'.$value['bat'].'</td><td>'.$value['bowler'].'</td><td>'.$value['team'].'</td><td><a href = "edit_player/'.$value['pid'].'"><button class ="btn btn-warning btn-xs">Edit</button></a><a href = "delete_player/'.$value['pid'].'"><button class ="btn btn-danger btn-xs">Delete</button></a></td></tr>';
			$ii++;
		}
		 //$str;
		return $str;
		
		
    }   
	
	function ajax_name($name){
		$this->db->select('*');
		$this->db->from('players');	
		$this->db->like('name', $name);
		
		$query = $this->db->get();
		
		$str = '';
		$data=  $query->result_array();
		$ii = 1;
		foreach($data as $key => $value){
			$str = $str. '<tr><td><input type = "checkbox" ></td><td>'.$ii.'</td><td>'.$value['name'].'</td>'. '<td>'.$value['dob'].'</td>'.'<td>'.$value['mobile'].'</td>'.'<td>'.$value['city'].'</td>'.'<td>'.$value['bat'].'</td>'.'<td>'.$value['team'].'</td><td><button class ="btn btn-warning btn-xs">Edit</button><button class ="btn btn-danger btn-xs">Delete</button></td></tr>';
			$ii++;
		}
		echo $str;
	}
	
	function ajax_mobile($mobile){
		
		$this->db->select('*');
		$this->db->from('players');
		$this->db->like('mobile', $mobile);
		$query = $this->db->get();
		
		$str = '';
		$data=  $query->result_array();
		$ii = 1;
		foreach($data as $key => $value){
			$str = $str. '<tr><td><input type = "checkbox" ></td><td>'.$ii.'</td><td>'.$value['name'].'</td>'. '<td>'.$value['dob'].'</td>'.'<td>'.$value['mobile'].'</td>'.'<td>'.$value['city'].'</td>'.'<td>'.$value['bat'].'</td>'.'<td>'.$value['team'].'</td><td><button class ="btn btn-warning btn-xs">Edit</button><button class ="btn btn-danger btn-xs">Delete</button></td></tr>';
			$ii++;
		}
		echo $str;		
	}
	
	function ajax_city($city){
		
		$this->db->select('*');
		$this->db->from('players');
		$this->db->like('city', $city);

		$query = $this->db->get();
		
		$str = '';
		$data=  $query->result_array();
		$ii = 1;
		foreach($data as $key => $value){
			$str = $str. '<tr><td><input type = "checkbox" ></td><td>'.$ii.'</td><td>'.$value['name'].'</td>'. '<td>'.$value['dob'].'</td>'.'<td>'.$value['mobile'].'</td>'.'<td>'.$value['city'].'</td>'.'<td>'.$value['bat'].'</td>'.'<td>'.$value['team'].'</td><td><button class ="btn btn-warning btn-xs">Edit</button><button class ="btn btn-danger btn-xs">Delete</button></td></tr>';
			$ii++;
		}
		echo $str;
	}
	
	function load_team(){
		$this->db->select('*');
		$this->db->from('team');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
	function edit_detail($id , $data){
		
		$name = $data['name'];
		$battingStyle = $data['battingStyle'];
		$bowlingStyle = $data['bowlingStyle'];
		$this->db->where('pid', $id);
		$this->db->set('name' , $name);
		$this->db->set('bat' , $battingStyle);
		$this->db->set('bowler' , $bowlingStyle);
		$this->db->update('players');    
		    

	}
	
	function edit_detail1($id , $data){
		$this->db->where('pid', $id);
		
	
		
		$this->db->set('country', $data['country']);    
		$this->db->set('state', $data['state']);    
		$this->db->set('city', $data['city']);    
		$this->db->set('email', $data['email']);    
		$this->db->set('mobile', $data['mobile']);    
		$this->db->update('players');

	}
	
	function updateplayer_photo($id  , $profile_url){
		
		$this->db->where('pid', $id);
		$this->db->set('profile_url', $profile_url);    
		$this->db->update('players');    
	} 
	
	function deleteplayer($id){
		$this->db->where('pid', $id);
		//echo '<script>alert("called delete function ")</script>';
		$this->db->delete('players');
		
    } 
	
	function load_country(){
		$this->db->select('*');
		$this->db->from('countries');
		$query = $this->db->get();
		return $query->result_array();
    } 
	
	
	function fet_state($count){
		$this->db->select('*');
		$this->db->from('states');
		$this->db->where('country_id' , $count);
		$query = $this->db->get();
			/* 	echo '<script>alert("'.print_r($query).'")</script>'; */
		//print_r($query->result_array());
		
		$str = '<option value = "">Choose State</option>';
		$data=  $query->result_array();
		foreach($data as $key => $value){
			$str = $str. '<option id = "'.$value['id'].'" value = "'.$value['id'].'" >'.$value['name'].'</option>';
		}
	 	//echo '<script>alert("'.$str.'")</script>'; 		
		return $str;
    } 
		
		function fet_city($count){
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->where('state_id' , $count);
		$query = $this->db->get();
			/* 	echo '<script>alert("'.print_r($query).'")</script>'; */
		//print_r($query->result_array());
		
		$str = '<option value = "">Choose City</option>';
		$data=  $query->result_array();
		foreach($data as $key => $value){
			$str = $str. '<option id = "'.$value['id'].'" value = "'.$value['id'].'" >'.$value['name'].'</option>';
		}
	 	//echo '<script>alert("'.$str.'")</script>'; 		
		return $str;
    } 
		
	
	
   	
}
