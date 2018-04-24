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
                        <a href=\"#\" style=\"text-transform:Capitalize;font-family: 'Ubuntu', sans-serif;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Hi, $nama! <span class=\"caret\"></span></a>
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
        <h2 style="font-family: 'Ubuntu', sans-serif">Book Request Form</h2>
    </div>
</div>
<!-- banner -->


<div class="container">
    <div class="spacer">
        <?php echo form_open(site_url('Booking/proses/'.$idreservasi.'_'.$idkontrakan))?>
        <div class="row">
            <div class="col-lg-7 col-sm-7 ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="idreservasi">Booking ID</label>
                            <input type="text" id="idreservasi" name="idreservasi" class="form-control" readonly value="<?php echo (!isset($idreservasi)) ? '': $idreservasi?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="bookingdate">Booking Date</label>
                            <input type="date" id="bookingdate" name="tglreservasi" class="form-control" value="<?php echo date('Y-m-d')?>">
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
            <div class="col-lg-5 col-sm-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group" style="display:none">
                            <label for="name">&nbsp;</label>
                            <input type="text" id="idpenerima" name="idpenerima" class="form-control" value="<?php echo $kontrakan->idpengguna ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <hr style="border: 1px solid darkgray"/>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="row">
                    <div class="col-md-12">
                        <br/>
                        <p style="font-size:14pt">
                            Tenant Information
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Tenant Name</label>
                            <input type="text" id="name" name="namalengkap" class="form-control" value="<?php echo $nama ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="number">Phone No.</label>
                            <input type="text" id="number" name="notelp" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cekin">Check In Date</label>
                            <input type="date" id="cekin" name="tglmasuk" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cekout">Check Out Date</label>
                            <input type="date" id="cekout" name="tglkeluar" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-5 col-sm-offset-1 col-lg-offset-1">
                <div class="row">
                    <div class="col-md-12">
                        <br/>
                        <p style="font-size:14pt">
                            Kontrakan Information
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table style="background-color:transparent;font-size: 12pt">
                            <tr>
                                <td>1.&nbsp;&nbsp;</td>
                                <td>Kontrakan Name&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><?php echo (!isset($kontrakan->nmkontrakan)) ? '': $kontrakan->nmkontrakan?></td>
                            </tr>
                            <tr>
                                <td>2.&nbsp;&nbsp;</td>
                                <td>Kontrakan Owner&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><?php echo (!isset($pemilik->namalengkap)) ? '': $pemilik->namalengkap?></td>
                            </tr>
                            <tr>
                                <td>3.&nbsp;&nbsp;</td>
                                <td>Kontrakan Address&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><?php echo (!isset($kontrakan->alamat)) ? '': $kontrakan->alamat?></td>
                            </tr>
                            <tr>
                                <td>4.&nbsp;&nbsp;</td>
                                <td>Kontrakan Phone No.&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><?php echo (!isset($kontrakan->notelp)) ? '': $kontrakan->notelp?></td>
                            </tr>
                            <tr>
                                <td>5.&nbsp;&nbsp;</td>
                                <td>Kontrakan Fee&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><?php echo (!isset($kontrakan->harga)) ? '': $kontrakan->harga?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br/>
                <div class="checkbox">
                    <label style="font-size: 12pt">
                        <input type="checkbox" name="agree" required> by clicking this, you, the new Tenant, will follow the terms and conditions
                        in NgontraKuy.
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="submit" role="button" class="btn btn-primary" name="book" value="Book Now!">
            </div>
        </div>
        <?php echo form_close()?>
    </div>
</div>
<?php
#include footer file
$this->view('template/footer');
?>

