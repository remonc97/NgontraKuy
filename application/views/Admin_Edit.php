<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#include header file
$this->view('template/header');
?>
<!-- #Header Starts -->
<div class="container">
	<!-- Header Starts -->
	<div class="header">
		<a href="<?php echo site_url('Admin')?>"><img src="<?php echo base_url('assets/images/logo1.png')?>" width="200px" alt="NgontraKuy"></a>


        <?php if(isset($session) && $session == true){
            echo
                "
                <ul class=\"pull-right dropdown\">
                    <li style=\"margin-top: 20px;\">
                        <a href=\"#\" style=\"text-transform:Capitalize;font-family: 'Ubuntu', sans-serif;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Hi, $namalengkap! <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\"  style=\"padding-top: 10px;padding-bottom: 10px;\">
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

		<h2>Edit <?php if($one1->auth == 1) { ?>Pemilik <?php }if($one1-> auth == 2){ ?>Penghuni<?php } ?> Kontrakan</h2>
		<span class="pull"><a href="#">Admin</a> / List <?php if($one1->auth == 1) { ?>Pemilik <?php }if($one1-> auth == 2){ ?>Penghuni<?php } ?> Kontrakan</span>
	</div>
</div>
<!-- banner -->
<div class="container-center" style="margin: 10px;">
	<div class="row">
		<div class="col-lg-9 col-sm-12 card" style="padding-left: 200px; padding-bottom: 20px; padding-top: 20px">
			<div class="col-md-4">
				<?php echo form_open('Admin/edit1/'.$one1->idpengguna)?>
				<div class="control-group">
					<label class="control-label">E-mail</label>
					<div class="controls" >
						<input name="email" type="text" value="<?php echo $one1->email?>" required/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Nama</label>
					<div class="controls">
						<input type="text" name="nama" value="<?php echo $one1->namalengkap?>" required/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Tanggal Lahir</label>
					<div class="controls">
						<input type="date" name="tgllahir" value="<?php echo $one1->tgllahir?>" required/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">No Telepon</label>
					<div class="controls">
						<input type="text" name="notelp" value="<?php echo $one1->notelp?>" required/>
					</div>
				</div>
				<input type="submit" role="button" class="btn btn-warning" value="Update" />
				<a href="<?php if($one1->auth == 1){echo base_url('Admin');}elseif ($one1->auth == 2){echo base_url('Admin/Penghuni');};?>" class="btn btn-danger">Cancel</a>
				<?php echo form_close()?>
			</div>
			<div class="col-md-8">
				<table class="table table-striped table-bordered table-hover">
					<thead>
					<tr>
						<th class="center">E-mail</th>
						<th class="center">Nama</th>
						<th class="center">Status</th>
					</tr>
					</thead>
					<tbody>
						<tr>
							<td class="center"><?php echo $one1->email; ?></td>
							<td class="center"><?php echo $one1->namalengkap; ?></td>
							<td class="center"><?php if($one1->auth == 2){echo 'Penghuni Kontrakan';}elseif($one1->auth == 1){echo 'Pemilik Kontrakan';}?></td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
		<div class="col-lg-3 visible-lg">
			<div class="panel panel-default">
				<div class="panel-heading center" style="font-size: large"><b>Menu</b></div>
				<div class="panel-body" style="font-size: large">
					<ul class="nav nav-pills nav-stacked">
						<li><a href="<?php echo base_url('Admin')?>">List Pemilik Kontrakan</a></li>
						<li><a href="<?php echo base_url('Admin/Penghuni')?>">List Penghuni Kontrakan</a></li>
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
