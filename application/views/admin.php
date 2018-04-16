<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#include header file
$this->view('template/header');
?>
<!-- #Header Starts -->
<div class="container">
    <!-- Header Starts -->
    <div class="header">
        <a href="<?php echo site_url()?>"><img src="<?php echo base_url('assets/images/logo1.png')?>" width="100px" alt="NgontraKuy"></a>

        <ul class="pull-right center">
            <li><a href="#" style="font-family: 'Ubuntu', sans-serif;" data-toggle="modal" data-target="#loginpop">Login</a></li>
        </ul>
    </div>
    <!-- #Header Starts -->

</div>
<div class="inside-banner">
	<div class="container">

		<h2>Admin Dashboard</h2>
		<span class="pull"><a href="#">Home</a> / About Us</span>
	</div>
</div>
<div class="">
    <div id="slider" class="sl-slider-wrapper">

    </div><!-- /slider-wrapper -->
</div>


<!-- banner -->
<div class="container">
aaaaa
</div>

<?php
#include footer file
$this->view('template/footer');
?>
