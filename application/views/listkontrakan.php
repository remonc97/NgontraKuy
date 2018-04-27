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
                    <li class="active"><a href="<?php echo site_url()?>" >Home</a></li>
                    <li><a href="<?php echo site_url('Agents')?>">Agents</a></li>
                    <li><a href="<?php echo site_url('ContactUs')?>">Contact Us</a></li>
                    <li><a href="<?php echo site_url('About')?>">About</a></li>
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
                <ul class=\"pull-right\">
                    <li>
                      <a href=\"#\" style=\"text-transform:Capitalize;font-family: 'Ubuntu', sans-serif;\" data-toggle=\"modal\" data-target=\"#TamKon\">Tambah Kontrakan</a>
                  </li>
                    <li style=\"margin-top: -10px;padding-top: 10px;padding-bottom: 10px;\" class='dropdown'>
                        <a href=\"#\" style=\"text-transform:Capitalize;font-family: 'Ubuntu', sans-serif;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Hi, $namalengkap! <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\"  >
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

<!-- banner -->
<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="#">Home</a> / Profile</span>
        <h2>List Kontrakan</h2>
    </div>
</div>
<!-- banner -->


<div class="container">
    <div class="spacer">
        <div class="row register">
            <div class="col-lg-12" style="background-color: white;padding:50px">
                <div class="row">
                    <div class="col-md-12">
                        <h3>List Kontrakan</h3><br/>
                        <br/>
                        <br/>
                        <br/>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td align="center">No</td>
                            <td align="center">Nama Kontrakan</td>
                            <td align="center">No Telepon</td>
                            <td align="center">Alamat</td>
                            <td align="center">Action</td>
                         </tr>
                     </thead>
                     <?php if(isset($datakontrakan) && $datakontrakan!=null){?>
                     <tbody>
                         <?php $x = 1; ?>
                         <?php foreach($datakontrakan as $data){ ?>
                         <tr>
                            <td align="center"><?php echo $x;?></td>
                            <td align="center"><?php echo $data->nmkontrakan;?></td>
                            <td align="center"><?php echo $data->notelp;?></td>
                            <td align="center"><?php echo $data->alamat;?></td>
                            <td align="center"><a href="<?php echo base_url('ViewKontrakan/'.$data->idkontrakan)?>" class="btn btn-warning" name="btnadd" id="btnadd">View</a> | <a href="<?php echo base_url('DaftarKontrakan/DeleteData/'.$data->idkontrakan.'')?>" class="btn btn-danger" name="btnadd" id="btnadd">Delete</a></td>
                         </tr>
                         <?php $x = $x+1; ?>
                         <?php } ?>
                     </tbody>
                     <?php }else { ?>
                     <tbody>
                        <tr>
                            <td colspan="5"><center>No data</center></td>
                        </tr>
                     </tbody>
                     <?php } ?>
                 </table>
            </div>
        </div>
    </div>
</div>

<?php
#include footer file
$this->view('template/footer');
?>
