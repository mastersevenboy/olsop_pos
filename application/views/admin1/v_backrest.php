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

<body class="body-bg">

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

<!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"><a href="<?php echo base_url().'welcome'?>">Home</a></h4>
                            <ul class="breadcrumbs pull-left">
                                <li>/</li>
                                <li><span>Pemulihan Data</span></li>  |   <?php echo $this->session->flashdata('msg');?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                             <h4 class="user-name">Backup Data</h4>
                        </div>
                    </div>
                </div>
            </div>
    <!-- page title area end -->
    <br>
    <br>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong>Backup</strong> 
                </div>
                <div class="card-body card-block">
                    <form action="<?php echo base_url(); ?>admin/backrest/backup" method="POST" class="form-horizontal" enctype='multipart/form-data'>
                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <input type="text" id="input3-group1" name="input3-group1" placeholder="Silakan click tombol backup untuk membackup data anda" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                           <button type="submit" class="btn btn-primary btn-lg btn-block">
                                <i class="fa fa-refresh"></i> Backup
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong>Restore</strong>
                </div>
                <div class="card-body card-block">
                    <form enctype='multipart/form-data' action="<?php echo base_url(); ?>admin/Backrest/restore" method="post" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <strong>Silakan pilih file database anda dengan format '.sql' dan click tombol restore untuk mengembalikan data.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="datafile" class="form-control-file"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning btn-lg btn-block">
                                <i class="fa fa-refresh"></i> Restore
                            </button>
                        </div>
                    </form>
                </div>
                </div>
            </div> -->
        </div>
</div>  
    <?php 
        $this->load->view('admin1/footer');
    ?>
</div>




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