<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Pembelanja Online- Aplikasi Ms. Bram Mouse Farm</title>
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
                                <li><span>Data Pembelanja Online</span></li>  |   <?php echo $this->session->flashdata('msg');?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name">Pembelanja Online</h4>
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
                                <h4 class="header-title">Data Table Pesanan</h4>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th style="text-align:center;width:40px;">No</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">No Faktur</th>                                                       
                                                <th scope="col">Foto Bukti Bayar</th>                  
                                                <th scope="col">Status Bayar</th>
                                                <th scope="col">Bukti Bayar</th>
                                                <th scope="col">Status Pengiriman</th>
                                                <th scope="col">Action</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach ($reservasi->result_array() as $row) { 
                                                $no++;
                                                $id=$row['id'];
                                                $user=$row['k_username'];
                                                $nofak=$row['k_jual_nofak'];
                                                $ft=$row['ft_bukti_bayar'];
                                                $status_bayar=$row['status_bayar'];
                                                $status_pengiriman=$row['status_pengiriman'];
                                            ?> 
                                          <tr>
                                              <td><?php echo $no; ?></td>
                                              <td>
                                                  <?php echo $user ?>
                                              </td>
                                              <td>
                                                  <?php echo $nofak ?>
                                              </td>
                                              <td>
                                                  <img height="100px" width="100px" src="<?= base_url(); ?>./assets2/images/bukti/<?= $ft; ?>">
                                              </td>
                                              <td>
                                                  <?php if ($status_bayar == 0) {
                                                    echo 'Belum bayar'; 
                                                  } else {
                                                    echo 'Sudah Bayar';
                                                  }?>
                                              </td>
                                              <td>
                                                  <?php if ($ft != null) {
                                                    echo 'Sudah Dikirim';
                                                  } else {
                                                    echo 'Belum Dikirim'; 
                                                  }?>
                                              </td>
                                              <td>
                                                <?php if(($status_pengiriman) == 0){
                                                    echo "Proses";
                                                }elseif (($status_pengiriman) == 1) {
                                                    echo "Sudah Diterima";
                                                }else{
                                                    echo "Pengiriman";
                                                }
                                                ?>
                                              </td>
                                              <td>
                                                <a class="btn btn-xs btn-warning" href="#modalkeranjangEdit<?php echo $id;?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a> |
                                                <a class="btn btn-xs btn-danger" href="#modalHapus<?php echo $id;?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
                                              </td>
                                              <td></td>
                                            </tr>
                                         <?php } ?>
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
<?php foreach ($reservasi->result_array() as $row) { 
    $id=$row['id'];
    $user=$row['k_username'];
    $nama=$row['nama'];
    $nofak=$row['k_jual_nofak'];
    $ft=$row['ft_bukti_bayar'];
    $status_bayar=$row['status_bayar'];
    $status_pengiriman=$row['status_pengiriman'];
 ?>       
                <div id="modalHapus<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Pemesan Yang Sudah Selesai</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/Keranjang/hapus_keranjang'?>">
                        <div class="modal-body">
                            <p>Pastikan Proses Transaksi Sudah Selesai <b><?php echo $nama;?></b>..?</p>
                            <input name="id" type="hidden" value="<?php echo $id;?>">
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
                            <button type="submit" class="btn btn-primary">Sudah Hapus</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
<?php } ?>        

<!-- basic modal Edit start -->

