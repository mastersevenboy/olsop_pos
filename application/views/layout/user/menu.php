<style>
    .body-mn{
        color: #fff;
        background-color: #FF9900;
        /*background-image: url(<?php echo base_url();?>assets2/images/bg1.jpg);*/
        background-repeat: no-repeat center center;
        background-attachment: fixed;
        /*background-size: 1500px 800px;*/
    }
</style>
<div class="body-mn main-menu">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand logo_h" href="<?php echo base_url(); ?>Beranda"><img src="<?php echo base_url(); ?>assets2/images/logo.png" width="30" height="30" alt=""> Ms. Bram Mouse Farm</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
        <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>Beranda">Beranda</font></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>Produk">Produk</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>Contak">Contact us</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>About">About Us</a></li>
        </ul>
          <form action="<?php echo base_url(); ?>Cart" method="post">
            <ul class="nav-shop">
              <li class="nav-item"><button type="submit"><i class="ti-shopping-cart"></i><span class="nav-shop__circle"></span></button></li>
              <?php if ($this->session->userdata('level') == '3') { ?>
              <li class="nav-item"><a href="<?php echo base_url(); ?>Transaksi"><i class="ti-money"></i> Transaksi</a> </li>
              <li class="nav-item"><a href="<?php echo base_url(); ?>Transaksi/status"><i class="ti-truck"></i> Status</a> </li>
              <?php } ?>
              <?php if ($this->session->userdata('level') == null) { ?>
                <li class="nav-item"><a class="button button-header" href="<?php echo base_url(); ?>Login">Login</a></li>
              <?php  } else { ?>
                <li class="nav-item"><a class="button button-header" href="<?php echo base_url(); ?>Login/logout">Logout</a></li>
              <?php } ?>
            </ul>
          </form>
      </div>
    </div>
  </nav>
</div>

