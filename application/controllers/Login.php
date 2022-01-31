<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');

		$this->load->model('M_user');
		// $this->load->model('Notifikasi_model');

		date_default_timezone_set('Asia/Jakarta');
	}


	public function index()
	{
		$this->load->view('login');
	}

	function proses_login()
	{
		$user=strip_tags(stripslashes($this->input->post('username',TRUE)));
        $pass=strip_tags(stripslashes($this->input->post('password',TRUE)));

		$cekuser = $this->M_user->cekuser($user);

		if ($cekuser) {
			
			$ceklogin = $this->M_user->login($user,$pass);

			if ($ceklogin) {
				foreach ($ceklogin as $row);

				if (($row->status)==1) {
					$this->session->set_userdata('username', $row->username);
					$this->session->set_userdata('nama', $row->nama);
					$this->session->set_userdata('level', $row->level);
					
					redirect('Beranda','refresh');
				}else{
					echo "<script>alert('Akun anda belum diverifikasi.');document.location='index'</script>";
				}

			}else {
				echo "<script>alert('Username atau password salah.');document.location='index'</script>";
			}
		}else{
			echo "<script>alert('Akun anda belum terdaftar.');document.location='index'</script>";
		}
	}

	function register()
	{
		$this->load->view('register');
	}

	function daftar_user()
	{
		$user = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$email = $this->input->post('email');
		$nohp = $this->input->post('nohp');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$kd_pos = $this->input->post('kd_pos');
		$level = "3";
		$cekuser = $this->M_user->cekuserdaftar($user);

		if ($cekuser) {

			$data = array(
				'username' => $user,
				'password' => $password,
				'nama' => $nama,
				'alamat' => $alamat,
				'kd_pos' => $kd_pos,
				'level' => $level,
				'no_hp' => $nohp,
				'email' => $email,
				'status' => 1,
			);

			$simpan = $this->M_user->save($data);
			
			if ($simpan) {

				echo "<script>alert('Akun anda sudah aktif');</script>";
				redirect('Login','refresh');
			} else {
				echo "<script>alert('Pendaftran Gagal');</script>";
				redirect('Login/register','refresh');
			}
		}else{
			echo "<script>alert('Akun sudah terdaftar.');</script>";
			redirect('Login/register','refresh');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('Beranda','refresh');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */