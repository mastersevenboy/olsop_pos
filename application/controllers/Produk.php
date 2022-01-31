<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

  function __construct(){
    parent::__construct();
    
    $this->load->model('m_kategori');
    $this->load->model('m_barang');
    $this->load->library('upload');
    $this->load->library('image_lib');

  }

  public function index()
  {
    $data['data']=$this->m_barang->tampil_barang();
    $this->load->view('user/portofolio',$data);
  }

  public function detail($barang_id)
  {
    $data['detail']=$this->m_barang->tampil_barang2($barang_id);
    $this->load->view('user/detail_produk',$data);
  }

}

/* End of file Produk.php */
/* Location: ./application/controllers/Produk.php */