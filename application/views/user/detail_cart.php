<?php $this->load->view('layout/user/header'); ?>



<!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">
      <div class="row s_product_inner">
        <div class="container h-100">
          <div class="blog-banner">
            <div class="text-center">
              <h1>Transaksi Pembayaran</h1>
              <nav aria-label="breadcrumb" class="banner-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Pastikan anda sudah memilih barang yang anda pesan dan anda simpan. Jika sudah silakan lakukan pembayaran dan untuk pengecekan pengiriman barang bisa dilihat di menu status.</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row s_product_inner">
            <div id="laporan">
               
                <br>
                <br>

                <?php 
                    $b=$data->row_array();
                ?>
                <table border="0" align="center" style="width:500px;border:none;">
                        <tr>
                            <th style="text-align:left;">No Faktur</th>
                            <th style="text-align:left;">: <?php echo $b['jual_nofak'];?></th>
                            <th style="text-align:left;">Total</th>
                            <th style="text-align:left;">: <?php echo 'Rp '.number_format($b['jual_total']).',-';?></th>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Tanggal</th>
                            <th style="text-align:left;">: <?php echo $b['jual_tanggal'];?></th>
                            <!-- <th style="text-align:left;">Tunai</th>
                            <th style="text-align:left;">: <?php echo 'Rp '.number_format($b['jual_jml_uang']).',-';?></th> -->
                        </tr>
                        <tr>
                            <th style="text-align:left;">Keterangan</th>
                            <th style="text-align:left;">: <?php echo $b['jual_keterangan'];?></th>
                            <!-- <th style="text-align:left;">Kembalian</th>
                            <th style="text-align:left;">: <?php echo 'Rp '.number_format($b['jual_kembalian']).',-';?></th> -->
                        </tr>
                </table>

                <table border="1" align="center" style="width:500px;margin-bottom:20px;">
                <thead>

                    <tr>
                        <th style="width:50px;">No</th>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                        <th>Harga Jual</th>
                        <th>Qty</th>
                        <!-- <th>Diskon</th> -->
                        <th>SubTotal</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $no=0;
                    foreach ($data->result_array() as $i) {
                        $no++;
                        
                        $nabar=$i['d_jual_barang_nama'];
                        $satuan=$i['d_jual_barang_satuan'];
                        
                        $harjul=$i['d_jual_barang_harjul'];
                        $qty=$i['d_jual_qty'];
                        $diskon=$i['d_jual_diskon'];
                        $total=$i['d_jual_total'];
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        <td style="text-align:left;"><?php echo $nabar;?></td>
                        <td style="text-align:center;"><?php echo $satuan;?></td>
                        <td style="text-align:right;"><?php echo 'Rp '.number_format($harjul);?></td>
                        <td style="text-align:center;"><?php echo $qty;?></td>
                        <!-- <td style="text-align:right;"><?php echo 'Rp '.number_format($diskon);?></td> -->
                        <td style="text-align:right;"><?php echo 'Rp '.number_format($total);?></td>
                    </tr>
                <?php }?>
                </tbody>
                <tfoot>

                    <tr>
                        <td colspan="5" style="text-align:center;"><b>Total</b></td>
                        <td style="text-align:right;"><b><?php echo 'Rp '.number_format($b['jual_total']);?></b></td>
                    </tr>
                </tfoot>
                </table>
              </div>
            </div>
        </div>

        <div class="col-md-6">
          <div class="row s_product_inner">
            <div class="s_product_text">
              <form action="<?php echo base_url(); ?>Transaksi/pembayaran" class="form-contact contact_form" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
                     
                      <?php foreach ($transaksi->result_array() as $i){
                        $username=$i['username'];
                        // $nofak=$i['jual_nofak'];
                       ?> 
                        <input type="hidden" name="username" value="<?php echo $username; ?>">
                      <?php } ?> 
                        <?php 
                            $b=$data->row_array();
                        ?>
                        <input type="hidden" name="nofak" value="<?php echo $b['jual_nofak']; ?>">
                      

                      <hr>
                      <h6>Barang akan diproses setelah anda melakukan pembayaran.</h6>
                      <hr>
                  <div class="col-lg-12">
                      <b>No_Rekening : 85052043 (BNI)</b>
                      <br>
                      <b>Tentukan harga ongkos kirim. Tambahkan harga tersebut dengan pembelian barang</b>
                      <div class="form-group">
                          <select name="" placeholder="pilih biaya ongkos kirim" class="form-control">
                            <option>0km-3km Rp.12.000</option>
                            <option>3km-15km Rp.18.000</option>
                            <option>15km-30km Rp.25.000</option>
                            <option>30km-50km Rp.50.000</option>
                          </select>
                      </div>
                  </div>
                  <br>
                  <div class="col-lg-12">
                      Foto bukti pembayaran :
                      <hr>
                            <div class="form-group">
                              <input class="form-control" name="input_gambar" id="input_gambar" type="file" placeholder="Pilih Gambar" title="masukan foto struk pembayaran">
                            </div>
                  </div>
                        <div class="form-group text-center text-md-right mt-3">
                          <button type="submit" class="button primary-btn">Kirim</button>
                        </div>
              </form>
            </div>
          </div>
        </div>

      </div>
      <hr>
    </div>
  </div>
  <!--================End Single Product Area =================--> 

<br>
<br>
<br>
<br>
<br>


<?php $this->load->view('layout/user/footer'); ?>
