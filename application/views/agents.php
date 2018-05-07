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
                    <li class="active"><a href="<?php echo site_url('Agents')?>">Agents</a></li>
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
        <span class="pull-right"><a href="<?php echo site_url()?>">Home</a> / Agents</span>
        <h2>Agents</h2>
    </div>
</div>
    <div class="container">
        <div class="spacer agents">
            <div class="row">
                <div class="col-lg-8  col-lg-offset-2 col-sm-12">
                    <!-- agents -->
                    <div class="row">
                        <div class="col-lg-2 col-sm-2 ">
                            <a href="#"><img src="<?php echo base_url('assets/images/agents/tes2.jpeg')?>" class="img-responsive"  alt="agent name"></a>
                        </div>
                        <div class="col-lg-7 col-sm-7 ">
                            <h4>Chintya Rifyaningrum</h4>
                        </div>
                        <div class="col-lg-3 col-sm-3 ">
                            <span class="glyphicon glyphicon-envelope"></span> <a href="mailto:kelkul7.source@gmail.com">email us</a><br>
                        </div>
                    </div>
                    <!-- agents -->

                    <!-- agents -->
                    <div class="row">
                        <div class="col-lg-2 col-sm-2 ">
                            <a href="#">
                                <img src="<?php echo base_url('assets/images/agents/rafly.jpg')?>" class="img-responsive" alt="agent name">
                            </a>
                        </div>
                        <div class="col-lg-7 col-sm-7 ">
                            <h4>Rafly Aswin</h4>
                        </div>
                        <div class="col-lg-3 col-sm-3 ">
                            <span class="glyphicon glyphicon-envelope"></span> <a href="mailto:kelkul7.source@gmail.com">email us</a><br>
                        </div>
                    </div>
                    <!-- agents -->

                    <!-- agents -->
                    <div class="row">
                        <div class="col-lg-2 col-sm-2 ">
                            <a href="#"><img src="<?php echo base_url('assets/images/agents/puspa.jpg')?>" class="img-responsive" alt="agent name"></a>
                        </div>
                        <div class="col-lg-7 col-sm-7 ">
                            <h4>Puspa Budiarti</h4>
                        </div>
                        <div class="col-lg-3 col-sm-3 ">
                            <span class="glyphicon glyphicon-envelope"></span> <a href="mailto:kelkul7.source@gmail.com">email us</a><br>
                        </div>
                    </div>
                    <!-- agents -->

                    <!-- agents -->
                    <div class="row">
                        <div class="col-lg-2 col-sm-2 ">
                            <a href="#"><img src="<?php echo base_url('assets/images/agents/tes3.jpg')?>" class="img-responsive" alt="agent name"></a>
                        </div>
                        <div class="col-lg-7 col-sm-7 ">
                            <h4>Nikko Handiarto</h4>
                        </div>
                        <div class="col-lg-3 col-sm-3 ">
                            <span class="glyphicon glyphicon-envelope"></span> <a href="mailto:kelkul7.source@gmail.com">email us</a><br>
                        </div>
                    </div>
                    <!-- agents -->

                    <!-- agents -->
                    <div class="row">
                        <div class="col-lg-2 col-sm-2 ">
                            <a href="#"><img src="<?php echo base_url('assets/images/agents/tes4.jpg')?>" class="img-responsive" alt="agent name"></a>
                        </div>
                        <div class="col-lg-7 col-sm-7 ">
                            <h4>Muhamad Rinaldy</h4>
                        </div>
                        <div class="col-lg-3 col-sm-3 ">
                            <span class="glyphicon glyphicon-envelope"></span> <a href="mailto:kelkul7.source@gmail.com">email us</a><br>
                        </div>
                    </div>
                    <!-- agents -->

                    <!-- agents -->
                    <div class="row">
                        <div class="col-lg-2 col-sm-2 ">
                            <a href="#"><img src="<?php echo base_url('assets/images/agents/zacky.jpg')?>" class="img-responsive" alt="agent name"></a>
                        </div>
                        <div class="col-lg-7 col-sm-7 ">
                            <h4>Zacky Burhani</h4>
                        </div>
                        <div class="col-lg-3 col-sm-3 ">
                            <span class="glyphicon glyphicon-envelope"></span> <a href="mailto:kelkul7.source@gmail.com">email us</a><br>
                        </div>
                    </div>
                    <!-- agents -->
                </div>
            </div>

        </div>
    </div>
<?php
#include footer file
$this->view('template/footer');
?>