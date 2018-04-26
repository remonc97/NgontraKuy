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


          <?php if(isset($session) && $session == true){
              echo
                  "
              <ul class=\"pull-right dropdown\">
                  <li style=\"margin-top: 20px;\">
                      <a href=\"#\" style=\"text-transform:Capitalize;font-family: 'Ubuntu', sans-serif;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Hi, $namalengkap! <span class=\"caret\"></span></a>
                      <ul class=\"dropdown-menu\"  style=\"padding-top: 10px;padding-bottom: 10px;\">
                          <li><a href=".site_url('Profile').">Profile</a></li>
                          <li><a href=".site_url('Inbox').">Inbox</a></li>
                          <li><a href=".site_url('Logout').">Log out</a></li>
                      </ul>
                  </li>
              </ul>
              ";
          }else{
              echo "
              <ul class=\"pull-right\">
                  <li style=\"margin-top: 20px\"><a href=\"#\" style=\"font-family: 'Ubuntu', sans-serif;\" data-toggle=\"modal\" data-target=\"#loginpop\">Login</a></li>
              </ul>";
          } ?>
  </div>
    <!-- #Header Starts -->
</div>

<!-- banner -->
<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="<?php echo site_url()?>">Home</a> / Detail Kontrakan</span>
        <h2>Detail Kontrakan</h2>
    </div>
</div>
<!-- banner -->


<div class="container">
    <div class="spacer">
        <div class="row register">
            <div class="col-lg-3 col-sm-4 col-xs-12">
                <div class="col-md-3">
                    <div class="card">
                      <div class="card-body text-center">
                        <p><img class=" img-fluid" src="<?php echo base_url('assets/images/woman.png')?>" alt="card image" width="200px" height="200px"></p>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-6 col-xs-12 " style="background-color: white;padding:50px">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Keterangan</h3><br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-scrollable">
                            <table class="table table-hover">
                                <?php if(isset($getdata)){?>
                                    <tbody>
                                    <tr>
                                        <td align="center">Nama Kontrakan</td>
                                        <td align="center">:</td>
                                        <td align="center"><?php echo $getdata->nmkontrakan;?></td>
                                    </tr>
                                    <tr>
                                        <td align="center">Nomor Telepon</td>
                                        <td align="center">:</td>
                                        <td align="center"><?php echo $getdata->notelp;?></td>
                                    </tr>
                                    <tr>
                                        <td align="center">Deskripsi</td>
                                        <td align="center">:</td>
                                        <td align="center"><?php echo $getdata->deskripsi;?></td>
                                    </tr>
                                    <tr>
                                        <td align="center">Alamat</td>
                                        <td align="center">:</td>
                                        <td align="center"><?php echo $getdata->alamat;?></td>
                                    </tr>
                                    <tr>
                                        <td align="center">Kota</td>
                                        <td align="center">:</td>
                                        <td align="center"><?php echo $getdata->kota;?></td>
                                    </tr>
                                    <tr>
                                        <td align="center">Fasilitas</td>
                                        <td align="center">:</td>
                                        <td align="center"><?php echo $getdata->fasilitas;?></td>
                                    </tr>
                                    <tr>
                                        <td align="center">Ukuran</td>
                                        <td align="center">:</td>
                                        <td align="center"><?php echo $getdata->ukuran;?></td>
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
            <div class="col-lg-4 col-sm-4 col-xs-12">
                <div class="row">
                  <?php if($auth=='1'){?>
                  <div class="col-md-12">
                      <div class="panel panel-default">
                          <div class="panel-heading"><h4>News</h4></div>
                          <div class="panel-body">
                              <ul style="list-style-type: none">
                                  <li>
                                  </li>
                              </ul>
                          </div>
                      </div>
                    </div>
                    <?php } ?>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h4>Links</h4></div>
                            <div class="panel-body">
                                <ul style="list-style-type: none">
                                  <?php if($auth=='1'){?>
                                    <li><a href="<?php echo site_url('Invoices')?>">Invoices</a></li>
                                    <li><a href="<?php echo site_url('ListKontrakan')?>">List Kontrakan</li>
                                  <?php }
                                    else{?>
                                    <li><a href="<?php echo site_url('Invoices')?>">Invoices</a></li>
                                  <?php } ?>
                                </ul>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
#include footer file
$this->view('template/footer');
?>
