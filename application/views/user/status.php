<?php $this->load->view('layout/user/header'); ?>

<div class="product_image_area">
    <div class="container">
      <div class="row s_product_inner">
        <div class="container h-100">
          <div class="blog-banner">
            <div class="text-center">
              <h1>Status Barang anda</h1>
              <nav aria-label="breadcrumb" class="banner-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Ubah status pengiriman jika anda sudah menerima barang untuk konfirmasi. Anda tidak bisa melakukan transaksi lagi seblum barang diterima terimaksih</li>
                </ol>
              </nav>
              <br>
              <br>
            </div>
          </div>
        </div>
        <br>
        <br>
        
        <div class="col-md-8">
          <?php foreach ($reservasi->result_array() as $row) {
              $id=$row['id'];
              $nabar=$row['d_jual_barang_nama'];
              $satuan=$row['d_jual_barang_satuan'];                                    
              $harjul=$row['d_jual_barang_harjul'];
              $qty=$row['d_jual_qty'];
              $diskon=$row['d_jual_diskon'];
              $total=$row['d_jual_total'];
              $b=$row['jual_total'];
              $user=$row['k_username'];
              $nm=$row['nama'];
              $alamat=$row['alamat'];
              $kd_pos=$row['kd_pos'];
              $no_hp=$row['no_hp'];
              $nofak=$row['k_jual_nofak'];
              $ft=$row['ft_bukti_bayar'];
              $status_bayar=$row['status_bayar'];
              $status_pengiriman=$row['status_pengiriman'];
              ?> 
          <div class="row s_product_inner">
            <div class="form-group">
              <label class="control-label col-xs-3" >Username</label>
                <div class="col-xs-9">
                  <input name="username" class="form-control" type="text" value="<?php echo $user; ?>" readonly>
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3" >Nama Costumer</label>
                <div class="col-xs-9">
                  <input name="nama" class="form-control" type="text" value="<?php echo $nm ?>" readonly>
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3" >Alamat</label>
                <div class="col-xs-9">
                  <!-- <input name="alamat" class="form-control" type="textarea" " readonly> -->
                  <textarea name="alamat" class="form-control" readonly><?php echo $alamat; ?></textarea>
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3" >Kode Pos</label>
                <div class="col-xs-9">
                  <input name="kd_pos" class="form-control" type="text" value="<?php echo $kd_pos; ?>" readonly>
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3" >No Telepon</label>
                <div class="col-xs-9">
                  <input name="no_hp" class="form-control" type="text" value="<?php echo $no_hp; ?>" readonly>
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3" >No_Faktur</label>
                <div class="col-xs-9">
                  <input name="nofak" class="form-control" type="text" value="<?php echo $nofak; ?>" readonly>
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-4" >Status Pembayaran</label>
                <div class="col-xs-9">
                  <select name="status_bayar" id="status" value="<?php echo $status_bayar;?>" class="form-control" disabled>
                  <?php if ($status_bayar == 0) {
                      echo '<option value="0" selected>Belum Bayar</option>
                            <option value="1">Sudah Bayar</option>'; 
                  } else {
                      echo '<option value="0">Belum Bayar</option>
                            <option value="1" selected>Sudah Bayar</option>';
                  }?>
                  </select>
                </div> 
            </div>

            <form action="<?php echo base_url(); ?>Transaksi/update/<?php echo $id; ?>" method="post" accept-charset="utf-8">
              <div class="form-group">
                <!-- <input type="hidden" name="id" value="<?php echo $id; ?>"> -->
              <label class="control-label col-lg-6">Status Pengiriman Barang</label>
                <div class="col-xs-9">
                  <select name="status_pengiriman" class="form-control">
                    <?php if ($status_pengiriman == '0'){
                      echo    '<option value="0" disabled selected>Proses</option>
                              <option value="1">Sudah Diterima</option>
                              <option value="2" disabled>Pengiriman</option>';
                      }elseif ($status_pengiriman == '1') {
                      echo '<option value="0" disabled>Proses</option>
                            <option value="1" selected>Sudah Diterima</option>
                            <option value="2" disabled>Pengiriman</option>';
                      }else{
                      echo    '<option value="0" disabled>Proses</option>
                              <option value="1">Sudah Diterima</option>
                              <option value="2" disabled selected>Pengiriman</option>';
                    }?>
                  </select>   
                 </div>               
                <?php } ?>              
              </div>
              <div class="form-group">
              <label class="control-label col-lg-12">Tombol Konfirmasi Barang Telah Diterima</label>
                <center>
                  <div class="col-xs-6">
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                  </div>
                </center> 
            </div>
            </form>
          </div>     
        </div>
         <div class="col-md-4">
           <?php foreach ($reservasi->result_array() as $row) {
              $user=$row['k_username'];
              $nm=$row['nama'];
              $alamat=$row['alamat'];
              $kd_pos=$row['kd_pos'];
              $no_hp=$row['no_hp'];
              $nofak=$row['k_jual_nofak'];
              $status_byr=$row['status_bayar'];
              $ft=$row['ft_bukti_bayar'];
              $status_pengiriman=$row['status_pengiriman'];
              ?>
          <div class="row s_product_inner">
            <label>Foto Pembayaran : <img height="300px" width="300px" src="<?= base_url(); ?>./assets2/images/bukti/<?= $ft; ?>"></label>
          </div> 
          <?php } ?>    
        </div>
      </div>
      <hr>
    </div>
  </div>

<?php $this->load->view('layout/user/footer'); ?>
