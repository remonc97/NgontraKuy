<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#include header file

//foreach($all as $tagihan)
//{
//    echo $tagihan->idtagihan;
//}
//foreach($user as $pengguna)
//{
//    echo $pengguna->namalengkap;
//}
//die();

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
        <span class="pull-right"><a href="<?php echo site_url('Profile')?>">Profile</a> / Invoices</span>
        <h2>Invoices</h2>
    </div>
</div>
<!-- banner -->


<div class="container">
    <div class="spacer">
        <div class="row register">
            <div class="col-lg-8 col-sm-12 col-xs-12 " style="background-color: white;padding:50px">
                <div class="row">
                    <div class="col-md-12">
                        <h3>List Tabel Tagihan</h3><br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-scrollable">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th class="center">Id Reservasi</th>
                                    <th class="center">Tanggal Tagihan</th>
                                    <th class="center">Total Tagihan</th>
                                    <th class="center">Status Bayar</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($all as $tagihan) {
                                        ?>
                                        <tr>
                                            <td class="center"><?php echo $tagihan->idreservasi; ?></td>
                                            <td class="center"><?php echo $tagihan->tgltagihan; ?></td>
                                            <td class="center"><?php echo $tagihan->totaltagihan; ?></td>
                                            <td class="center">
                                                <?php if($tagihan->statusbayar == 0)
                                                {
                                                    echo "Belum Dibayar";
                                                }elseif ($tagihan->statusbayar == 1)
                                                {
                                                    echo "Sudah Dibayar";
                                                }else{}
                                                ?>
                                            </td>
                                            <td class="center">

                                                <a href="<?php echo base_url('viewinvoice/' . $tagihan->idtagihan) ?>" data-toggle="modal" class="btn btn-default" style="background-color: aquamarine;"><b>View</b></a>
                                                <?php
                                                if($auth == 1)
                                                {
                                                ?>
                                                |
                                                <a href="<?php echo base_url('confirm/'.$tagihan->idtagihan)?>" type="button" class="btn btn-default" style="background-color: #0a6aa1; color: white;"><b>Confirm</b></a>
                                                <?php } ?>
<!--                                                |-->
<!--                                                <a href="#" type="button" class="btn btn-danger"><b>Delete</b></a>-->
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-12">
                <div class="row">
                    <?php if($auth == 0) {?>
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Notification</h4></div>
                                <div class="panel-body">
                                    <ul style="list-style-type: none">
                                        <li>
                                            <?php
                                            if($tagihan1->jumlah > 0){
                                                ?>
                                                You have <a href="<?php echo site_url('Invoices')?>"><?php echo $tagihan1->jumlah ?></a> invoice(s) waiting to be processed.
                                                <?php
                                            }else{
                                                ?>
                                                you have <u>no</u> invoice waiting to be processed.
                                                <?php
                                            }
                                            ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php }else{  ?>

                    <?php } ?>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h4>Links</h4></div>
                            <div class="panel-body">
                                <ul style="list-style-type: none">
                                        <li><a href="<?php echo site_url('Invoices')?>">Invoices</a></li>
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
