<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        // Load url helper
       // $this->load->helper('url');
    }

	public function create_tournament_submit()
	{
		    $data['tour_banner'] =  $_FILES['userfile']['name'];
			
			$d1 = $this->input->post('d1');
			$d2 = $this->input->post('d2');
			$m1 = $this->input->post('m1');
			$m2 = $this->input->post('m2');
			$y1 = $this->input->post('y1');
			$y2 = $this->input->post('y2');
			
			$data['tour_name'] = $this->input->post('tour_name');
			$data['tour_sponser'] = $this->input->post('spons_name');
			$data['teams'] = $this->input->post('teams');
			echo '<script>alert("alert here")</script>';
			$data['tour_start_date'] = date( "$d1-$m1-$y1");
			$data['tour_end_date'] = date( "$d2-$m2-$y2");
									//folder create if not exist 
				$dir_ck = "./public/team_s_banner/".$data['tour_name'];
				if (!file_exists($dir_ck)) {
					mkdir($dir_ck, 0777, true);
				}
				
	//image upload code here
	   $config =  array(
                  'upload_path'     => $dir_ck,
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'overwrite'       => TRUE,
                  'max_size'        => "2048000",  // Can be set to particular file size
                  'max_height'      => "768",
                  'max_width'       => "1024"  
                );    
				$this->load->library('upload', $config);
				if($this->upload->do_upload())
				{
					//insert in data base64_decode
					$this->load->model('tournament_model');
					$this->tournament_model->create_tour($data);
						$data['message_succ'] = ' successfully registered';
				$this->load->view('success_player');
							
				}
				else
				{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('cre_tour', $error);
				}  
        
			
					
			
			
	
		
	}
	
	
	public function delete1()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('main');
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
	
	public function create()
	{
		
		$tour_name= '';
		$tour_sponser= '';
		$tour_start_date= '';
		$tour_end_date= '';
		
		$data =  array('tour_name' => $tour_name,'tour_sponser' => $tour_sponser,'tour_start_date' => $tour_start_date, 'tour_end_date' => $tour_end_date);
		//$this->set_tour->settour($data);
		$this->load->model('set_tour');
		$this->load->model('match_model');
		$data['matches'] = $this->match_model->getAllMatchList();
		
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cre_tour' , $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
		$this->load->view('local_js_create_tournament');
	}
	
	public function upcoming()
	{
		
		$this->load->model('tournament_model');
		$data['upcoming'] =$this->tournament_model->upcoming();

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_tour', $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
	
	public function past()
	{
		
		$this->load->model('tournament_model');
		$data['past'] =$this->tournament_model->past();
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_tour', $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
	
	public function running()
	{
		
		$this->load->model('tournament_model');
		
		$data['running'] =$this->tournament_model->running();
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_tour', $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
}
