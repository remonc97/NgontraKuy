<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#include header file
	$this->view('template/header'); 
?>

<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Join Now</span>
    <h2>Sign Up</h2>
</div>
</div>
<!-- banner -->


<form class="login-form" >

<!--action="<//?php blink('Auth/auth')?>" method="post">-->


		<!--<h3 class="form-title">Register</h3>
		
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>-->
			
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<!--<form class="forget-form" action="index.html" method="post">
		<h3>Forget Password ?</h3>
		<p>
			 Enter your e-mail address below to reset your password.
		</p>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn btn-default">Back</button>
			<button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	
	
	<form class="register-form" action= "<?php echo blink('Auth/InsetData');?>" method="post">
		<!--<h3>Sign Up</h3>-->
		<p class="hint">
			 Enter your personal details below:
		</p>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="nama"/>
		</div>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="date" placeholder="Tanggal Lahir -> dd-mm-yyyy" name="tgllahir"/>
		</div>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="number" placeholder="Phone Number" name="notelp"/>
		</div>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="text" placeholder="Address" name="address"/>
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
			<button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Register</button>
		</div>
	</form>

<?php
#include footer file
$this->view('template/footer');
?>