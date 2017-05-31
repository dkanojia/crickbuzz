<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Score extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        // Load url helper
       // $this->load->helper('url');
    }


	
	public function create()
	{

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cre_tour');
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');

	}
	
	public function load_players_team($id ,$mid)
	{
		$this->load->model('score_model');
		$this->score_model->load_players_team($id , $mid);
		
		
	}
	public function load_team($id)
	{
		$this->load->model('match_model');
		$this->match_model->getMatchTeams($id);
			
	}
	
	public function view()
	{
		
		
		$this->load->model('tournament_model');
		$data['tournaments']= $this->tournament_model->getAllTournament();
		$this->load->model('score_model');
		$data['score']=$this->score_model->getscore();
		$this->load->model('match_model');
		$data['running_match'] =$this->match_model->ruuningMatchList();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_score' , $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
	
	public function update()
	{
		
		$this->load->model('score_model');
		
		$this->score_model->updatescore($data);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_score', $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
	
	public function delete1()
	{
		
		$this->load->model('get_tour');
		$data['upcoming'] =$this->get_tour->deletescore();
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_score', $data);
		$this->load->view('rightsidebar');
		$this->load->view('footer');
		$this->load->view('globaljs');
	}
}
