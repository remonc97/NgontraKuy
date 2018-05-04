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


		<?php if(isset($session) && $session == true){
			echo
				"
                <ul class=\"pull-right dropdown\">
                    <li style=\"margin-top: 20px;\">
                        <a href=\"#\" style=\"text-transform:Capitalize;font-family: 'Ubuntu', sans-serif;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Hi, $namalengkap! <span class=\"caret\"></span></a>
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
                    <li ><a href=\"#\" style=\"font-family: 'Ubuntu', sans-serif;\" data-toggle=\"modal\" data-target=\"#loginpop\">Login</a></li>
                </ul>";
		} ?>
	</div>
	<!-- #Header Starts -->

</div>
<!-- banner -->
<div class="container-center" style="margin: 10px;">
	<div class="header">
		<h2>Detail Pemilik Kontrakan atas nama, <?php echo $one->namalengkap?></h2>
	</div>
		<div class="row" style="font-size: large">
			<div class="col-lg-1"></div>
			<div class="col-lg-9 card">
				<table style="background-color: transparent; margin: 10px;">
					<th>ID</th>
					<th>:</th>
					<th><?php echo $one->idpengguna?></th>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><?php echo $one->namalengkap;?></td>
					</tr>
					<tr>
						<td>E-mail</td>
						<td>:</td>
						<td><?php echo $one->email;?></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td date-format="DD-MM-YYYY"><?php echo $one->tgllahir;?></td>
					</tr>
					<tr>
						<td>Nomor Telepon</td>
						<td>:</td>
						<td><?php echo $one->notelp;?></td>
					</tr>
					<tr>
						<td>Status</td>
						<td>:</td>
						<td><?php echo 'Pemilik Kontrakan';?></td>
					</tr>
				</table>
				<a href="<?php echo base_url('Admin')?>" class="btn btn-default" style="margin: 20px; background-color: #0a5d5e; color: white">Go Back!</a>
			</div>
			<div class="col-lg-2"></div>
		</div>


</div>

<?php
#include footer file
$this->view('template/footer');
?>
