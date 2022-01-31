<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_reservasi');
        $this->load->model('M_reservasi');
    }


	public function index()
	{	
		if($this->session->userdata('level')=='3'){
		$data['data']=$this->M_reservasi->tampil_barang();
        $this->load->view('user/cart',$data);
    	}else{
    		echo "Halaman Dibuka Setelah Login";
    	}
	}


    function add_cart()
    {
		if($this->session->userdata('level')=='3'){
			$kobar=$this->input->post('kode_brg');
			$produk=$this->M_reservasi->get_barang($kobar);
			$i=$produk->row_array();
			$data = array(
	               'id'       => $i['barang_id'],
	               'name'     => $i['barang_nama'],
	               'satuan'   => $i['barang_satuan'],
	               'harpok'   => $i['barang_harpok'],
	               'price'    => str_replace(",", "", $this->input->post('harjul'))-$this->input->post('diskon'),
	               'disc'     => $this->input->post('diskon'),
	               'qty'      => $this->input->post('qty'),
	               'amount'	  => str_replace(",", "", $this->input->post('harjul'))
	            );
		if(!empty($this->cart->total_items())){
			foreach ($this->cart->contents() as $items){
				$id=$items['id'];
				$qtylama=$items['qty'];
				$rowid=$items['rowid'];
				$kobar=$this->input->post('kode_brg');
				$qty=$this->input->post('qty');
				if($id==$kobar){
					$up=array(
						'rowid'=> $rowid,
						'qty'=>$qtylama+$qty
						);
					$this->cart->update($up);
				}else{
					$this->cart->insert($data);
				}
			}
		}else{
			$this->cart->insert($data);
		}
			redirect('Cart');
		}else{
	        echo "Halaman tidak ditemukan";
	    }
	}

	function remove()
	{
		if($this->session->userdata('level')=='3'){
			$row_id=$this->uri->segment(3);
			$this->cart->update(array(
	               'rowid'      => $row_id,
	               'qty'     => 0
	            ));
			redirect('Cart');
		}else{
	        echo "Halaman tidak ditemukan";
	    }
	}

	function simpan_penjualan()
	{
		if($this->session->userdata('level')=='3'){
		$total=$this->input->post('total');
				$nofak=$this->M_reservasi->get_nofak();
				$this->session->set_userdata('nofak',$nofak);
				$order_proses=$this->M_reservasi->simpan_penjualan($nofak,$total);
				if($order_proses){
					$this->cart->destroy();
					$this->session->unset_userdata('tglfak');
					$this->session->unset_userdata('suplier');
					redirect('Cart','refresh');	
				}else{
					redirect('Cart','refresh');
				}
		}else{
	        echo "Halaman tidak ditemukan";
	    }
	}

	function cetak_faktur(){
		$x['data']=$this->M_reservasi->cetak_faktur();
		$this->load->view('admin/laporan/v_faktur',$x);
		//$this->session->unset_userdata('nofak');
	}
}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */