<!-- main header area start -->
        <div class="mainheader-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <!-- <div class="logo"> -->
                            <a href="<?php echo base_url().'Welcome'?>"><h1>Aplikasi Ms. Bram Mouse Farm</h1><!-- <img src="<?php echo base_url();?>assets2/images/logo.png" alt="logo"> --></a>
                        <!-- </div> -->
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 clearfix text-right">
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile m-0">
                                <img class="avatar user-thumb" src="<?php echo base_url();?>assets2/images/author/avatar.png" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('nama'); ?> <i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href=""><?php echo $this->session->userdata('nama'); ?></a>
                                    <a class="dropdown-item" href="">
                                        <?php if (($this->session->userdata('akses'))==1) {
                                            echo 'Admin';
                                            }else{
                                            echo "Kasir";
                                        } ?>
                                    </a>
                                    <a class="dropdown-item" href="<?php echo base_url().'administrator/logout'?>">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- main header area end -->