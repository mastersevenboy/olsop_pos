<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Suplier - Aplikasi Ms. Bram Mouse Farm</title>
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
                                <li><span>Data Suplier</span></li>  |   <?php echo $this->session->flashdata('msg');?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                        <a href="" data-toggle="modal" data-target="#largeModal"><h4 class="user-name">Tambah Suplier<i class="fa fa-plus-circle"></i></h4></a>
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
                                <h4 class="header-title">Data Table Suplier</h4>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th style="text-align:center;width:40px;">No</th>
                                                <th>Nama Suplier</th>
                                                <th>Alamat</th>
                                                <th>No Telp/HP</th>
                                                <th style="width:140px;text-align:center;">Action</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $no=0;
                                            foreach ($data->result_array() as $a):
                                                $no++;
                                                $id=$a['suplier_id'];
                                                $nm=$a['suplier_nama'];
                                                $alamat=$a['suplier_alamat'];
                                                $notelp=$a['suplier_notelp'];
                                        ?>
                                            <tr>
                                                <td style="text-align:center;"><?php echo $no;?></td>
                                                <td><?php echo $nm;?></td>
                                                <td><?php echo $alamat;?></td>
                                                <td><?php echo $notelp;?></td>
                                                <td style="text-align:center;">
                                                    <a class="btn btn-xs btn-warning" href="#modalEditPelanggan<?php echo $id?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                                                    <a class="btn btn-xs btn-danger" href="#modalHapusPelanggan<?php echo $id?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
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
    $id=$a['suplier_id'];
    $nm=$a['suplier_nama'];
    $alamat=$a['suplier_alamat'];
    $notelp=$a['suplier_notelp'];
?>
                <div id="modalHapusPelanggan<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Data Suplier</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/suplier/hapus_suplier'?>">
                        <div class="modal-body">
                            <p>Yakin mau menghapus data..?</p>
                                    <input name="kode" type="hidden" value="<?php echo $id; ?>">
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-primary">Hapus</button>
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
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/suplier/tambah_suplier'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-12" >Nama Suplier</label>
                        <div class="col-xs-12">
                            <input name="nama" class="form-control" type="text" placeholder="Nama Suplier..." required>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="control-label col-xs-12" >Alamat</label>
                        <div class="col-xs-12">
                            <input name="alamat" class="form-control" type="text" placeholder="Alamat..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-12" >No Telp/ HP</label>
                        <div class="col-xs-12">
                            <input name="notelp" class="form-control" type="text" placeholder="No Telp/HP..." required>
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
    $id=$a['suplier_id'];
    $nm=$a['suplier_nama'];
    $alamat=$a['suplier_alamat'];
    $notelp=$a['suplier_notelp'];
?>

    <div class="modal fade" id="modalEditPelanggan<?php echo $id?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Suplier</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/suplier/edit_suplier'?>">
                    <div class="modal-body">
                        <input name="kode" type="hidden" value="<?php echo $id;?>">

                        <div class="form-group">
                            <label class="control-label col-xs-12" >Nama Suplier</label>
                            <div class="col-xs-12">
                                <input name="nama" class="form-control" type="text" placeholder="Nama Suplier..." value="<?php echo $nm;?>" required>
                            </div>
                        </div>
                            
                        <div class="form-group">
                            <label class="control-label col-xs-12" >Alamat</label>
                            <div class="col-xs-12">
                                <input name="alamat" class="form-control" type="text" placeholder="Alamat..." value="<?php echo $alamat;?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-12" >No Telp/ HP</label>
                            <div class="col-xs-12">
                                <input name="notelp" class="form-control" type="text" placeholder="No Telp/HP..." value="<?php echo $notelp;?>" required>
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

