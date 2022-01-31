<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_reservasi extends CI_Model {

public function reservasi()
{
	$queri = $this->db->query("SELECT * FROM tb_keranjang k JOIN tbl_barang b ON k.k_barang_id= b.barang_id JOIN tbl_costumer c ON c.username=k.k_username");
	return $queri->result();
}

function all_data($username)
{
	$hsl=$this->db->query("SELECT * FROM tb_keranjang k join tbl_costumer c on k.k_username=c.username join tbl_detail_jual d on k.k_jual_nofak=d.d_jual_nofak join tbl_jual j on k.k_jual_nofak=j.jual_nofak WHERE k_username='$username'");
	return $hsl;
}

function all_data1()
{
	$hsl=$this->db->query("SELECT id,k_username,k_jual_nofak,jual_nofak,ft_bukti_bayar,status_bayar,status_pengiriman,d_jual_qty,d_jual_total,nama,alamat,kd_pos,no_hp,username FROM tb_keranjang k join tbl_costumer c on k.k_username=c.username join tbl_detail_jual d on k.k_jual_nofak=d.d_jual_nofak join tbl_jual j on k.k_jual_nofak=j.jual_nofak");
	return $hsl;
}

function get_data()
{
	$nofak=$this->session->userdata('nofak');
	$hsl=$this->db->query("SELECT id,k_username,k_jual_nofak,jual_nofak,ft_bukti_bayar,status_bayar,status_pengiriman,d_jual_qty,d_jual_total,nama,alamat,kd_pos,no_hp,username from tb_keranjang join tbl_detail_jual on k_jual_nofak = d_jual_nofak join tbl_costumer on k_username=username join tbl_jual on k_jual_nofak=jual_nofak WHERE jual_nofak='$nofak'");
	return $hsl;
}
public function edit($data,$where)
{
	$this->db->where($where);
	$this->db->update('tb_keranjang', $data);
	return true;
}

public function hapus($where)
{
	$this->db->where($where);
	$this->db->delete('tb_keranjang');
	return true;
}


function get_barang($kobar){
		$hsl=$this->db->query("SELECT * FROM tbl_barang where barang_id='$kobar'");
		return $hsl;
	}

function tampil_barang(){
		$hsl=$this->db->query("SELECT barang_id,barang_nama,barang_satuan,barang_harpok,barang_harjul,barang_harjul_grosir,barang_stok,barang_min_stok,barang_kategori_id,kategori_nama,foto FROM tbl_barang JOIN tbl_kategori ON barang_kategori_id=kategori_id");
		return $hsl;
	}

function transaksi(){
	$nofak=$this->session->userdata('nofak');
	$hsl=$this->db->query("SELECT k_username,k_jual_nofak,jual_nofak,ft_bukti_bayar,status_bayar,status_pengiriman,d_jual_qty,d_jual_total,nama,alamat,kd_pos,no_hp,username from tb_keranjang join tbl_detail_jual on k_jual_nofak = d_jual_nofak join tbl_costumer on k_username=username join tbl_jual on k_jual_nofak=jual_nofak WHERE jual_nofak='$nofak'");
	return $hsl;
}


function simpan_penjualan($nofak,$total){
		// $idadmin=$this->session->userdata('idadmin');
		$this->db->query("INSERT INTO tbl_jual (jual_nofak,jual_total,jual_keterangan) VALUES ('$nofak','$total','eceran')");
		foreach ($this->cart->contents() as $item) {
			$data=array(
				'd_jual_nofak' 			=>	$nofak,
				'd_jual_barang_id'		=>	$item['id'],
				'd_jual_barang_nama'	=>	$item['name'],
				'd_jual_barang_satuan'	=>	$item['satuan'],
				'd_jual_barang_harpok'	=>	$item['harpok'],
				'd_jual_barang_harjul'	=>	$item['amount'],
				'd_jual_qty'			=>	$item['qty'],
				'd_jual_diskon'			=>	$item['disc'],
				'd_jual_total'			=>	$item['subtotal']
			);
			$this->db->insert('tbl_detail_jual',$data);
			$this->db->query("update tbl_barang set barang_stok=barang_stok-'$item[qty]' where barang_id='$item[id]'");
		}
		return true;
	}
	function get_nofak(){
		$q = $this->db->query("SELECT MAX(RIGHT(jual_nofak,6)) AS kd_max FROM tbl_jual WHERE DATE(jual_tanggal)=CURDATE()");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return date('dmy').$kd;
	}

	function cetak_faktur(){
		$nofak=$this->session->userdata('nofak');
		$hsl=$this->db->query("SELECT jual_nofak,DATE_FORMAT(jual_tanggal,'%d/%m/%Y %H:%i:%s') AS jual_tanggal,jual_total,jual_jml_uang,jual_kembalian,jual_keterangan,d_jual_barang_nama,d_jual_barang_satuan,d_jual_barang_harjul,d_jual_qty,d_jual_diskon,d_jual_total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE jual_nofak='$nofak'");
		return $hsl;
	}

	function save($data){
		$this->db->insert('tb_keranjang', $data);
		return true;
	}

	function status_pengiriman($data,$where)
	{
		$this->db->where($where);
		$this->db->update('tb_keranjang', $data);
		return true;
	}
}

/* End of file M_reservasi.php */
/* Location: ./application/models/M_reservasi.php */