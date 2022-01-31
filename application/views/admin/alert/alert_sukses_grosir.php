<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cetak Faktur Penjualan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url(); ?>assets2/images/logo.png" type="image/png">
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
<body class="body-bg">


    <div id="preloader">
        <div class="loader"></div>
    </div>

    <div class="horizontal-main-wrapper">

    <!-- Navigation -->
    <?php 
        $this->load->view('admin1/header');
    ?>

     <?php 
        $this->load->view('admin1/menu');
    ?>

<br>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-success">
                    <strong>Transaksi Berhasil Silahkan Cetak Faktur Penjualan!</strong>
                    <a class="btn btn-default" href="<?php echo base_url().'admin/penjualan_grosir'?>"><span class="fa fa-backward"></span>Kembali</a>
                    <a class="btn btn-info" href="<?php echo base_url().'admin/penjualan_grosir/cetak_faktur_grosir'?>" target="_blank"><span class="fa fa-print"></span>Cetak</a>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
       
        

        <!--END MODAL-->

        <hr>

        <!-- Footer -->
        <?php 
        $this->load->view('admin1/footer');
        ?>

    </div>
    <!-- /.container -->

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
