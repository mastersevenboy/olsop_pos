<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_reservasi');
        $this->load->library('image_lib');
		$this->load->library('upload');
    }


	public function index()
	{
		$data['data']=$this->M_reservasi->cetak_faktur();
		$data ['transaksi'] = $this->M_reservasi->transaksi();
		$this->load->view('user/detail_cart',$data);
	}


	function pembayaran(){
		$username=$this->session->userdata('username');
		$nofak=$this->input->post('nofak');
		$status_bayar=1;
		$status_pengiriman=0;
		$created_at = date('Ymd_His');

		$path = './assets2/images/bukti/';

			$config['upload_path'] = './assets2/images/bukti/';
			$config['allowed_types'] = '*';
			$config['max_size']	= '2048';
			$config['remove_space'] = TRUE;
			$config['file_name'] = $_FILES['input_gambar']['name'];

			$foto = array(
				'foto'  => $config['file_name']
			);

		$this->upload->initialize($config);

			if ( $this->upload->do_upload('input_gambar') ) {
				$foto = $this->upload->data();

				$data = array(
					'k_username' => $username,
					'k_jual_nofak' => $nofak,
					'status_bayar' => $status_bayar,
					'status_pengiriman' => $status_pengiriman,
					'ft_bukti_bayar'  => $foto['file_name'],

				);

				$simpan = $this->M_reservasi->save($data);

				if ($simpan) {
					echo "<script>alert('Silakan mengirimkan Foto Bukti Pembayaran. Dan tunggu konfirmasi dan pengerjaan Design.);</script>";
					redirect('Transaksi/status','refresh');
				} else {
					echo "<script>alert('Reservasi Gagal. Harap coba beberapa saat lagi.);</script>";
					redirect('Transaksi','refresh');
				}
			}else {
				
				echo "<script>alert('Gagal. Harap ukuran file < 2048 Kb');</script>";
					redirect('Transaksi','refresh');
			}
		}

	function status()
	{
		$user=$this->session->userdata('username');
		$data['reservasi']=$this->M_reservasi->all_data($user);
		$this->load->view('user/status', $data);
	}

	function update($id)
	{
		$status_pengiriman=$this->input->post('status_pengiriman');
		$where = array('id' => $id);
		$data = array('status_pengiriman' => $status_pengiriman, );
		$this->M_reservasi->status_pengiriman($data,$where);
		redirect('Transaksi/status','refresh');
	}
	
}

/* End of file Transaksi.php */
/* Location: ./application/controllers/admin/Transaksi.php */