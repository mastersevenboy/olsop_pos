<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_restore extends CI_Model {

	// function deletepesanan()
	// {
	// 	$query = $this->db->query('DROP TABLE ameng');

	// 	return $query;
	// }

	function droptabel()
	{
		$query = $this->db->query('DROP TABLE tb_keranjang,tbl_barang,tbl_beli,tbl_jual,tbl_costumer,tbl_kategori,tbl_suplier,tbl_user,tbl_detail_beli,tbl_detail_jual;');
		return $query;
	}

}

/* End of file M_restore.php */
/* Location: ./application/models/M_restore.php */