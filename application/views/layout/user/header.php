<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Ms. Bram Mouse Farm</title>
  <link rel="icon" href="<?php echo base_url(); ?>assets2/images/logo.png" type="image/png">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/user/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/user/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/user/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/user/vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/user/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/user/vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/user/css/style.css">
</head>
<style>
    body{
        /*color: green;*/
        background-color: #F98866;
       /* background-image: url(<?php echo base_url();?>assets2/images/bg1.jpg);
        background-repeat: no-repeat center center;
        background-attachment: fixed;
        background-size: 1500px 800px;*/
    }
</style>
<body>

  <!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <?php $this->load->view('layout/user/menu'); ?>
  </header>
	<!--================ End Header Menu Area =================-->