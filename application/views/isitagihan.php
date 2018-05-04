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
              <ul class=\"pull-right\">
              <li>
                      <a href=\"#\" style=\"text-transform:Capitalize;font-family: 'Ubuntu', sans-serif;\" data-toggle=\"modal\" data-target=\"#TamKon\">Tambah Kontrakan</a>
                  </li>
                  <li style=\"margin-top: 20px;\" class='dropdown'>
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
        <span class="pull-right"><a href="<?php echo site_url('Profile')?>">Profile</a> / <a href="<?php echo site_url('Invoices')?>">Invoices</a> / Details</span>
        <h2>Invoice Detail</h2>
    </div>
</div>
<!-- banner -->


<div class="container">
    <div class="spacer">
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-xs-12 ">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <u><h4>Kontrakan Info</h4></u>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <br/>
                                    <table class="table-responsive">
                                        <tr>
                                            <td>Nama Pemilik Kontrakan</td>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td><?php echo $owner->namalengkap?></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Telepon</td>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td><?php echo $datakontrakan->notelp?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td><?php echo $datakontrakan->alamat?></td>
                                        </tr>
                                        <tr>
                                            <td>Kota</td>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td><?php echo $datakontrakan->kota?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <br/>
                                    <table class="table-responsive">
                                        <tr>
                                            <td>Nama Kontrakan</td>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td><?php echo $datakontrakan->nmkontrakan?></td>
                                        </tr>
                                        <tr>
                                            <td>Harga</td>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td><?php echo "Rp ".$datakontrakan->harga?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <hr/>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <u><h4>Invoice Details</h4></u>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <br/>
                                    <table class="table-responsive">
                                        <tr>
                                            <td>ID Reservasi</td>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td><?php echo $datatagihan->idreservasi?></td>
                                        </tr>
                                        <tr>
                                            <td>Total Tagihan</td>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td><?php echo "Rp ".$datatagihan->totaltagihan?></td>
                                        </tr>
                                        <tr>
                                            <td>Status Pembayaran</td>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td>
                                                <?php
                                                if($datatagihan->statusbayar == '0'){
                                                    echo "<b style='color:firebrick'>Belum Lunas</b>";
                                                }else if($datatagihan->statusbayar == '1'){
                                                    echo "<b style='color:#72b70f'>Lunas</b>";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <br/>
                                    <table class="table-responsive">
                                        <tr>
                                            <td>Tanggal Tagihan</td>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td>
                                                <?php
                                                    $tanggal = explode('-',$datatagihan->tgltagihan);
                                                    echo $tanggal[2]."-".$tanggal[1]."-".$tanggal[0];
                                                ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
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
                                            if($tagihan->jumlah > 0){
                                                ?>
                                                You have <a href="<?php echo site_url('Invoices')?>"><?php echo $tagihan->jumlah?></a> invoice(s) waiting to be processed.
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
