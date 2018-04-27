<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#include header file
	$this->view('template/header'); 
?>
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
                        <li><a href="<?php echo site_url()?>" >Home</a></li>
                        <li><a href="<?php echo site_url('Agents')?>">Agents</a></li>
                        <li><a href="<?php echo site_url('ContactUs')?>">Contact Us</a></li>
                        <li class="active"><a href="<?php echo site_url('About')?>">About</a></li>
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
        <span class="pull-right"><a href="<?php echo site_url()?>">Home</a> / Join Now</span>
        <h2>Sign Up</h2>
    </div>
    </div>
    <!-- banner -->

    <div class="container">
        <div class="spacer">
            <div class="row">

                <form class="register-form" action="<?php blink('Auth/InsetData')?>" method="post">
                    <br/>
                    <h4 class="hint">
                         <b>Enter your personal details below:</b>
                    </h4>
                    <div class="form-group">
                        <input class="form-control placeholder-no-fix" type="text" placeholder="Nama Lengkap" name="namalengkap" id="namalengkap" required/>
                    </div>
                    <div class="form-group">
                        <input class="form-control placeholder-no-fix" type="date" placeholder="Tanggal Lahir -> dd-mm-yyyy" name="tgllahir"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control placeholder-no-fix" type="number" placeholder="Nomor Telepon" name="notelp"/>
                    </div>
                    <br/>
                    <h4 class="hint">
                         <b>Enter your account details below:</b>
                    </h4>

                    <div class="form-group">
                        <input class="form-control placeholder-no-fix" type="email" placeholder="Email" name="email" required/>
                    </div>
                    <div class="form-group">
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" required/>
                    </div>
                    <div class="form-group">
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword" required/>
                    </div>

                    <div class="checkbox">
                        <br/>
                        <label style="font-size: 12pt">
                            <input type="checkbox" name="agree" required> by clicking this, you, the new User, will follow the <a href="<?php echo base_url('TermsConditions')?>">terms and conditions</a>
                            in NgontraKuy.
                        </label>
                    </div>

                    <div class="form-actions">
                        <input type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right" value="Register" role="button">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
#include footer file
$this->view('template/footer');
?>