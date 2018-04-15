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
                .nav li a{
                    font-family: 'Ubuntu', sans-serif !important;
                }
            </style>
            <div class="navbar-collapse  collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?php echo site_url()?>" >Home</a></li>
                    <li><a href="<?php echo site_url('Agents')?>">Agents</a></li>
                    <li><a href="<?php echo site_url('ContactUs')?>">Contact Us</a></li>
                    <li><a href="<?php echo site_url('About')?>">About</a></li>
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

        <ul class="pull-right">
            <li style="margin-top: 20px"><a href="#" style="font-family: 'Ubuntu', sans-serif;" data-toggle="modal" data-target="#loginpop">Login</a></li>
        </ul>
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
            <table style="table-layout:fixed" class="table table-striped table-bordered table-hover" id="datatablepesan">
            <thead>
            <tr>
              <th align="center" width="50px">No.</th>
              <th>Nama Customer</th>
              <th>Tanggal Pesan</th>
              <th>Jenis Pesan</th>
              <th>Status</th>
              <th width="400px">Action</th>
            </tr>
              </thead>
              <tbody>
                <tr>
                    <?php $no=1; ?>
                    <?php foreach($merge as $data){?>
                    <td align="center"><?php echo $no ?></td>
                    <td><?php echo $data->nama;?></td>
                    <td><?php echo $data->tglpesan;?></td>
                    <td><?php echo $data->jenispesan;?></td>
                    <td>
                        <?php if($data->status == "Submitted") { ?>
                        <span class="label label-success"><?php echo $data->status;?></span>
                        <?php } else { ?>
                        <span class="label label-danger"><?php echo $data->status;?></span>
                        <?php } ?>
                    </td>
                    <td>
                        <a href="#detilPesanModal<?php echo $data->idpesan ?>" class="btn btn-default btn-circle" id="lihatPesan" data-toggle="modal"><i class="glyphicon glyphicon-envelope"></i> Lihat Pesan </a>
                        <a href="#balasPesanModal<?php echo $data->idpesan ?>" class="btn btn-default btn-circle" style="background-color: #1ac6ff; color: white" id="lihatPesan" data-toggle="modal"><i class="glyphicon glyphicon-send"></i> Balas Pesan </a>
                        <a href="#prosesPesanModal<?php echo $data->iduser ?>" class="btn btn-danger btn-circle" id="prosesPesan" data-toggle="modal"><i class="fa fa-gears"></i> Proses </a>
                        <a href="#prosesPesanModal<?php echo $data->idpesan ?>" class="btn btn-default btn-circle" style="background-color: #72b70f; color: white" id="hapusPesan" data-toggle="modal"><span class="glyphicon glyphicon-ok"></span> Selesai</a></td>
                </tr>
                <?php $no++; } ?>
              </tbody>
            </table>
        </div>
    </div>
</div>


<div class="banner-search">
    <div class="container">
        <!-- banner -->
        <h3>Book your homes here</h3>
        <div class="searchbar">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <form action="<?php echo site_url('FindHomes')?>" method="post">
                        <input type="text" class="form-control" placeholder="Search of Properties">
                        <div class="row">
                            <div class="col-lg-3 col-sm-3 ">
                                <select class="form-control" name="type">
                                    <option>Type</option>
                                    <option value="furnished">Furnished</option>
                                    <option value="unfurnished">Unfurnished</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <select name="price" class="form-control">
                                    <option>Price</option>
                                    <option value="lo-hi">Lowest - Highest</option>
                                    <option value="hi-lo">Highest - Lowest</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-sm-offset-3">
                                <input class="btn btn-success" role="button" type="submit" value="Find Now"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
                </div>
            </div>
        </div>
    </div>
</div>
