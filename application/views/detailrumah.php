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
		<span class="pull-right"><a href="<?php echo site_url('Home')?>">Home</a> / Buy</span>
		<h2>Buy</h2>
	</div>
</div>
<!-- banner -->

<div class="container">
	<div class="properties-listing spacer">
		<div class="row">
			<div class="col-lg-3 col-sm-4 hidden-xs">
				<div class="hot-properties hidden-xs">
					<h4>Hot Properties</h4>
					<div class="row">
						<div class="col-lg-4 col-sm-5">
							<img src="images/properties/4.jpg" class="img-responsive img-circle" alt="properties"/>
						</div>
						<div class="col-lg-8 col-sm-7">
							<h5><a href="property-detail.php">Integer sed porta quam</a></h5>
							<p class="price">$300,000</p> </div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-sm-5">
								<img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"/>
							</div>
							<div class="col-lg-8 col-sm-7">
								<h5><a href="property-detail.php">Integer sed porta quam</a></h5>
								<p class="price">$300,000</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-sm-5">
								<img src="images/properties/3.jpg" class="img-responsive img-circle" alt="properties"/>
							</div>
							<div class="col-lg-8 col-sm-7">
								<h5><a href="property-detail.php">Integer sed porta quam</a></h5>
								<p class="price">$300,000</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-sm-5">
								<img src="images/properties/2.jpg" class="img-responsive img-circle" alt="properties"/>
							</div>
						<div class="col-lg-8 col-sm-7">
							<h5><a href="property-detail.php">Integer sed porta quam</a></h5>
							<p class="price">$300,000</p>
						</div>
					</div>
				</div>
				<div class="advertisement">
					<h4>Advertisements</h4>
					<img src="images/advertisements.jpg" class="img-responsive" alt="advertisement">
				</div>
			</div>
			<div class="col-lg-9 col-sm-8 ">
				<?php if(isset($details)){?>
				<h2><?php echo $details->nmrumah;?></h2>
				<div class="row">
					<div class="col-lg-8">
						<div class="property-images">
							<!-- Slider Starts -->
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators hidden-xs">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1" class=""></li>
									<li data-target="#myCarousel" data-slide-to="2" class=""></li>
									<li data-target="#myCarousel" data-slide-to="3" class=""></li>
								</ol>
								<div class="carousel-inner">
									<!-- Item 1 -->
									<div class="item active">
									  <img src="images/properties/4.jpg" class="properties" alt="properties" />
									</div>
									<!-- #Item 1 -->

									<!-- Item 2 -->
									<div class="item">
									  <img src="images/properties/2.jpg" class="properties" alt="properties" />

									</div>
									<!-- #Item 2 -->

									<!-- Item 3 -->
									 <div class="item">
									  <img src="images/properties/1.jpg" class="properties" alt="properties" />
									</div>
									<!-- #Item 3 -->

									<!-- Item 4 -->
									<div class="item ">
									  <img src="images/properties/3.jpg" class="properties" alt="properties" />

									</div>
									<!-- # Item 4 -->
								</div>
								<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
							<!-- #Slider Ends -->
						</div>
						<div class="spacer">
							<h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
							<p><?php echo $details->deskripsi;?></p>
						</div>
						<!--<div>
							<h4>
								<span class="glyphicon glyphicon-map-marker"></span> Location
							</h4>
							<div class="well">
								<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe>
							</div>
							<a class="btn btn-success" href="">Tersedia</a>
						</div>-->
					</div>
					<div class="col-lg-4">
						<div class="col-lg-12  col-sm-6">
							<div class="property-info">
								<p class="price">Rp <?php echo $details->harga;?></p>
                <a class="btn btn-success" href="<?php site_url('Booking/'.$details->idrumah)?>">Tertarik</a>
								<!-- <p class="area"><span class="glyphicon glyphicon-map-marker"></span> 344 Villa, Syndey, Australia</p> -->

								<div class="profile">
									<span class="glyphicon glyphicon-user"></span> Agent Details
									<p><?php echo $details->nama;?><br><?php echo $details->notelp;?></p>
								</div>
							</div>
							<h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
							<div class="listing-detail">
								<span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span>
								<span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span>
								<span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span>
								<span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span>
							</div>
						</div>
						<div class="col-lg-12 col-sm-6 ">
							<div class="enquiry">
								<h6>
									<span class="glyphicon glyphicon-envelope"></span> Post Enquiry
								</h6>
								<form role="form">
									<input type="text" class="form-control" placeholder="Full Name"/>
									<input type="text" class="form-control" placeholder="you@yourdomain.com"/>
									<input type="text" class="form-control" placeholder="your number"/>
									<textarea rows="6" class="form-control" placeholder="Whats on your mind?"></textarea>
									<button type="submit" class="btn btn-primary" name="Submit">Send Message</button>
								</form>
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
