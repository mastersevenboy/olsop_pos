<?php $this->load->view('layout/user/header'); ?>


<?php foreach ($detail as $row): ?>       
<!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">
      <div class="row s_product_inner">
        <div class="col-lg-8">
          <div class="login_box_img">
            <div class="single-prd-item">
              <img class="img-fluid" height="530" width="450" src="<?php echo base_url(); ?>assets2/images/barang/<?php echo $row->foto ?>" alt="">
            </div> 
          </div>
        </div>        
        <div class="col-lg-3 offset-lg-1">
          
          <div class="s_product_text">
            <!-- <div class="card card-product"> -->
            <h1><font color="blue"><?php echo $row->barang_nama ?></font></h1>
            <!-- <h3>Rp. <?php echo $row->barang_harjul ?></h3> -->
            
            <ul class="list">
              <li><a><h2><span>Harga</span> : <?php echo $row->barang_harjul; ?></h2></a></li>
              <li><a class="active"><h2><span>Kategori</span> : <?php echo $row->kategori_nama; ?></h2></a></li>
              <li><a class="active"><h2><span>Stok </span> : <?php echo $row->barang_stok;?></h2></a></li>
              <li><a class="active"><h2><span>Satuan</span> : <?php echo $row->barang_satuan;?></h2></a></li>
            </ul>
            
              <p><b>Keterangan : Pembelian maksimal 10 barang/ 10kg per item</b></p>
              <hr>
              
              <form action="<?php echo base_url(); ?>Cart" class="form-contact contact_form" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-12">
                  <!-- <input type="hidden" name="kode_brg" id="kode_brg" value="<?php echo $row->barang_id ?>"> -->
                  </div>
                <div class="form-group text-center text-md-right mt-3">
                  <button type="submit" class="button primary-btn">Order Now</button>
                </div>
                </div>
              </form>
            <!-- </div> -->
          </div>
          
        </div>
      </div>
    
    </div>
  </div>
  <br>
  <br>
  <!--================End Single Product Area =================--> 

<?php endforeach ?>



<?php $this->load->view('layout/user/footer'); ?>

