<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#include header file
	$this->view('template/header'); 
?>

<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="<?php echo site_url()?>">Home</a> / Join Now</span>
    <h2>Sign Up</h2>
</div>
</div>
<!-- banner -->


<form class="login-form" action="<?php blink('Auth/InsetData')?>" method="post">

	<form class="register-form" >
		<!--<h3>Sign Up</h3>-->
		<p class="hint">
			 Enter your personal details below:
		</p>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="nama" id="nama"/>
		</div>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="date" placeholder="Tanggal Lahir -> dd-mm-yyyy" name="tgllahir"/>
		</div>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="number" placeholder="Phone Number" name="notelp"/>
		</div>
				
		<p class="hint">
			 Enter your account details below:
		</p>
		
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email"/>
		</div>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
		</div>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"/>
		</div>
		
		
		<div class="form-actions">
			<input type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right" value="Register" role="button">
		</div>
	</form>

<?php
#include footer file
$this->view('template/footer');
?>