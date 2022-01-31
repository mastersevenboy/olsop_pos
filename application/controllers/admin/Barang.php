<?php
class Barang extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_kategori');
		$this->load->model('m_barang');
		$this->load->library('upload');
		$this->load->library('image_lib');

		// $this->load->library('barcode');
	}
	function index(){
	if($this->session->userdata('akses')=='1'){
		$data['data']=$this->m_barang->tampil_barang();
		$data['kat']=$this->m_kategori->tampil_kategori();
		$data['kat2']=$this->m_kategori->tampil_kategori();
		$this->load->view('admin1/v_barang',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function tambah_barang(){
	if($this->session->userdata('akses')=='1'){
		$kobar=$this->m_barang->get_kobar();
		$nabar=$this->input->post('nabar');
		$kat=$this->input->post('kategori');
		$satuan=$this->input->post('satuan');
		$harpok=str_replace(',', '', $this->input->post('harpok'));
		$harjul=str_replace(',', '', $this->input->post('harjul'));
		$harjul_grosir=str_replace(',', '', $this->input->post('harjul_grosir'));
		$stok=$this->input->post('stok');
		$min_stok=$this->input->post('min_stok');
		$foto=$this->input->post('input_gambar');
		$created_at = date('Ymd_His');

		$config['upload_path'] = './assets2/images/barang/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '5000';
		$config['file_name'] = $created_at.'.png';

		// $foto = array(
		// 	'foto'  => $config['file_name']
		// );

		$this->upload->initialize($config);

		$this->upload->do_upload('input_gambar');
			$foto = $config['file_name'];

			$path = './assets2/images/barang/'.$created_at.'.png';

			$upload_data = $this->upload->data();
			$upload_img_data = getimagesize($upload_data['full_path']);
	        $water_mark = "Toko Emas Adil";
	        $configrez['image_library'] = 'gd2';
	        $configrez['source_image'] = $path;
	        $configrez['create_thumb'] = FALSE;
	        $configrez['maintain_ratio'] = FALSE;
	        
	        if ($upload_img_data[0] > $upload_img_data[1]) {
	            
	            $configrez['width'] = $upload_img_data[1];
	            $configrez['height'] = $upload_img_data[1];
	            $configrez['x_axis'] = ($upload_img_data[0] - $upload_img_data[1]) / 2;
	            $configrez['y_axis'] = 0;
	            $water_mark = $upload_img_data[1];
	            
	        } else {
	            
	            $configrez['width'] = $upload_img_data[0];
	            $configrez['height'] = $upload_img_data[0];
	            $configrez['x_axis'] = 0;
	            $configrez['y_axis'] = ($upload_img_data[1] - $upload_img_data[0]) / 2;
	            $water_mark = $upload_img_data[0];  
	        }
	        $this->image_lib->initialize($configrez);

	        $configrez2['image_library'] = 'gd2';
	        $configrez2['source_image'] = $path;
	        $configrez2['create_thumb'] = FALSE;
	        $configrez2['maintain_ratio'] = FALSE;
	        $configrez2['width'] = "800";
	        $configrez2['height'] = "640";
	        $this->image_lib->initialize($configrez2);
	        $this->image_lib->resize();

		$this->m_barang->simpan_barang($kobar,$nabar,$kat,$satuan,$harpok,$harjul,$harjul_grosir,$stok,$min_stok,$foto);

		redirect('admin/barang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}

	function edit_barang()
	{
	if($this->session->userdata('akses')=='1'){
		$kobar=$this->input->post('kobar');
		$nabar=$this->input->post('nabar');
		$kat=$this->input->post('kategori');
		$satuan=$this->input->post('satuan');
		$harpok=str_replace(',', '', $this->input->post('harpok'));
		$harjul=str_replace(',', '', $this->input->post('harjul'));
		$harjul_grosir=str_replace(',', '', $this->input->post('harjul_grosir'));
		$stok=$this->input->post('stok');
		$min_stok=$this->input->post('min_stok');
		$foto_lama = $this->input->post('filelama');
		$created_at = date('Ymd_His');

		// if (!empty($_FILES['input_gambar']['name'])) {
		// 	@unlink('./assets2/images/barang/'.$foto_lama);
		// }

		// $kondisi = array('id_karyawan' => $id );

		$config['upload_path'] = './assets2/images/barang/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['file_name'] = $created_at.'.png';

		// $foto = array(
		// 	'foto'  => $config['file_name']
		// );

		$this->upload->initialize($config);

		if (!empty($_FILES['input_gambar']['name'])) {
			@unlink('./assets2/images/barang/'.$foto_lama);
	            
			$this->upload->do_upload('input_gambar');

			$foto =$config['file_name'];

			$path = './assets2/images/barang/'.$created_at.'.png';

						
			$upload_data = $this->upload->data();
			$upload_img_data = getimagesize($upload_data['full_path']);
	        $water_mark = "";
	        $configrez['image_library'] = 'gd2';
	        $configrez['source_image'] = $path;
	        $configrez['create_thumb'] = FALSE;
	        $configrez['maintain_ratio'] = FALSE;
	        
	        if ($upload_img_data[0] > $upload_img_data[1]) {
	            
	            $configrez['width'] = $upload_img_data[1];
	            $configrez['height'] = $upload_img_data[1];
	            $configrez['x_axis'] = ($upload_img_data[0] - $upload_img_data[1]) / 2;
	            $configrez['y_axis'] = 0;
	            $water_mark = $upload_img_data[1];
	            
	        } else {
	            
	            $configrez['width'] = $upload_img_data[0];
	            $configrez['height'] = $upload_img_data[0];
	            $configrez['x_axis'] = 0;
	            $configrez['y_axis'] = ($upload_img_data[1] - $upload_img_data[0]) / 2;
	            $water_mark = $upload_img_data[0];
	            
	        }

	        $this->image_lib->initialize($configrez);
	        // $this->image_lib->crop();

	        $configrez2['image_library'] = 'gd2';
	        $configrez2['source_image'] = $path;
	        $configrez2['create_thumb'] = FALSE;
	        $configrez2['maintain_ratio'] = FALSE;
	        $configrez2['width'] = "520";
	        $configrez2['height'] = "640";
	        $this->image_lib->initialize($configrez2);
	        $this->image_lib->resize();

		$this->m_barang->update_barang($kobar,$nabar,$kat,$satuan,$harpok,$harjul,$harjul_grosir,$stok,$min_stok,$foto);
		redirect('admin/barang');	
	}
	else{
        $this->m_barang->update_barang2($kobar,$nabar,$kat,$satuan,$harpok,$harjul,$harjul_grosir,$stok,$min_stok);
		redirect('admin/barang');	
    }
	}
	}



	function hapus_barang(){
	if($this->session->userdata('akses')=='1'){
		$kode=$this->input->post('kode');
		$this->m_barang->hapus_barang($kode);
		redirect('admin/barang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}

	function t_stok()
	{
		$nabar = $this->input->post('nabar');
		$stok  = $this->input->post('stok');
		$this->m_barang->u_stok($nabar,$stok);
		redirect('admin/barang','refresh');
	}
}