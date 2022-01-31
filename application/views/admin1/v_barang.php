<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Barang - Aplikasi Ms. Bram Mouse Farm</title>
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
                                <li><span>Data Barang</span></li>  |   <?php echo $this->session->flashdata('msg');?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <a href="" data-toggle="modal" data-target="#largeModal"><h4 class="user-name">Tambah Barang<i class="fa fa-plus-circle"></i></h4></a>
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
                                <h4 class="header-title">Data Table Barang</h4>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th style="text-align:center;width:40px;">No</th>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Satuan</th>
                                                <th>Harga Pokok</th>
                                                <th>Harga (Eceran)</th>
                                                <th>Harga (Grosir)</th>
                                                <th>Stok</th>
                                                <th>Min Stok</th>
                                                <th>Kategori</th>
                                                <th>Gambar</th>
                                                <th style="width:250px;text-align:center;">Action</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $no=0;
                                            foreach ($data->result_array() as $a):
                                                $no++;
                                                $id=$a['barang_id'];
                                                $nm=$a['barang_nama'];
                                                $satuan=$a['barang_satuan'];
                                                $harpok=$a['barang_harpok'];
                                                $harjul=$a['barang_harjul'];
                                                $harjul_grosir=$a['barang_harjul_grosir'];
                                                $stok=$a['barang_stok'];
                                                $min_stok=$a['barang_min_stok'];
                                                $kat_id=$a['barang_kategori_id'];
                                                $kat_nama=$a['kategori_nama'];
                                                $foto=$a['foto'];
                                        ?>
                                            <tr>
                                                <td style="text-align:center;"><?php echo $no;?></td>
                                                <td><?php echo $id;?></td>
                                                <td><?php echo $nm;?></td>
                                                <td style="text-align:center;"><?php echo $satuan;?></td>
                                                <td style="text-align:right;"><?php echo 'Rp '.number_format($harpok);?></td>
                                                <td style="text-align:right;"><?php echo 'Rp '.number_format($harjul);?></td>
                                                <td style="text-align:right;"><?php echo 'Rp '.number_format($harjul_grosir);?></td>
                                                <td style="text-align:center;"><?php echo $stok;?></td>
                                                <td style="text-align:center;"><?php echo $min_stok;?></td>
                                                <td><?php echo $kat_nama;?></td>
                                                <td><img height="100px" width="100px" src="<?= base_url(); ?>./assets2/images/barang/<?= $foto; ?>"></td>
                                                <td style="text-align:center;">
                                                    <a class="btn btn-xs btn-primary" href="#modalstok<?php echo $id?>" data-toggle="modal" title="tambah stok"><span class="fa fa-plus"></span> Tambah Stok</a> |
                                                    <a class="btn btn-xs btn-warning" href="#modalEditPelanggan<?php echo $id?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a> |
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
    $id=$a['barang_id'];
    $nm=$a['barang_nama'];
    $harpok=$a['barang_harpok'];
    $harjul=$a['barang_harjul'];
    $stok=$a['barang_stok'];
    $min_stok=$a['barang_min_stok'];
    $kat_id=$a['barang_kategori_id'];
    $kat_nama=$a['kategori_nama'];
    $foto=$a['foto'];
?>
                <div id="modalHapusPelanggan<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Data Barang</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/barang/hapus_barang'?>">
                        <div class="modal-body">
                            <p>Yakin mau menghapus data barang ini..?</p>
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
                    <h5 class="modal-title">Tambah Barang</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/barang/tambah_barang'?>" id="form_validation" enctype="multipart/form-data">
                <div class="modal-body">

                    <!--<div class="form-group">
                        <label class="control-label col-xs-3" >Kode Barang</label>
                        <div class="col-xs-9">
                            <input name="kobar" class="form-control" type="text" placeholder="Kode Barang..." style="width:335px;" required>
                        </div>
                    </div>-->

                    <div class="form-group">
                        <label for="" class="control-label col-xs-3">Gambar Barang</label>
                        <div class="col-12 col-md-9"><input type="file" name="input_gambar" id="file-input" class="form-control-file"></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3">Nama Barang</label>
                        <div class="col-xs-9">
                            <input name="nabar" class="form-control" type="text" placeholder="Nama Barang..." required>
                        </div>
                    </div>

                     <div class="form-group">
                            <label class="control-label col-xs-3" >Kategori</label>
                            <div class="col-xs-9">
                                <select name="kategori" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Kategori" data-width="80%" placeholder="Pilih Kategori" required>
                                <?php foreach ($kat2->result_array() as $k2) {
                                    $id_kat=$k2['kategori_id'];
                                    $nm_kat=$k2['kategori_nama'];
                                    ?>
                                        <option value="<?php echo $id_kat;?>"><?php echo $nm_kat;?></option>
                                <?php }?>
                                    
                                </select>
                            </div>
                        </div>

                 

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Satuan</label>
                        <div class="col-xs-9">
                             <select name="satuan" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Satuan" data-width="80%" placeholder="Pilih Satuan" required>
                                <option>Bks</option>
                                <option>PCS</option>
                                <option>Box</option>
                                <option>Gram</option>
                                <option>Kilogram</option>
                             </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga Pokok</label>
                        <div class="col-xs-9">
                            <input name="harpok" class="harpok form-control" type="text" placeholder="Harga Pokok...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga (Eceran)</label>
                        <div class="col-xs-9">
                            <input name="harjul" class="harjul form-control" type="text" placeholder="Harga Jual Eceran...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga (Grosir)</label>
                        <div class="col-xs-9">
                            <input name="harjul_grosir" class="harjul form-control" type="text" placeholder="Harga Jual Grosir...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Stok</label>
                        <div class="col-xs-9">
                            <input name="stok" class="form-control" type="number" placeholder="Stok...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Minimal Stok</label>
                        <div class="col-xs-9">
                            <input name="min_stok" class="form-control" type="number" placeholder="Minimal Stok...">
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
    $id=$a['barang_id'];
    $nm=$a['barang_nama'];
    $satuan=$a['barang_satuan'];
    $harpok=$a['barang_harpok'];
    $harjul=$a['barang_harjul'];
    $harjul_grosir=$a['barang_harjul_grosir'];
    $stok=$a['barang_stok'];
    $min_stok=$a['barang_min_stok'];
    $kat_id=$a['barang_kategori_id'];
    $kat_nama=$a['kategori_nama'];
    $foto=$a['foto'];
