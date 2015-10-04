<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image_model extends CI_Model {

	private $table = "images";

	public function all($limit = 8)
	{
		$this->db->limit($limit);
		$this->db->offset( $this->uri->segment(3) );
		return $this->db->get($this->table);
	}

	public function count()
	{
		return $this->db->count_all_results($this->table);
	}

	public function latest()
	{
		$this->db->order_by("created_at", "desc");
		
		return $this;
	}

	public function popular()
	{
		$this->db->order_by("download_count", "desc");

		return $this;
	}

	public function find($id)
	{
		$this->db->where("id", $id);
		$query = $this->db->get($this->table);
		return $query->num_rows() ? $query->row() : null;
	}

	public function random_images($except, $limit = 2)
	{
		return $this->db->query("SELECT * FROM `images` where id != ? order by rand() limit ?", array($except, $limit));		
	}

	public function view_count($id)
	{
		$this->db->set("view_count", "view_count+1", false);
		$this->db->where("id", $id);
		$this->db->update($this->table);
	}

}