<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#include header file
$this->view('template/header');
?>
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

		<h2>List Pemilik Kontrakan</h2>
		<span class="pull"><a href="#">Admin</a> / List Pemilik Kontrakan</span>
	</div>
</div>
<!--<div class="">-->
<!--    <div id="slider" class="sl-slider-wrapper">-->
<!--sssss-->
<!--    </div><!-- /slider-wrapper -->
<!--</div>-->

<!-- banner -->
<div class="container-center" style="margin: 10px;">
	<div class="row">
		<div class="col-lg-9 col-sm-12 ">
			<table class="table table-striped table-bordered table-hover">
				<thead>
				<tr>
					<th class="center">E-mail</th>
					<th class="center">Nama</th>
					<th class="center">Auth</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach($all as $user) {?>
				<tr>
					<td><?php echo $user->email;?></td>
					<td><?php echo $user->nama;?></td>
					<td><?php echo $user->auth;?></td>
				</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="col-lg-3 visible-lg">
			<div class="panel panel-default">
				<div class="panel-heading center" style="font-size: large"><b>Menu</b></div>
				<div class="panel-body" style="font-size: large">
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a>List Pemilik Kontrakan</a></li>
						<li><a>List Penghuni Kontrakan</a></li>
						<li><a>Inbox</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
#include footer file
$this->view('template/footer');
?>