?>

    <div class="modal fade" id="modalEditPelanggan<?php echo $id?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Barang</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                 <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/barang/edit_barang'?>" id="form_validation" enctype="multipart/form-data">
                        <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Kode Barang</label>
                            <div class="col-xs-9">
                                <input name="kobar" class="form-control" type="text" value="<?php echo $id;?>" placeholder="Kode Barang..." readonly>
                            </div>
                        </div>

                        <div class="card-header" align="center">
                        <img  height="200px" width="200px" alt="<?= $foto; ?>" src="<?= base_url() ?>./assets2/images/barang/<?= $foto; ?>">
                        <input data-toggle="tooltip" data-placement="top" name="filelama" value="<?=$foto ?>" type="hidden" class="form-control date" placeholder="">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="" class="control-label col-xs-3">Gambar Barang</label>
                            <div class="col-12 col-md-9"><input type="file" name="input_gambar" id="file-input" class="form-control-file"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Nama Barang</label>
                            <div class="col-xs-9">
                                <input name="nabar" class="form-control" type="text" value="<?php echo $nm;?>" placeholder="Nama Barang..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Kategori</label>
                            <div class="col-xs-9">
                                <select name="kategori" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Kategori" data-width="80%" placeholder="Pilih Kategori" required>
                                <?php foreach ($kat2->result_array() as $k2) {
                                    $id_kat=$k2['kategori_id'];
                                    $nm_kat=$k2['kategori_nama'];
                                    if($id_kat==$kat_id)
                                        echo "<option value='$id_kat' selected>$nm_kat</option>";
                                    else
                                        echo "<option value='$id_kat'>$nm_kat</option>";
                                }
                                ?>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Satuan</label>
                            <div class="col-xs-9">
                                 <select name="satuan" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Satuan" data-width="80%" placeholder="Pilih Satuan" required>
                                    <?php if($satuan=='Bks'):?>
                                        <option selected>Bks</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='PCS'):?>
                                        <option>Bks</option>
                                        <option selected>PCS</option>
                                        <option>Box</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Box'):?>
                                        <option>Bks</option>
                                        <option>PCS</option>
                                        <option selected>Box</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Gram'):?>
                                        <option>Bks</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Gram</option>
                                        <option selected>Gram</option>
                                        <option>Kilogram</option>
                                    <?php else:?>
                                        <option>Bks</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Gram</option>
                                        <option>Gram</option>
                                        <option selected>Kilogram</option>
                                    <?php endif;?>
                                 </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Harga Pokok</label>
                            <div class="col-xs-9">
                                <input name="harpok" class="harpok form-control" type="text" value="<?php echo $harpok;?>" placeholder="Harga Pokok..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Harga (Eceran)</label>
                            <div class="col-xs-9">
                                <input name="harjul" class="harjul form-control" type="text" value="<?php echo $harjul;?>" placeholder="Harga Jual..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Harga (Grosir)</label>
                            <div class="col-xs-9">
                                <input name="harjul_grosir" class="harjul form-control" type="text" value="<?php echo $harjul_grosir;?>" placeholder="Harga Jual Grosir..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Stok</label>
                            <div class="col-xs-9">
                                <input name="stok" class="form-control" type="number" value="<?php echo $stok;?>" placeholder="Stok..."required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Minimal Stok</label>
                            <div class="col-xs-9">
                                <input name="min_stok" class="form-control" type="number" value="<?php echo $min_stok;?>" placeholder="Minimal Stok..." required>
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

<!-- modal tambah stok -->

<?php
    foreach ($data->result_array() as $a) {
    $id=$a['barang_id'];
    $nm=$a['barang_nama'];
    $satuan=$a['barang_satuan'];
    $harpok=$a['barang_harpok'];
    $harjul=$a['barang_harjul'];
    $harjul_grosir=$a['barang_harjul_grosir'];
    $stok=$a['barang_stok'];
    $min_stok=$a['barang_min_stok'];
    $kat_id=$a['barang_kategori_id'];
    $kat_nama=$a['kategori_nama'];
?>

        <div class="modal fade" id="modalstok<?php echo $id?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Stok</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/Barang/t_stok'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Barang</label>
                            <div class="col-xs-9">
                                <input name="nabar" class="form-control" type="text" value="<?php echo $nm;?>" placeholder="Nama Barang..." required>
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah Stok</label>
                        <div class="col-xs-9">
                            <input name="stok" class="form-control" type="text" placeholder="Input stok..." required>
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
<?php
}
?>

<!-- end modal tambah stok -->

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

