<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#include header file
$this->view('template/header');
?>
<style>
    .bg-img-1 {
        background-image: url(<?php echo base_url('assets/images/slider/1.jpg')?>);
    }
    .bg-img-2 {
        background-image: url(<?php echo base_url('assets/images/slider/2.jpg')?>);
    }
    .bg-img-3 {
        background-image: url(<?php echo base_url('assets/images/slider/3.jpg')?>);
    }
    .bg-img-4 {
        background-image: url(<?php echo base_url('assets/images/slider/4.jpg')?>);
    }
    .bg-img-5 {
        background-image: url(<?php echo base_url('assets/images/slider/5.jpg')?>);
    }
</style>
<!-- Header Starts -->
<div class="navbar-wrapper">
    <div class="navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <!-- Nav Starts -->
            <style>
                .nav li a {
                    font-family: 'Ubuntu', sans-serif !important;
                }
            </style>
            <div class="navbar-collapse  collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo site_url()?>" >Home</a></li>
                    <li><a href="<?php echo site_url('Agents')?>">Agents</a></li>
                    <li><a href="<?php echo site_url('ContactUs')?>">Contact Us</a></li>
                    <li><a href="<?php echo site_url('About')?>">About</a></li>
                    <li><a href="<?php echo site_url('Logout')?>">Logout</a></li>
                </ul>
            </div>
        <!-- #Nav Ends -->
        </div>
    </div>
</div>
<!-- #Header Starts -->

<div class="container">
    <!-- Header Starts -->
    <div class="header">
        <a href="<?php echo site_url()?>"><img src="<?php echo base_url('assets/images/logo1.png')?>" width="200px" alt="NgontraKuy"></a>
        <?php if(isset($session) && $session == true){
            ?>
            <ul class="pull-right" style="padding-top: 20px;padding-bottom: 20px;">
                <li>
                    <a href="#" style="text-transform:Capitalize;font-family: 'Ubuntu', sans-serif;" data-toggle="modal" data-target="#TamKon">Tambah Kontrakan</a>
                </li>
                <li>
                    <h3 style="text-transform:Capitalize;font-family: 'Ubuntu', sans-serif;color:#72b70f;font-size: 15pt;"><?php echo "Hi, $nama!";?></h3>
                </li>
            </ul>
            <?php
        }else{
            echo "
                <ul class=\"pull-right\">
                    <li style=\"margin-top: 20px\"><a href=\"#\" style=\"font-family: 'Ubuntu', sans-serif;\" data-toggle=\"modal\" data-target=\"#loginpop\">Login</a></li>
                </ul>";
        } ?>
    </div>
    <!-- #Header Starts -->
</div>

<div class="container-fluid">
  <div class="panel panel-default">
    <div class="panel-heading">
        <span class="glyphicon glyphicon-envelope"></span> Pesan
    </div>
    <?php if($this->session->flashdata('pesan') == TRUE ) { ?>
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-success fade in" id="alert">
            <p><center><b><?php echo $this->session->flashdata('pesan') ?></b></center></p>
          </div>
        </div>
      </div>
    <?php } ?>

    <?php if($this->session->flashdata('pesanGagal') == TRUE ) { ?>
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-danger" id="alert">
            <p><center><b><?php echo $this->session->flashdata('pesanGagal') ?></b></center></p>
          </div>
        </div>
      </div>

      <?php } ?>
        <div class="panel-body">
            <div class="col-md-12">
                <table style="<?php #echo "table-layout:fixed"?>" class="table table-striped table-bordered table-hover" id="datatablepesan">

                    <?php if($pesan == null) { ?>
                        <center><h4><b>Anda Tidak Memiliki Pesan</b></h4></center>
                    <?php } else { ?>

                        <thead>
                        <tr>
                            <th align="center" width="50px">No.</th>
                            <th>Nama Customer</th>
                            <th>Tanggal Pesan</th>
                            <th>Jenis Pesan</th>
                            <th>Status</th>
                            <th width="280px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php $no=1; ?>
                            <?php $pelanggan = $this->M_Inbox->getCustomerTable($nama); ?>
                            <?php foreach($pelanggan as $data) { ?>
                            <?php $isi = $this->M_Inbox->getTampilPesanCustomer($data->idpengguna); ?>
                            <?php foreach ($isi as $item) { ?>

                            <td align="center"><?php echo $no ?></td>
                            <td><?php echo $item->namalengkap;?></td>
                            <td><?php echo $item->tglpesan;?></td>
                            <td><?php echo $item->jenispesan;?></td>
                            <td>
                                <?php if($item->status == "Submitted") { ?>
                                    <span class="label label-primary"><?php echo $item->status;?></span>
                                <?php } if($item->status == "On Process") { ?>
                                    <span class="label label-danger"><?php echo $item->status;?></span>
                                <?php } if($item->status == "Solved") { ?>
                                    <span class="label label-success"><?php echo $item->status;?></span>
                                <?php } ?>
                            </td>
                            <td>
                                <a href="<?php echo site_url('Inbox/lihatPesan/'.$item->idpengirim.'/'.$item->idpenerima) ?>" style="background-color: #1ac6ff; color: white" class="btn btn-default btn-circle" id="lihatPesan" data-toggle="modal"><i class="glyphicon glyphicon-envelope"></i> Lihat Pesan </a>
                                <?php if($item->status != "On Process" && $item->status != "Solved" && $item->jenispesan != "request") { ?>
                                    <a href="#prosesPesanModal<?php echo $item->idpesan ?>" class="btn btn-danger btn-circle" id="prosesPesan" data-toggle="modal"><i class="fa fa-gears"></i> Proses </a>
                                <?php } ?>
                                <?php if($item->status != "Solved" && $item->jenispesan != "request") { ?>
                                <a href="#solvePesanModal<?php echo $item->idpesan ?>" class="btn btn-default btn-circle" style="background-color: #72b70f; color: white" id="solvePesan" data-toggle="modal"><span class="glyphicon glyphicon-ok"></span> Selesai</a></td>
                        <?php } ?>
                        </tr>
                        <?php $no++;}  } ?>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
  </div>
</div>

<?php
#include footer file
$this->view('template/footer');
?>
