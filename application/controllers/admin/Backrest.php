<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backrest extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_restore');
		$this->load->helper('form');
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->userdata('akses')=='1'){
			$this->load->view('admin1/v_backrest');
		}else{
			echo "Halaman Tidak Ditemukan";
		}
	}


	function backup(){
		 $this->load->dbutil();
 
        // nyiapin aturan untuk file backup
        $aturan = array(    
                'format'      => 'zip',            
                'filename'    => 'my_db_backup.sql'
              );
 
 
        $backup =& $this->dbutil->backup($aturan);
 
        $nama_database = 'backup_'. date("Y-m-d") .'.zip';
        $simpan = '/database'.$nama_database;
 
        $this->load->helper('file');
        write_file($simpan, $backup);
 
 
        $this->load->helper('download');
        force_download($nama_database, $backup);
        // }
		// force_download('mybackup.sql', $backup);
		
	}

	function restore(){
		$this->M_restore->droptabel();

		//upload dulu filenya
		$fupload = $_FILES['datafile'];
		$nama = $_FILES['datafile']['name'];
		if(isset($fupload)){
		$lokasi_file = $fupload['tmp_name'];
		$direktori="backupdb/$nama";
		move_uploaded_file($lokasi_file,"$direktori");
		}

		//restore database
		$isi_file=file_get_contents($direktori);
		$string_query=rtrim($isi_file, "\n;" );
		$array_query=explode(";", $string_query);

		foreach($array_query as $query){
		$this->db->query($query);
		}

		echo "<script>alert('Berhasil Di Restore.');</script>";
		redirect('Backrest','refresh');
	}
}

/* End of file Backrest.php */
/* Location: ./application/controllers/admin/Backrest.php */