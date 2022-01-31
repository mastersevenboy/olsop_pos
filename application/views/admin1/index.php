<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome Aplikasi Ms. Bram Mouse Farm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets2/images/logo.png">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/metisMenu.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/typography.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/default-css.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?php echo base_url();?>assets2/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<style>
    body{
        color: #fff;
        background-image: url(<?php echo base_url();?>assets2/images/bg1.jpg);
        background-repeat: no-repeat center center;
        background-attachment: fixed;
        background-size: 1500px 800px;
    }
</style>
<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
<div class="horizontal-main-wrapper">
    
    <?php 
        $this->load->view('admin1/header');
    ?>

    <?php 
        $this->load->view('admin1/menu');
    ?>

    <!-- Menu Tengah -->

    <div class="main-content-inner">
        <div class="container">
            <div class="row">
                <?php $h=$this->session->userdata('akses'); ?>
                <?php $u=$this->session->userdata('user'); ?>
                    <!-- seo fact area start -->
                    <?php if($h=='1'){ ?> 
                    <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-3 mt-5 mb-3">
                                <a href="<?php echo base_url(); ?>admin/Pengguna">
                                    <div class="card">
                                        <div class="seo-fact sbg1">
                                            <div class="p-4 d-flex justify-content-between align-items-center" data-toggle="modal" data-target=".bd-example-modal-sm">
                                                <div class="seofct-icon"><i class="ti-user"></i> Pengguna</div>
                                                <!-- <h2></h2> -->
                                            </div>
                                            <canvas id="seolinechart1" height="50"></canvas>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-md-3 mt-5 mb-3">
                                <a href="<?php echo base_url(); ?>admin/Pengguna/Costumer">
                                    <div class="card">
                                        <div class="seo-fact sbg1">
                                            <div class="p-4 d-flex justify-content-between align-items-center">
                                                <div class="seofct-icon"><i class="ti-user"></i> Data Costumer</div>
                                                <!-- <h2></h2> -->
                                            </div>
                                            <canvas id="seolinechart1" height="50"></canvas>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-md-3 mt-md-5 mb-3">
                                    <a href="<?php echo base_url(); ?>admin/Barang">
                                        <div class="card">
                                            <div class="seo-fact sbg2">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon"><i class="ti-shopping-cart"></i> Barang</div>
                                                    <!-- <h2>3,984</h2> -->
                                                </div>
                                                <canvas id="seolinechart2" height="50"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 mt-md-5 mb-3">
                                    <a href="<?php echo base_url(); ?>admin/Suplier">
                                        <div class="card">
                                            <div class="seo-fact sbg3">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon"><i class="ti-truck"></i> Suplier</div>
                                                    <!-- <h2>3,984</h2> -->
                                                </div>
                                                <canvas id="seolinechart2" height="50"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 mt-md-5 mb-3">
                                    <a href="<?php echo base_url(); ?>admin/Kategori">
                                        <div class="card">
                                            <div class="seo-fact sbg4">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon"><i class="ti-layout-list-thumb"></i> Kategori</div>
                                                   <!--  <h2>3,984</h2> -->
                                                </div>
                                                <canvas id="seolinechart2" height="50"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 mt-md-5 mb-3">
                                    <a href="<?php echo base_url(); ?>admin/Keranjang">
                                        <div class="card">
                                            <div class="seo-fact sbg3">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon"><i class="ti-shopping-cart-full"></i> Keranjang</div>
                                                   <!--  <h2>3,984</h2> -->
                                                </div>
                                                <canvas id="seolinechart2" height="50"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 mt-md-5 mb-3">
                                    <a href="<?php echo base_url(); ?>admin/Pembelian">
                                        <div class="card">
                                            <div class="seo-fact sbg2">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon"><i class="ti-import"></i> Pembelian</div>
                                                    <!-- <h2>3,984</h2> -->
                                                </div>
                                                <canvas id="seolinechart2" height="50"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 mt-md-5 mb-3">
                                    <a href="<?php echo base_url(); ?>admin/Penjualan" data-toggle="modal" data-target=".bd-example-modal-sm" >
                                        <div class="card">
                                            <div class="seo-fact sbg4">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon"><i class="ti-share"></i> Penjualan</div>
                                                    <!-- <h2>3,984</h2> -->
                                                </div>
                                                <canvas id="seolinechart2" height="50"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 mt-md-5 mb-3">
                                    <a href="<?php echo base_url(); ?>admin/Laporan">
                                        <div class="card">
                                            <div class="seo-fact sbg1">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon"><i class="ti-bar-chart"></i> Laporan</div>
                                                    <!-- <h2>3,984</h2> -->
                                                </div>
                                                <canvas id="seolinechart2" height="50"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    </div>
                    <?php }?>
                    <!-- seo fact area end -->

                    <!-- seo fact area start -->
                    
                    <div class="col-lg-12">
                            <div class="row">
                            <?php if($h=='2'){ ?> 
                                <div class="col-md-3 mt-md-5 mb-3">
                                    <div class="card">
                                        <div class="seo-fact sbg3">
                                            <div class="p-4 d-flex justify-content-between align-items-center">
                                                <div class="seofct-icon"><i class="ti-shopping-cart-full"></i> Keranjang</div>
                                               <!--  <h2>3,984</h2> -->
                                            </div>
                                            <canvas id="seolinechart2" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-md-5 mb-3">
                                    <a href="<?php echo base_url().'admin/penjualan'?>">
                                        <div class="card">
                                            <div class="seo-fact sbg2">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon"><i class="ti-share"></i> Pejualan Ecer</div>
                                                    <!-- <h2>3,984</h2> -->
                                                </div>
                                                <canvas id="seolinechart2" height="50"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 mt-md-5 mb-3">
                                    <a href="<?php echo base_url().'admin/penjualan_grosir'?>">
                                        <div class="card">
                                            <div class="seo-fact sbg4">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon"><i class="ti-share"></i> Penjualan Grosir</div>
                                                    <!-- <h2>3,984</h2> -->
                                                </div>
                                                <canvas id="seolinechart2" height="50"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 mt-md-5 mb-3">
                                    <a href="<?php echo base_url(); ?>admin/Laporan">
                                        <div class="card">
                                            <div class="seo-fact sbg1">
                                                <div class="p-4 d-flex justify-content-between align-items-center">
                                                    <div class="seofct-icon"><i class="ti-bar-chart"></i> Laporan</div>
                                                    <!-- <h2>3,984</h2> -->
                                                </div>
                                                <canvas id="seolinechart2" height="50"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    
                    <!-- seo fact area end -->
            </div>
        </div>
    </div>

    <!-- End Menu Tengah -->

</div>
       
    <?php 
        $this->load->view('admin1/footer');
    ?>
</div>


    <!-- Modal pemilihan penjualan -->
    
    <div class="modal fade bd-example-modal-sm">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pilihan Pejualan</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <!-- <div class="input-group">
 -->                        <div class="input-group-append">
                            <button class="btn btn-flat btn-primary btn-lg btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-shopping-cart-full"></i>  Penjualan</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url().'admin/penjualan'?>">Penjualan Ecer</a>
                                <a class="dropdown-item" href="<?php echo base_url().'admin/penjualan_grosir'?>">Penjualan Grosir</a>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal end pemilihan penjualan -->


    <!-- jquery latest version -->
    <script src="<?php echo base_url();?>assets2/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url();?>assets2/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets2/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets2/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets2/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>assets2/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>assets2/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="<?php echo base_url();?>assets2/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="<?php echo base_url();?>assets2/js/pie-chart.js"></script>
    <!-- all bar chart -->
    <script src="<?php echo base_url();?>assets2/js/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="<?php echo base_url();?>assets2/js/maps.js"></script>
    <!-- others plugins -->
    <script src="<?php echo base_url();?>assets2/js/plugins.js"></script>
    <script src="<?php echo base_url();?>assets2/js/scripts.js"></script>
</body>

</html>



