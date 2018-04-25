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

		<h2>List Penghuni Kontrakan</h2>
		<span class="pull"><a href="#">Admin</a> / List Penghuni Kontrakan</span>
	</div>
</div>
<!-- banner -->
<div class="container-center" style="margin: 10px;">
	<div class="row">
		<div class="col-lg-9 col-sm-12 ">
			<table class="table table-striped table-bordered table-hover">
				<thead>
				<tr>
					<th class="center">E-mail</th>
					<th class="center">Nama</th>
					<th class="center">Status</th>
					<th class="center">Action</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach($all as $user) {
					if($user->auth == 2) {
						?>
						<tr>
							<td class="center"><?php echo $user->email; ?></td>
							<td class="center"><?php echo $user->namalengkap; ?></td>
							<td class="center"><?php echo 'Penghuni Kontrakan'; ?></td>
							<td class="center"><a href="<?php echo base_url('view/' . $user->idpengguna) ?>" data-toggle="modal" class="btn btn-default" style="background-color: aquamarine;"><b>View</b></a> |
								<a href="<?php echo base_url('edit/'.$user->idpengguna)?>" type="button" class="btn btn-warning"><b>Edit</b></a>
								| <a href="<?php echo base_url('delete/'.$user->idpengguna)?>" type="button" class="btn btn-danger"><b>Delete</b></a></td>
						</tr>
						<?php
					}else {
					}
				}
				?>
				</tbody>
			</table>
		</div>
		<div class="col-lg-3 visible-lg">
			<div class="panel panel-default">
				<div class="panel-heading center" style="font-size: large"><b>Menu</b></div>
				<div class="panel-body" style="font-size: large">
					<ul class="nav nav-pills nav-stacked">
						<li ><a href="<?php echo base_url('Admin')?>">List Pemilik Kontrakan</a></li>
						<li class="active"><a href="<?php echo base_url('Admin/Penghuni')?>">List Penghuni Kontrakan</a></li>
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
