<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        // Load url helper
       // $this->load->helper('url');
    }

	public function show_500()
	{
		$this->load->view('500');
		
		
	}
	
	public function show_404()
	{
		$this->load->view('404');

	}
	
	
}
