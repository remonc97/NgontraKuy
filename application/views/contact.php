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
                        <li><a href="<?php echo site_url()?>" >Home</a></li>
                        <li><a href="<?php echo site_url('Agents')?>">Agents</a></li>
                        <li class="active"><a href="<?php echo site_url('ContactUs')?>">Contact Us</a></li>
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
    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="<?php echo site_url()?>">Home</a> / Contact Us</span>
            <h2>Contact Us</h2>
        </div>
    </div>
    <div class="container">
        <div class="spacer">
            <div class="row contact">
                <div class="col-lg-6 col-sm-6 ">
                    <input type="text" class="form-control" placeholder="Full Name">
                    <input type="text" class="form-control" placeholder="Email Address">
                    <input type="text" class="form-control" placeholder="Contact Number">
                    <textarea rows="6" class="form-control" placeholder="Message"></textarea>
                    <button type="submit" class="btn btn-success" name="Submit">Send Message</button>
                </div>
                <div class="col-lg-6 col-sm-6 ">
                    <div class="well">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2138104169985!2d106.74512941469644!3d-6.2355233627985065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f0b89e1a77bd%3A0x398d2d41ed77b3b2!2sUniversitas+Budiluhur!5e0!3m2!1sen!2sid!4v1523976276077" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
#include footer file
$this->view('template/footer');
?>