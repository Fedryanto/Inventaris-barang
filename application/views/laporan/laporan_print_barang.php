<!DOCTYPE html>
<html>
  
<!-- Mirrored from coderthemes.com/ubold_2.2/light/components-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2017 14:09:04 GMT -->
<head>

    <title>Inventaris Sekolah</title>
     <!-- Bootstrap Core CSS -->
     <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
     <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/core.css" rel="stylesheet" type="text/css">
     <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/component.css" rel="stylesheet" type="text/css">
     <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/icons.css" rel="stylesheet" type="text/css">
     <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/pages.css" rel="stylesheet" type="text/css">
     <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/responsive.css" rel="stylesheet" type="text/css"/>
  
  </head>
  <body onload="window.print();">
    <div class="row">
        <div class="col-sm-12" align="center">  
            <img src="<?php echo base_url('assets/img/logo/logo.png');?>" width="768px" height="100px">
        </div>
                <div class="col-sm-12">
                    <div class="card-box">
                    <h4 class="m-t-0 header-title" style="text-align: center;"><b>LAPORAN DATA BARANG INVENTARIS SEKOLAH</b></h4>
                    <p class="text-muted m-b-30 font-13" style="text-align: center;">
                        BERBASIS WEB
                    </p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Kode Barang</td>
                            <td>Nama Barang</td>
                            <td>Nama Ruangan</td>
                            <td>Stok</td>
                        </tr>
                    </thead>
                    <?php $i=1?>
                    <?php foreach($barang->result() as $data):?>
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td><?php echo $data->kode_barang;?></a></td>
                        <td><?php echo $data->nama_barang;?></td>
                        <td><?php echo $data->nama_ruangan; ?></td>
                        <td><?php echo $data->stok;?> <?= strtoupper($data->satuan) ?></td>
                    </tr>
                    <?php endforeach;?>
                </table>
                <p class="mr-2" align="right">Bengkulu, <?php
                echo date('d-m-Y');
                ?></p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p align='right'>.........................</p
                </div>
              </div>
            </div>
  </body>
</html>