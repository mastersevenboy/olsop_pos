<!-- header area start -->
        <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <?php $h=$this->session->userdata('akses'); ?>
                    <?php $u=$this->session->userdata('user'); ?>
                    <?php if($h=='1'){ ?> 
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li>
                                        <a href="javascript:void(0)"><i class="ti-shopping-cart-full"></i><span>Transaksi</span></a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo base_url().'admin/penjualan'?>">Transaksi Penjualan Ecer</a></li>
                                            <li><a href="<?php echo base_url().'admin/penjualan_grosir'?>">Transaski Penjualan Grosir</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="mega-menu">
                                        <a href="<?php echo base_url(); ?>admin/Laporan"><i class="ti-printer"></i><span>Laporan</span></a>
                                    </li>
                                    <li class="mega-menu">
                                        <a href="<?php echo base_url(); ?>admin/Backrest"><i class="ti-direction-alt"></i> <span>Backup Data</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <?php }?>

                    <?php if($h=='2'){ ?> 
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li>
                                        <a href="javascript:void(0)"><i class="ti-shopping-cart-full"></i><span>Transaksi</span></a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo base_url().'admin/penjualan'?>">Transaksi Penjualan Ecer</a></li>
                                            <li><a href="<?php echo base_url().'admin/penjualan_grosir'?>">Transaski Penjualan Grosir</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="mega-menu">
                                        <a href="<?php echo base_url(); ?>admin/Laporan"><i class="ti-printer"></i><span>Laporan</span></a>
                                    </li>
                                    <!-- <li class="mega-menu">
                                        <a href="javascript:void(0)"><i class="ti-direction-alt"></i> <span>Backup & Restore</span></a>
                                        <ul class="submenu">
                                            <li><a href="login.html">Backup Data</a></li>
                                            <li><a href="login2.html">Restore Data</a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <?php }?>
                    <!-- nav and search button -->
                    <div class="col-lg-3 clearfix">
                        <div class="search-box">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- mobile_menu -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
<!-- header area end -->
    

