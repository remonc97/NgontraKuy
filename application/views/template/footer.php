<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="footer">

        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-sm-3">
                    <h4>Information</h4>
                    <ul class="row">
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="<?php echo site_url('About')?>">About</a></li>
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="<?php echo site_url('Agents')?>">Agents</a></li>
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="<?php echo site_url('ContactUs')?>">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="#"><img src="<?php echo base_url('assets/images/facebook.png')?>" alt="facebook"></a>
                    <a href="#"><img src="<?php echo base_url('assets/images/twitter.png')?>" alt="twitter"></a>
                    <a href="#"><img src="<?php echo base_url('assets/images/linkedin.png')?>" alt="linkedin"></a>
                    <a href="#"><img src="<?php echo base_url('assets/images/instagram.png')?>" alt="instagram"></a>
                </div>

                <div class="col-lg-3 col-sm-3 col-sm-offset-3">
                    <h4>Contact us</h4>
                    <p><b>NgontraKuy Inc.</b><br>
                        <span class="glyphicon glyphicon-map-marker"></span>
                        Jl. Ciledug Raya, Petukangan Utara,
                        Jakarta Selatan, 12260.
                        DKI Jakarta, Indonesia.<br>
                        <span class="glyphicon glyphicon-envelope"></span> cs@ngontraKuy.com<br>
                        <span class="glyphicon glyphicon-earphone"></span> (+62) 812-8692-3378
                    </p>
                </div>
            </div>
            <p class="copyright">Copyright NgontraKuy&copy;<?php echo date('Y')?>. All rights reserved.</p>

        </div>
    
	</div>
    <!-- Modal -->
    <div id="loginpop" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <div class="col-sm-6 login">
                        <h4>Login</h4>
                        <?php echo form_open(site_url('Login'))?>
<!--                        <form class="" role="form" action="--><?php //echo site_url('Login')?><!--">-->
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="password">
                            </div>
                            <input type="submit" role="button" class="btn btn-success" value="Sign In"/>
<!--                        </form>-->
                        <?php echo form_close()?>
                    </div>
                    <div class="col-sm-6">
                        <h4>New User Sign Up</h4>
                        <p>Join today and book homes of your dream.</p>
                        <a href="<?php echo base_url('Register')?>" role="button" class="btn btn-info" >Join Now</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
	<!-- Modal -->
    <div id="TamKon" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4><b>Input Kontrakan:</h4><br>
                        <form name="formupload" action="<?php blink('TaKon/InsetRumah')?>" method="post" enctype="multipart/form-data"> 
							<input type="hidden" id="idkontrakan" name="idkontrakan" value="<?php echo $this->uri->segment(3);?>" />
                                <input type="hidden" class="form-control" id="idpengguna" name="idpengguna" value="<?php echo $this->session->userdata('idpengguna');?>" disabled>
                            <div class="form-group">
                                <label for="nmkontrakan">Nama Kontrakan</label>
                                <input type="text" class="form-control" id="nmkontrakan" placeholder="Nama Kontrakan" name="nmkontrakan">
                            </div>
                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <input type="text" class="form-control" id="kota" placeholder="Kota" name="kota">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat">
                            </div>
                            <div class="form-group">
                                <label for="notelp">No Telpon</label>
                                <input type="text" class="form-control" id="notelp" placeholder="No Telpon" name="notelp">
                            </div> 
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi">
                            </div>
                            <div class="form-group">
                                <label for="fasilitas">Fasilitas</label>
                                <input type="text" class="form-control" id="fasilitas" placeholder="Fasilitas" name="fasilitas">
                            </div>
                            <div class="form-group">
                                <label for="ukuran">Ukuran</label>
                                <input type="text" class="form-control" id="ukuran" placeholder="Ukuran" name="ukuran">
                            </div>
							<input id="status" type="hidden" name="status" value="available" checked>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" id="harga" placeholder="Rp." name="harga">
                            </div>
                            <div class="form-group">
                                <label for="file">Masukan Gambar</label>
                                <input type="file" id="gambar"  name="gambar[]" multiple>
                            </div>
							<br>
                            <input type="submit" role="button"  name="buat" class="btn btn-success" value="Create"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
</body>
</html>
