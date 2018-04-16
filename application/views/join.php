<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Register</span>
    <h2>Register</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">


                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_users" id="nama_users">
                <input type="text" class="form-control" placeholder="Alamat Email" name="email" id="email">
                <input type="password" class="form-control" placeholder="Kata Sandi" name="password" id="password">
                <input type="password" class="form-control" placeholder="Konfirmasi Kata Sandi" name="password2" id="password2">
				<input type="number" class="form-control" placeholder="No.Rekening" name="no_rek" id="no_rek">
				<input type="number" class="form-control" placeholder="No.Telp" name="telpon" id="telpon">
                
                <textarea rows="6" class="form-control" placeholder="Alamat" name="alamat" id="alamat"></textarea>
			
			<button type="submit" class="btn btn-success" name="Submit">Register</button>
          


                
        </div>
  
</div>
</div>
</div>

<?php include'footer.php';?>