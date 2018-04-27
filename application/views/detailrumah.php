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
                    <li class="active"><a href="<?php echo site_url('Home')?>" >Home</a></li>
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
		<span class="pull-right"><a href="<?php echo site_url()?>">Home</a> / Kontrakan Info</span>
		<h2>Kontrakan Info</h2>
	</div>
</div>
<!-- banner -->

<div class="container">
	<div class="properties-listing spacer">
		<div class="row">
			<div class="col-lg-3 col-sm-4 hidden-xs">
				<div class="hot-properties hidden-xs">
				</div>
				<div class="advertisement">
				</div>
			</div>
			<div class="col-lg-9 col-sm-8 ">
				<?php if(isset($details)){?>
				<h2><?php echo $details->nmkontrakan;?></h2>
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<div class="col-md-12">
                            <div class="property-images">
                                <div class="col-md-12">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <!-- Slider Starts -->
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators hidden-xs">
                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                <!-- <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                                <li data-target="#myCarousel" data-slide-to="3" class=""></li> -->
                                            </ol>
                                            <div class="carousel-inner text-center">
                                                <!-- Item 1 -->
                                                <div class="item active">
                                                    <div class="image-holder">
                                                        <img src="<?php echo base_url('assets/images/Rumah/'.$details->gambar)?>" class="img-responsive"/>
                                                    </div>
                                                </div>
                                                <!-- #Item 1 -->
                                            </div>
                                            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                        </div>
                                        <!-- #Slider Ends -->
                                        <br/>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                            <div class="spacer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
                                        <p><?php echo $details->deskripsi;?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="spacer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4><span class="glyphicon glyphicon-home"></span> Facility</h4>
                                        <div class="listing-detail">
                                            <p><?php echo $details->fasilitas;?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="col-lg-12 col-sm-6">
							<div class="property-info">
                                <div class="spacer">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4><span class="glyphicon glyphicon-user"></span> Agent Details</h4>
                                            <p><?php echo $details->nmkontrakan;?><br><?php echo $details->notelp;?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="spacer">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4><span class="glyphicon glyphicon-usd"></span> Price</h4>
                                            <p class="price">Rp <?php echo $details->harga;?></p><br/>
                                            <a class="btn btn-success" href="<?php echo site_url('Booking/'.$details->idkontrakan)?>">Tertarik</a>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
				<?php }
				else{
					echo "no data";
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php
#include footer file
$this->view('template/footer');
?>
