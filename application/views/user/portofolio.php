<?php $this->load->view('layout/user/header'); ?>


  <!-- ================ category section start ================= -->      

    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <div class="section-headline text-center">
              <h1>Produk Pilihan</h1>
          </div>
        </div>
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
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" height="263" width="280" src="<?php echo base_url(); ?>assets2/images/barang/<?php echo $foto; ?>" alt="">
                <ul class="card-product__imgOverlay">
                  <form action="<?php echo base_url(); ?>Produk/detail/<?php echo  $id; ?>" method="POST">
                  <li><button type="submit"><i class="ti-search"></i></button></li>
                  </form>
                </ul>
              </div>
              <div class="card-body">
                <p><?php echo $kat_nama; ?></p>
                <h4 class="card-product__title"><a><?php echo $nm; ?></a></h4>
                <p class="card-product__title">Rp. <?php echo $harjul; ?></p>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
        </div>
      </div>
    </section>

  
<?php $this->load->view('layout/user/footer'); ?>
