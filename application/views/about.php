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
    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="<?php echo site_url()?>">Home</a> / About</span>
            <h2>About Us</h2>
        </div>
    </div>
    <div class="container">
        <div class="spacer">
            <div class="row">
                <div class="col-lg-8  col-lg-offset-2">
                    <center><img src="<?php echo base_url('assets/images/logo1.png')?>" class="img-responsive thumbnail"  alt="realestate"></center><br/>
                    <h3>Business Background</h3>
                    <p>"Kontrakan" (Rent house) is one option for those who do not have a permanent place living, 
						maybe tourists (domestic and foreign) or people who want to live in at a certain time for reasons 
						of mobility of work, education, or for common family reasons owned by new married couples. 
						"Kontrakan" (Rent house) is considered as the right choice for living because of reasonable price 
						and adequate facilities.<br></p>
						
					<p> But, all this time, to look for "Kontrakan" (Rent house), you need to go to the "Kontrakan" (Rent house) 
						location to look at and assess a "Kontrakan" (Rent house) facility, find out the rent price and 
						see what the "Kontrakan" (Rent house) is empty so you can live there. <br></p>
						
					<p> With the above explanation, NgontraKuy present to reduce the burden from seeker "Kontrakan" (Rent house). 
						In this website, you can:
						- Finding a rent house according your specific needs and capabilities without to go to the rent house location,
						- Booking the rent house according to the time desired,
						- Communicate with the rent house owners by online, and
						- Knowing the total cost to be paid each month if you are already a tenant of the rent house.
					<br></p>

					<p> With NgontraKuy, developers hope that this website can be useful for the public. </p>
                </div>

            </div>
        </div>
    </div>
<?php
#include footer file
$this->view('template/footer');
?>