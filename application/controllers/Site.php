<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->load->view("site/index");
	}

	public function latest()
	{
		$this->load->view("site/index");
	}

	public function popular()
	{
		$this->load->view("site/index");	
	}

	public function detail($id)
	{
		$this->load->view("site/detail");	
	}

	public function download()
	{
		
	}

}