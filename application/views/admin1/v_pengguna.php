<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Pengguna - Aplikasi Ms. Bram Mouse Farm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url(); ?>assets2/images/logo.png" type="image/png">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/metisMenu.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
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
                                <li><span>Data Pengguna</span></li>  |   <?php echo $this->session->flashdata('msg');?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <a href="" data-toggle="modal" data-target="#largeModal"><h4 class="user-name">Tambah Pengguna<i class="fa fa-plus-circle"></i></h4></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->

    <!-- Primary table start -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- Primary table start -->
                    <div class="col-12 mt-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Table Pengguna</h4>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th style="text-align:center;width:40px;">No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th style="text-align:center;width:65px;">Level</th>
                                                <th style="text-align:center;width:65px;">Status</th>
                                                <th>Action</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $no=0;
                                            foreach ($data->result_array() as $a):
                                                $no++;
                                                $id=$a['user_id'];
                                                $nm=$a['user_nama'];
                                                $username=$a['user_username'];
                                                $password=$a['user_password'];
                                                $level=$a['user_level'];
                                                $status=$a['user_status'];
                                        ?>
                                            <tr>
                                                <td style="text-align:center;"><?php echo $no;?></td>
                                                <td><?php echo $nm;?></td>
                                                <td><?php echo $username;?></td>
                                                <td><?php echo $password;?></td>
                                                <td><?php if ($level==1) {
                                                    echo '<span class="badge bg-cyan">Admin</span>';
                                                }else{
                                                    echo '<span class="badge bg-red">Kasir</span>';
                                                } 
                                                ?></td>
                                                <td><?php if ($status==1) {
                                                    echo '<span class="badge bg-cyan">Aktif</span>';
                                                }else{
                                                    echo '<span class="badge bg-red">Tidak Aktif</span>';
                                                } 
                                                ?></td>
                                                <td style="text-align:center;">
                                                    <a class="btn btn-xs btn-warning" href="#modalEditPelanggan<?php echo $id?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>|
                                                    <a class="btn btn-xs btn-danger" href="#modalHapusPelanggan<?php echo $id?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Nonaktifkan</a>
                                                </td>
                                                <td></td>
                                            </tr>
                                        <?php endforeach;?>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Primary table end -->
                </div>
            </div>
    <!-- Primary table end -->
    
    </div>
       
    <?php 
        $this->load->view('admin1/footer');
    ?>
    </div>


<!-- ============ MODAL HAPUS =============== -->
        <?php
                    foreach ($data->result_array() as $a) {
                        $id=$a['user_id'];
                        $nm=$a['user_nama'];
                        $username=$a['user_username'];
                        $password=$a['user_password'];
                        $level=$a['user_level'];
                        $status=$a['user_status'];
                    ?>
                <div id="modalHapusPelanggan<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nonaktifkan Pengguna</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/pengguna/nonaktifkan'?>">
                        <div class="modal-body">
                            <p>Yakin mau menonaktifkan pengguna <b><?php echo $nm;?></b>..?</p>
                                    <input name="kode" type="hidden" value="<?php echo $id; ?>">
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-primary">Nonaktifkan</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>

<!-- basic modal Tambah start -->
    <div class="modal fade" id="largeModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/pengguna/tambah_pengguna'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-12" >Nama</label>
                        <div class="col-xs-12">
                            <input name="nama" class="form-control" type="text" placeholder="Input Nama..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-12" >Username</label>
                        <div class="col-xs-12">
                            <input name="username" class="form-control" type="text" placeholder="Input Username..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-12" >Password</label>
                        <div class="col-xs-12">
                            <input name="password" class="form-control" type="password" placeholder="Input Password..." required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-12" >Ulangi Password</label>
                        <div class="col-xs-12">
                            <input name="password2" class="form-control" type="password" placeholder="Ulangi Password..." required>
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-xs-12" >Level</label>
                        <div class="col-xs-12">
                            <select name="level" class="form-control" required>
                                <option value="1">Admin</option>
                                <option value="2">Kasir</option>
                            </select>
                        </div>
                    </div>   

                    <div class="form-group">
                        <label class="control-label col-xs-12" >Status</label>
                        <div class="col-xs-12">
                            <select name="status" id="status" class="form-control form-control">
                                <!-- <option value="">Pilih Status</option> -->
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>   
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
        </div>
    </div>
                  
<!-- basic modal end -->

<!-- basic modal Edit start -->
<?php
    foreach ($data->result_array() as $a) {
    $id=$a['user_id'];
    $nm=$a['user_nama'];
    $username=$a['user_username'];
    $password=$a['user_password'];
    $level=$a['user_level'];
    $status=$a['user_status'];
?>

    <div class="modal fade" id="modalEditPelanggan<?php echo $id?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/pengguna/edit_pengguna'?>">
                        <div class="modal-body">
                            <input name="kode" type="hidden" value="<?php echo $id;?>">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
                            <input name="nama" class="form-control" type="text" value="<?php echo $nm;?>" placeholder="Input Nama..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-9">
                            <input name="username" class="form-control" type="text" value="<?php echo $username;?>" placeholder="Input Username..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-9">
                            <input name="password" class="form-control" type="password" placeholder="Input Password...">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Ulangi Password</label>
                        <div class="col-xs-9">
                            <input name="password2" class="form-control" type="password" placeholder="Ulangi Password...">
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Level</label>
                        <div class="col-xs-9">
                            <select name="level" id="level" class="form-control form-control">
                                <?php if ($level=='1'):?>
                                    <option value="1" selected>Admin</option>
                                    <option value="2">Kasir</option>
                                    <option value="3">User</option>
                                <?php elseif ($level=='2'):?>
                                    <option value="1">Admin</option>
                                    <option value="2" selected>Kasir</option>
                                    <option value="3">User</option>
                                <?php else:?>
                                    <option value="1">Admin</option>
                                    <option value="2">Kasir</option>
                                    <option value="3"  selected>User</option>
                                <?php endif;?>
                            </select>   
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status</label>
                        <div class="col-xs-9">
                            <select name="status" id="status" class="form-control form-control">
                                <?php if ($status=='1'):?>
                                    <option value="1" selected>Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                <?php else:?>
                                    <option value="1">Aktif</option>
                                    <option value="0" selected>Tidak Aktif</option>
                                <?php endif;?>
                            </select>   
                        </div>
                    </div>



                </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
?>                 
<!-- basic modal end -->

    <!-- jquery latest version -->
    <script src="<?php echo base_url();?>assets2/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url();?>assets2/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets2/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets2/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets2/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>assets2/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>assets2/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="<?php echo base_url();?>assets2/js/plugins.js"></script>
    <script src="<?php echo base_url();?>assets2/js/scripts.js"></script>
</body>

</html>

