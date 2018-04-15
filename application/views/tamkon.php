<?php $this->view('template/Header'); ?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="<?php blink('Home')?>">Home</a></span>
    <h2>Tambah Kontrakan Anda</h2>
</div>
</div>
<!-- banner -->

	<form class="register-form" action="index.html" method="post">
		<h3>Isi Data Kontrakan</h3>
		<p class="hint">
			 Isi dengan lengkap dan benar:
		</p>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="fullname"/>
		</div>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="number" placeholder="No_Rek" name="no_rek"/>
		</div>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="number" placeholder="Phone Number" name="no_telp"/>
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


<?php $this->view('template/footer'); ?>