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

        <ul class="pull-right center">
            <li><a href="#" style="font-family: 'Ubuntu', sans-serif;" data-toggle="modal" data-target="#loginpop">Login</a></li>
        </ul>
    </div>
    <!-- #Header Starts -->

</div>
<div class="inside-banner">
	<div class="container">

		<h2>Admin Dashboard</h2>
		<span class="pull"><a href="#">Home</a> / About Us</span>
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
		<div class="col-lg-8 col-sm-12 ">
			<table class="table table-striped table-bordered table-hover">
				<thead>
				<tr>
					<th class="center">aaa</th>
					<th class="center">aaa</th>
					<th class="center">aaa</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>a</td>
					<td>a</td>
					<td>a</td>
				</tr>
				<tr>
					<td>b</td>
					<td>b</td>
					<td>b</td>
				</tr>
				<tr>
					<td>c</td>
					<td>c</td>
					<td>c</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="col-lg-4 visible-lg">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li class=""><a href="#tab1" data-toggle="tab">Recent Post</a></li>
					<li class=""><a href="#tab2" data-toggle="tab">Most Popular</a></li>
					<li class="active"><a href="#tab3" data-toggle="tab">Most Commented</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane" id="tab1">
						<ul class="list-unstyled">
							<li>
								<h5><a href="blogdetail.php">Real estate marketing growing</a></h5>
								<div class="info">Posted on: Jan 20, 2013</div>
							</li>
							<li>
								<h5><a href="blogdetail.php">Real estate marketing growing</a></h5>
								<div class="info">Posted on: Jan 20, 2013</div>
							</li>
							<li>
								<h5><a href="blogdetail.php">Real estate marketing growing</a></h5>
								<div class="info">Posted on: Jan 20, 2013</div>
							</li>
						</ul>
					</div>
					<div class="tab-pane" id="tab2">
						<ul  class="list-unstyled">
							<li>
								<h5><a href="blogdetail.php">Market update on new apartments</a></h5>
								<div class="info">Posted on: Jan 20, 2013</div>
							</li>

							<li>
								<h5><a href="blogdetail.php">Market update on new apartments</a></h5>
								<div class="info">Posted on: Jan 20, 2013</div>
							</li>

							<li>
								<h5><a href="blogdetail.php">Market update on new apartments</a></h5>
								<div class="info">Posted on: Jan 20, 2013</div>
							</li>
						</ul>
					</div>
					<div class="tab-pane active" id="tab3">
						<ul class="list-unstyled">
							<li>
								<h5><a href="blogdetail.php">Creative business to takeover the market</a></h5>
								<div class="info">Posted on: Jan 20, 2013</div>
							</li>

							<li>
								<h5><a href="blogdetail.php">Creative business to takeover the market</a></h5>
								<div class="info">Posted on: Jan 20, 2013</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
#include footer file
$this->view('template/footer');
?>
