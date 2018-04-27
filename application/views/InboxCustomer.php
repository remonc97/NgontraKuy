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
        <button class="btn btn-default" style="background-color: #72b70f; color: white" data-toggle="modal" href="#" data-target="#entryPesanModal"><i class="fa fa-plus"></i> Buat Pesan Baru</button>
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

                <?php if($mergeTable == null) { ?>
                    <center><h4><b>Anda Tidak Memiliki Pesan</b></h4></center>
                <?php } else { ?>

                <thead>
                    <tr>
                      <th align="center" width="50px">No.</th>
                      <th>Penerima</th>
                      <th>Tanggal Pesan</th>
                      <th>Topik</th>
                      <th>Status</th>
                      <th width="230px">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                      <?php $no=1; ?>
                      <?php foreach($mergeTable as $data){ ?>
                      <?php if($nama == $data->namalengkap) { ?>
                        <td align="center"><?php echo $no ?></td>
                        <?php $namalengkap = $this->M_Inbox->getNamaPenerima($data->idpenerima); ?>
                        <?php foreach($namalengkap as $data2) { ?>
                        <td><?php echo $data2->namalengkap ?></td>
                        <?php } ?>
                        <td><?php echo $data->tglpesan;?></td>
                        <td><b><?php echo $data->topik?></b></td>
                        <td>
                        <?php if($data->status == 'Submitted' || $data->status == 'submitted') { ?>
                          <span class="label label-primary"><?php echo $data->status;?></span>
                        <?php } ?>
                        <?php if($data->status == 'On Process' || $data->status == 'on process') { ?>
                          <span class="label label-danger"><?php echo $data->status;?></span>
                        <?php } ?>
                        <?php if($data->status == 'Solved' || $data->status == 'solved') { ?>
                          <span class="label label-success"><?php echo $data->status;?></span>
                        <?php } ?>
                        </td>
                        <td>
                          <a href="<?php echo site_url('Inbox/lihatPesan/'.$data->idpenerima.'/'.$data->idpengirim) ?>" class="btn btn-default btn-circle" style="background-color: #1ac6ff; color: white" id="lihatPesan" data-toggle="modal"><span class="glyphicon glyphicon-envelope"></span> Lihat Pesan </a>
                          <a href="#hapusPesanModal<?php echo $data->idpesan ?>" class="btn btn-danger btn-circle" id="hapusPesan" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Hapus Pesan</a></td>
                    </tr>
                    <?php } $no++; } ?>
                </tbody>
              <?php } ?>  
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

<script type="text/javascript">
  $(document).ready(function(){
    if(<?php echo json_encode(($this->session->flashdata('successbook'))) ?> == 'true'){
      alert('book request submitted. check your inbox frequently for book confirmation message from the owner');
    }
  }
</script>
