<?php $this->load->view('layout/user/header'); ?>


  <!--================Cart Area =================-->
  <section class="cart_area">
      <div class="container">
        <div class="container h-200">
          <div class="blog-banner">
            <div class="text-center">
              <h1>Produk</h1>
              <nav aria-label="breadcrumb" class="banner-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <?php 
            foreach ($data->result_array() as $a){
            $id=$a['barang_id'];
            $nm=$a['barang_nama'];
            $satuan=$a['barang_satuan'];
            $harpok=$a['barang_harpok'];
            $harjul=$a['barang_harjul'];
            $harjul_grosir=$a['barang_harjul_grosir'];
            $stok=$a['barang_stok'];
            $min_stok=$a['barang_min_stok'];
            $kat_id=$a['barang_kategori_id'];
            $kat_nama=$a['kategori_nama'];
            $foto=$a['foto'];
          ?>
          <div class="col-md-12 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" height="263" width="280" src="<?php echo base_url(); ?>assets2/images/barang/<?php echo $foto; ?>" alt="">
                <ul class="card-product__imgOverlay">
                </ul>
              </div>
              <form action="<?php echo base_url() ?>Cart/add_cart" method="POST">
                <div class="card-body">
                <input type="hidden" name="kode_brg" value="<?php echo $id ?>">
                <input type="hidden" name="barang_nama" value="<?php echo $nm ?>">
                <input type="hidden" name="harjul" value="<?php echo $harjul ?>">
                <input type="hidden" name="barang_satuan" value="<?php echo $satuan;?>" style="width:120px;margin-right:5px;" class="form-control input-sm" readonly>
                <p><?php echo $kat_nama; ?></p>
                <h4 class="card-product__title"><a ><?php echo $nm; ?></a></h4>
                <p class="card-product__price">Rp. <?php echo $harjul; ?></p>
              </div>
              <div>
                 <input type="number" name="qty" alue="1" max="<?php echo $stok;?>" min="1" style="width:80px;margin-right:5px;" required>
                 <button type="submit" class="add_cart btn btn-success">add cart</button>
              </div>  
              </form>
              <p>catatan: Pembelian Max 5 per item/kg</p>
            </div>
          </div>
        <?php
        }
        ?>
        </div>
        <div class="container h-200">
          <div class="blog-banner">
            <div class="text-center">
              <h1>Daftar Cart Anda</h1>
              <nav aria-label="breadcrumb" class="banner-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"></li>
                   <!-- <div id="detail_barang" style="position:absolute;">
                    </div> -->
                </ol>
              </nav>
            </div>
          </div>
        </div>
          <div class="container col-md-8">
            <div class="row col-md-12">
              <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Satuan</th>
                                <th>Harga Barang</th>
                                <th style="text-align:center;">Qty</th>
                                <th style="text-align:center;">Sub Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1; ?>
                          <?php foreach ($this->cart->contents() as $items): ?>
                          <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                          <tr>
                               <td><?=$i;?></td>
                               <td><?=$items['id'];?></td>
                               <td><?=$items['name'];?></td>
                               <td style="text-align:center;"><?=$items['satuan'];?></td>
                               <td style="text-align:right;"><?php echo number_format($items['amount']);?></td>
                               <!-- <td style="text-align:right;"><?php echo number_format($items['disc']);?></td> -->
                               <td style="text-align:center;"><?php echo number_format($items['qty']);?></td>
                               <td style="text-align:right;"><?php echo number_format($items['subtotal']);?></td>
                              
                               <td style="text-align:center;"><a href="<?php echo base_url().'Cart/remove/'.$items['rowid'];?>" class="btn btn-warning btn-xs"><span class="fa fa-close"></span> Batal</a></td>
                          </tr>
                          
                          <?php $i++; ?>
                          <?php endforeach; ?>
                        </tbody>
                    </table>
                    <hr>
                    <form action="<?php echo base_url().'Cart/simpan_penjualan'?>" method="post">
                      <table>
                        <tr>
                        <td style="width:760px;" rowspan="2"><button type="submit" class="btn btn-info btn-lg"> Simpan</button> | <a href="<?php echo base_url() ?>Cart/cetak_faktur" type="button" class="btn btn-info btn-lg"> Cetak Faktur</a> | <a href="<?php echo base_url() ?>Transaksi" type="button" class="btn btn-info btn-lg"> Pembayaran</a></td>
                        <th style="width:140px;">Total Belanja(Rp)</th>
                        <th style="text-align:right;width:140px;"><input type="text" name="total2" value="<?php echo number_format($this->cart->total());?>" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" readonly></th>
                        <input type="hidden" id="total" name="total" value="<?php echo $this->cart->total();?>" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" readonly>
                        </tr>
                      </table>
                    </form>
                </div>
                <p>CATATAN : silakan simpan pilihan barang anda jika sudah silakan tekan cetak untuk bukti dan untuk pembayaran silakan ke menu transaksi</p>
              </div>
            </div> 
          </div>
      </div>
  </section>
  <!--================End Cart Area =================-->  
 

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  


   

<?php $this->load->view('layout/user/footer'); ?>
 
  
<script type="text/javascript">
        $(function(){
            $('#jml_uang').on("input",function(){
                var total=$('#total').val();
                var jumuang=$('#jml_uang').val();
                var hsl=jumuang.replace(/[^\d]/g,"");       
                $('#jml_uang2').val(hsl);
                $('#kembalian').val(hsl-total);
            })
            
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#mydata').DataTable();
        } );
    </script>

    <script type="text/javascript">
        $(function(){
            $('.jml_uang').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
            $('#jml_uang2').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ''
            });
            $('#kembalian').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
            $('.harjul').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            //Ajax kabupaten/kota insert
            $("#kode_brg").focus();
            $("#kode_brg").on("input",function(){
                var kobar = {kode_brg:$(this).val()};
                   $.ajax({
               type: "POST",
               url : "<?php echo base_url().'Cart';?>",
               data: kobar,
               success: function(msg){
               $('').html(msg);
               }
            });
            }); 

            $("#kode_brg").keypress(function(e){
                if(e.which==13){
                    $("#jumlah").focus();
                }
            });
        });
    </script>

</body>

</html>

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker').datetimepicker({
                    format: 'DD MMMM YYYY HH:mm',
                });
                
            $('#datepicker').datetimepicker({
                    format: 'YYYY-MM-DD',
                });
             $('#datepicker2').datetimepicker({
                    format: 'YYYY-MM-DD',
                });

            $('#timepicker').datetimepicker({
                    format: 'HH:mm'
                });
            });
    </script>