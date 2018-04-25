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
						<li><a href="<?php echo site_url('TermsConditions')?>">Terms of Conditions</a></li>
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
    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="#">Home</a> / Terms of Conditions</span>
            /*<h2>About Us</h2>*/
        </div>
    </div>
    <div class="container">
        <div class="spacer">
            <div class="row">
                <div class="col-lg-8  col-lg-offset-2">
                    <center><img src="<?php echo base_url('assets/images/logo1.png')?>" class="img-responsive thumbnail"  alt="realestate"></center><br/>
                    <h3>Terms of Conditions</h3>
                    <p> 1.	Isikan “Data Pribadi” dengan baik dan benar saat menggunakan Layanan, mendaftarkan akun pada kami,
							mengunjungi situs web kami, atau mengakses Layanan. Dengan mengisikan data pribadi Anda ke Ngontrakuy,
							berarti Anda sudah menyetujui tindakan NgontraKuy untuk mengumpulkan, menggunakan, mengungkapkan dan/atau
							mengolah Konten, data pribadi dan informasi pengguna Anda.
						
					<p> 2.	Anda menyetujui dan mengakui bahwa hak kepemilikan atas informasi pengguna dimiliki secara bersama oleh
							Anda dan NgontraKuy dan tidak akan (baik langsung maupun tidak langsung) mengungkapkan informasi pengguna
							Anda kepada setiap pihak ketiga, atau sebaliknya memperbolehkan setiap pihak ketiga untuk mengakses atau
							menggunakan informasi Pengguna Anda karena kami tidak menjamin keamanan data pribadi dan/atau informasi 
							yang Anda berikan ke pihak ketiga. <br></p>
						
					<p> 3.	Layanan kami termasuk layanan platform online yang menyediakan tempat dan peluang untuk pengkontrakan rumah
							antara pemilik kontrakan (“Owner”) dan penyewa kontrakan (“Tenant”). Kontrak atau perjanjian sebenarnya 
							adalah secara langsung antara Owner dan Tenant dan NgontraKuy bukan merupakan pihak didalamnya atau setiap
							kontrak lainnya antara Owner dan Tenant, serta tidak bertanggung jawab sehubungan dengan kontrak tersebut.
							Para pihak dalam transaksi tersebut akan sepenuhnya bertanggung jawab untuk kontrak penyewaan antara mereka,
							daftar kontrakan, garansi kerusakan, dan sebagainya. NgontraKuy tidak terlibat dalam transaksi antara Pengguna. <br></p>

					<p> 4.	Membuat Akun
							Untuk menggunakan fungsi tertentu dari Layanan, Anda harus membuat akun pengguna yang mengharuskan Anda
							untuk menyerahkan data pribadi tertentu seperti nama lengkap, alamat email, tanggal lahir dan nomor telepon
							aktif. Selain itu Anda juga harus menentukan kata sandi untuk akun Anda sendiri. Alamat email dan kata sandi
							Anda akan digunakan agar Anda dapat mengakses dan mengelola akun Anda dengan aman. <br></p>
							
					<p>	5.	Transaksi
							a.	Bagi para Pemilik kontrakan (“Owner”), Anda harus mengisi data yang NgontraKuy cantumkan dengan 
							sebenar-benarnya, seperti Nama Kontrakan, nomor telpon aktif, alamat kontrakan, kota tempat kontrakan berada,
							deskripsi, fasilitas yang tersedia, ukuran, gambar, harga dan status tersedia atau tidak tersedia 
							(tersedia untuk kontrakan yang masih kosong, dan tidak tersedia bagi kontrakan yang sudah detempati).
							b.	Bagi para Penyewa kontrakan (“Tenant”), Anda juga harus mengisi data yang NgontraKuy cantumkan terutama 
							dalam proses pemesanan (“Booking”) kontrakan seperti nama lengkap, nomor telepon, tanggal menempati kontrakan 
							dan tanggal meninggalkan kontrakan.
							Data-data yang benar akan mempermudah proses transaksi Anda dan untuk memastikan bahwa tidak ada penipuan
							dalam transaksi tersebut.
							c.	Pemilik kontrakan (“Owner”) harus memberikan persetujuan dalam 1x24 jam untuk setiap permintaan transaksi
							dari Tenant, dan Tenant tidak dapat membatalkan transaksi mereka serta wajib melunasi tagihan yang Owner 
							tentukan dalam waktu satu bulan (proses pembayaran ditentukan oleh Owner kontrakan masing-masing).
							d.	NgontraKuy tidak bertanggung jawab dan tidak memiliki kewajiban apapun atas kerugian atau kerusakan yang
							timbul dari Owner dan/atau Tenant.<br></p>
					
                </div>

            </div>
        </div>
    </div>
<?php
#include footer file
$this->view('template/footer');
?>