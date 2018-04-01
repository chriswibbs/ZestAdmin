<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rota extends CI_Controller {

    public function __construct(){
        parent::__construct();;
    }

	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('dashboard_large_stats');
		$this->load->view('dashboard_customer_updates');
		$this->load->view('marketing_area');
		$this->load->view('left_menu');
		
		
		//$this->load->view('page_head');
		
		//$this->load->view('templates/main-template');
	}
}
