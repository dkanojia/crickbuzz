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

	function getTodayMatches(){
		$today_date = date('d-m-Y');
		$this->db->select('*');
		$this->db->from('matches');
		$this->db->where('start_date', $today_date);

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
			if(isset($data1[0]['tour_name'])){}else{$data1[0]['tour_name'] ='N/A';}
			
			// $str = $str . '<tr> <td><input name="foo[]" id= "'.$roFetApp['intId'].'" value="'.$roFetApp['intId'].'" type = "checkbox" name  = "" class = "checkbox"></td><td>'.$ii.'</td><td>'.$roFetApp['username'].'</td><td>'.$roFetApp['mobile'].'</td><td>'.$roFetApp['passport_no'].'</td><td>'.$status.'</td><td>'.$roFetApp['booked_date'].'</td><td>'.$roFetApp['city'].'</td><td>'.$roFetApp['created_on'].'</td><td><button class = "btn btn-danger btn-xs"><a id = '.$roFetApp['intId'].' onclick = "changeStatus(this.id)">CANCEL</a></button></td><td><a class="modalLink" href="#myModal" data-toggle="modal" data-target="#myModal" data-id= "'.$roFetApp['intId'].'" onclick = "no('.$roFetApp['intId'].')"><button class="btn btn-primary btn-sm">VIEW</button>
			//             </a></td></tr>';
			
			$status_value = $value['status'];
			$status = '';
			$action1 = '';
			$action2 = '';
			
			switch ($status_value) {
			    case 1:
					$status = '<button class = "btn btn-info">Running</button>';
					$action1 = '<a href = ""><button onclick = "finish_match()" name = "start_match" class= "btn btn-success">Finish</button></a>';
			        $action2 = ' <a href = ""><button onclick = "pause_match()"  name = "pause_match" class= "btn btn-warning">PAUSE</button></a>';
			        break;
				case 2:
					$status = '<button class = "btn btn-warning">Paused</button>';
					$action1 = '<a href = ""><button onclick = "start_match()" name = "start_match" class= "btn btn-info">START</button></a>';
			        $action2 = ' <a href = ""><button onclick = "finish_match()"  name = "finish_match" class= "btn btn-success">Finish</button></a>';
			        break;
				case 3:
					$status = '<button class = "btn btn-danger">Disabled</button>';
					$action1 = '<a href = ""><button onclick = "start_match()" name = "start_match" class= "btn btn-info">START</button></a>';
			        $action2 = ' <a href = ""><button onclick = "finish_match()"  name = "finish_match" class= "btn btn-warning">PAUSE</button></a>';
			        break;
				case 4:
					$status = '<button class = "btn btn-success">Finish</button>';
					$action1 = '<a href = ""><button onclick = "view_match_detail()" name = "view_detail" class= "btn btn-primary">VIEW</button></a>';
			        $action2 = '';
			        break;			    
				default:
					$url1 = 'http://'.getenv('HTTP_HOST').'/cric/match_started/'.$value['intId'];
					$url2 = 'http://'.getenv('HTTP_HOST').'/cric/match_paused/'.$value['intId'];
					$status = '<button class = "btn btn-primary">UpComing</button>';
					$action1 = '<a href ="'.$url1.'"><button onclick = "start_match()" name = "start_match" class= "btn btn-info">START</button></a>';
			        $action2 = ' <a href = "'.$url2.'"><button onclick = "cancel_match()"  name = "pause_match" class= "btn btn-danger">CANCEL</button></a>';
			}

			 //start_match()
			 //pause_match()
			//finish_match()
			//view_match_detail()
			//cancel_match()
            	 
			$str = $str . '<tr><td>'.$ii.'</td><td><input name="foo[]" id= "'.$value['intId'].'" value="'.$value['intId'].'" type = "checkbox" name  = "" class = "checkbox"></td><td>'.$data1[0]['tour_name'].'</td><td>'.$value['title'].'</td><td>'.$value['team1_id'].'</td><td>'.$value['team2_id'].'</td><td>'.$value['overs'].'</td><td>'.$value['start_time'].'</td><td>'.$value['start_date'].'</td><td>'.$status.'</td><td>'.$action1.' '.$action2.'</td></tr>';
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
	
	function getNameOfMatch($id){
		$match_id = $id;
		$this->db->select('*');
		$this->db->from('matches');
		$this->db->where('intId', $match_id);

		$query = $this->db->get();
		$data =$query->row();

		return $data->title;
	}
   	
   	function getNameOfTournmament($id){
		$this->db->select('*');
		$this->db->from('matches');
		$this->db->where('intId', $id);

		$query = $this->db->get();
		$data =$query->row();

		$this->db->select('tour_name');
		$this->db->from('tournament');
		$this->db->where('intId' , $data->tournament_id);
		$query2 = $this->db->get();
		$data2 =$query2->result_array();

		if(isset($data2[0]['tour_name'])){}else{$data2[0]['tour_name'] ='N/A';}
		
		return $data2[0]['tour_name'];
	}

	function getTeamList($id){
		
		$this->db->select('*');
		$this->db->from('matches');
		$this->db->where('intId' , $id);

		$query = $this->db->get();
		$data =$query->result_array();

		$team1_id = '';
		$team2_id = '';

		$str = '';
		foreach($data as $value){
			$team1_id = $value['team1_id'];
			$team2_id = $value['team2_id'];
		}

		$this->db->select('*');
		$this->db->from('team');
		$this->db->where('tid' , $team1_id);

		$query2 = $this->db->get();
		$data2 =$query2->result_array();

		foreach($data2 as $value){
			$str = $str . '<option onclick= "" id = "'.$value['tid'].'"  value = "'.$value['tid'].'">'.$value['team_name'].'</option>';
		}
		
		$this->db->select('*');
		$this->db->from('team');
		$this->db->where('tid' , $team2_id);

		$query3 = $this->db->get();
		$data3 =$query3->result_array();

		foreach($data3 as $value){
			$str = $str . '<option onclick= "" id = "'.$value['tid'].'"  value = "'.$value['tid'].'">'.$value['team_name'].'</option>';
		}

		return $str;
	}

	function updateStatusOfMatch($id,$value){
		$this->db->where('intId', $id);
		$this->db->set('status', $value);       
		$this->db->update('matches');
	}

	function setmatch_parameter($data){
		$this->db->insert('match_parameter' , $data);
    }   
}
