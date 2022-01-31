<?php
class M_pengguna extends CI_Model{
	function get_pengguna(){
		$hsl=$this->db->query("SELECT * FROM tbl_user");
		return $hsl;
	}

	function get_coustumer(){
		$hsl=$this->db->query("SELECT * FROM tbl_costumer");
		return $hsl;
	}

	function hapus_costumer($kode){
		$hsl=$this->db->query("DELETE FROM tbl_costumer where username='$kode'");
		return $hsl;
	}

	function simpan_pengguna($nama,$username,$password,$level,$status){
		$hsl=$this->db->query("INSERT INTO tbl_user(user_nama,user_username,user_password,user_level,user_status) VALUES ('$nama','$username',md5('$password'),'$level','$status')");
		return $hsl;
	}
	function update_pengguna_nopass($kode,$nama,$username,$level,$status){
		$hsl=$this->db->query("UPDATE tbl_user SET user_nama='$nama',user_username='$username',user_level='$level',user_status='$status' WHERE user_id='$kode'");
		return $hsl;
	}
	function update_pengguna($kode,$nama,$username,$password,$level,$status){
		$hsl=$this->db->query("UPDATE tbl_user SET user_nama='$nama',user_username='$username',user_password=md5('$password'),user_level='$level',user_status='$status' WHERE user_id='$kode'");
		return $hsl;
	}
	function update_status($kode){
		$hsl=$this->db->query("UPDATE tbl_user SET user_status='0' WHERE user_id='$kode'");
		return $hsl;
	}
}