<?php $no=1; foreach ($reservasi->result_array() as $row) { 
    $no++;
    $id=$row['id'];
    $nabar=$row['d_jual_barang_nama'];
    $satuan=$row['d_jual_barang_satuan'];                                    
    $harjul=$row['d_jual_barang_harjul'];
    $qty=$row['d_jual_qty'];
    $diskon=$row['d_jual_diskon'];
    $total=$row['d_jual_total'];
    $b=$row['jual_total'];
    $user=$row['k_username'];
    $nama=$row['nama'];
    $alamat=$row['alamat'];
    $kd_pos=$row['kd_pos'];
    $no_hp=$row['no_hp'];
    $nofak=$row['k_jual_nofak'];
    $ft=$row['ft_bukti_bayar'];
    $status_bayar=$row['status_bayar'];
    $status_pengiriman=$row['status_pengiriman'];
 ?> 
  <div class="modal fade" id="modalkeranjangEdit<?php echo $id;?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/Keranjang/edit_keranjang/<?php echo $id;?>">
                    <div class="modal-body">
                           <!--  <input name="id" type="hidden" value="<?php echo $id;?>"> -->
                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Faktur</label>
                        <div class="col-xs-9">
                            <input name="id" class="form-control" type="text" value="<?php echo $nofak;?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pemesan</label>
                        <div class="col-xs-9">
                            <input name="nama" class="form-control" type="text" value="<?php echo $nama;?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Data Barang</label>
                        <div class="col-xs-9">

                            <table border="1" align="center" style="width:450px;margin-bottom:20px;">
                            <thead>

                                <tr>
                                    <!-- <th style="width:50px;">No</th> -->
                                    <th>Nama Barang</th>
                                    <th>Satuan</th>
                                    <th>Harga Jual</th>
                                    <th>Qty</th>
                                    <!-- <th>Diskon</th> -->
                                    <th>SubTotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- <td style="text-align:center;"><?php echo $no;?></td> -->
                                    <td style="text-align:left;"><?php echo $nabar;?></td>
                                    <td style="text-align:center;"><?php echo $satuan;?></td>
                                    <td style="text-align:right;"><?php echo 'Rp '.number_format($harjul);?></td>
                                    <td style="text-align:center;"><?php echo $qty;?></td>
                                    <!-- <td style="text-align:right;"><?php echo 'Rp '.number_format($diskon);?></td> -->
                                    <td style="text-align:right;"><?php echo 'Rp '.number_format($total);?></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" style="text-align:center;"><b>Total</b></td>
                                    <td style="text-align:right;"><b><?php echo 'Rp '.number_format($b);?></b></td>
                                </tr>
                            </tfoot>
                            </table>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat</label>
                        <div class="col-xs-9">
                            <input name="alamat" class="form-control" type="text" value="<?php echo $alamat;?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Pos</label>
                        <div class="col-xs-9">
                            <input name="kd_pos" class="form-control" type="number" value="<?php echo $kd_pos;?>" readonly>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Hp</label>
                        <div class="col-xs-9">
                            <input name="no_hp" class="form-control" type="number" value="<?php echo $no_hp; ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                         <label class="control-label col-xs-3" >Foto Bukti Bayar</label>
                        <div class="col-xs-9" align="center">
                        <img  height="200px" width="200px" alt="<?= $ft; ?>" src="<?= base_url() ?>./assets2/images/bukti/<?= $ft; ?>">
                        <input data-toggle="tooltip" data-placement="top" name="filelama" value="<?=$ft;?>" type="hidden" class="form-control date" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status Bayar</label>
                        <div class="col-xs-9">
                            <select name="status_bayar" id="status" value="status" class="form-control form-control" disabled="">
                                <?php if ($status_bayar == '0'){
                                    echo    '<option value="0" selected>Belum Bayar</option>
                                            <option value="1">Sudah Bayar</option>';
                                    }else{
                                    echo    '<option value="0" >Belum Bayar</option>
                                            <option value="1" selected>Sudah Bayar</option>';
                                }?>
                            </select>   
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status Pengiriman</label>
                        <div class="col-xs-9">
                            <select name="status_pengiriman" class="form-control">
                                <?php if ($status_pengiriman == '0'){
                                  echo    '<option value="0" selected>Proses</option>
                                          <option value="1" disabled>Sudah Diterima</option>
                                          <option value="2">Pengiriman</option>';
                                  }elseif ($status_pengiriman == '1') {
                                  echo '<option value="0">Proses</option>
                                        <option value="1" disabled selected>Sudah Diterima</option>
                                        <option value="2">Pengiriman</option>';
                                  }else{
                                  echo    '<option value="0">Proses</option>
                                          <option value="1" disabled>Sudah Diterima</option>
                                          <option value="2"selected>Pengiriman</option>';
                                }?>
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
<?php } ?> 
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

