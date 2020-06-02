<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nghiphep_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function getAll()
	{
		$data = $this->db->get('nghiphep');
		$data = $data->result_array();
		return $data;
	}

	function add($object)
	{
		return $this->db->insert('nghiphep', $object);
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('nghiphep');
	}

	function laydulieu($id)
	{
		$this->db->where('id', $id);
		$data = $this->db->get('nghiphep');
		return $data->result_array();
	}

	function update($data_suanghiphep)
	{
		$this->db->where('id', $data_suanghiphep['id']);
		return $this->db->update('nghiphep', $data_suanghiphep);
	}


}

/* End of file Monhoc_model.php 
/* Location: ./application/models/Monhoc_model.php */