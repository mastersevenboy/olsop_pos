<?php
class Keranjang extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('M_reservasi');
		$this->load->model('mlogin');

	}

	function index()
	{
		if($this->session->userdata('akses')=='1'){
			$data['data']=$this->M_reservasi->cetak_faktur();
			$data['reservasi']=$this->M_reservasi->all_data1();
			$this->load->view('admin1/v_keranjang',$data);
		}else{
	        echo "Halaman tidak ditemukan";
	    }
	}

	function edit_keranjang($id)
	{
		if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2')
		{
			$status_pengiriman=$this->input->post('status_pengiriman');				
			// $id=$this->input->post('id');		
					$where = array('id' => $id);
					$data = array(
						'status_pengiriman' => $status_pengiriman,
						);
					$this->M_reservasi->edit($data,$where);
					
					redirect('admin/Keranjang','refresh');
		}else{
        	echo "Halaman tidak ditemukan";
    	}
	}

	function hapus_keranjang()
	{
		if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2')
		{
		$id = $this->input->post('id');
		$where = array('id' => $id);
		$this->M_reservasi->hapus($where);
		redirect('admin/Keranjang','refresh');
		}else{
        	echo "Halaman tidak ditemukan";
    	}
	}
}