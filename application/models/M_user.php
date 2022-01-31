<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	function login($user,$pass)
	{
		$this->db->select('*');
		$this->db->from('tbl_costumer');
		$this->db->where('username', $user);
		$this->db->where('password', md5($pass));
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows()==1) 
		{
			return $query->result();
		}else 
		{
			return false;
		}
	}

	function cekuser($user)
	{
		$this->db->select('*');
		$this->db->from('tbl_costumer');
		$this->db->where('username', $user);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows()==1) 
		{
			return $query->result();
		}else 
		{
			return false;
		}
	}

	function cekuserdaftar($user)
	{
		$this->db->select('*');
		$this->db->from('tbl_costumer');
		$this->db->where('username', $user);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows()==1) 
		{
			return false;
		}else{
			return true;
		}
	}

	function save($data)
	{
		$this->db->insert('tbl_costumer', $data);
		return true;
	}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */