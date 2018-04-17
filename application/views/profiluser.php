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

<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="#">Home</a> / Profile</span>
    <h2>Profile</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
    <div class="table-scrollable">
      <table class="table table-hover">
        <thead>
              <tr>
                <td align="center">Nama</td>
                <td align="center">Tanggal Lahir</td>
                <td align="center">Nomor Telepon</td>
                <td align="center">Email</td>
             </tr>
        </thead>
        <tbody>
              <tr>
                <td align="center">:</td>
                <td align="center">:</td>
                <td align="center">:</td>
                <td align="center">:</td>
              </tr>
        </tbody>
         <?php if(isset($datauser)){?>
       <tbody>
             <tr>
              <td align="center"><?php echo $datauser->nama;?></td>
              <td align="center"><a href="<?php echo $datauser->tgllahir;?>"></td>
              <td align="center"><a href="<?php echo $datauser->notelp;?>"></td>
              <td align="center"><a href="<?php echo $datauser->email;?>"></td>
             </tr>
         </tbody>
                 <?php }else { ?>
         <tbody>
              <tr>
                <td>No data </td>
              </tr>
         </tbody>
                 <?php } ?>
     </table>
    </div>
        </div>

</div>
</div>
</div>
