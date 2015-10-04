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

	public function generate()
	{
		for ($i = 1; $i <= 8; $i++)
		{
			$title = "Image " . $i;

			$this->db->insert("images", array(
				'title' => $title,
				'filename' => urlencode($title) . ".jpg",
				'created_at' => date('Y-m-d H:i:s'),
				'visible' => 1				
			));

			echo $this->db->last_query() . "<br />";
		}
	}

}