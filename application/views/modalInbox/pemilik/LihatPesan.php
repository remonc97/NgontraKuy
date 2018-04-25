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
                    <li style=\"margin-top: -10px\"><a href=\"#\" style=\"text-transform:Capitalize;font-family: 'Ubuntu', sans-serif;\" data-toggle=\"modal\" data-target=\"#TamKon2\">Tambah Kontrakan</a></li>
                    <li style=\"margin-top: -10px\"><a href=\"#\" style=\"text-transform:Capitalize;font-family: 'Ubuntu', sans-serif;\" data-toggle=\"modal\" data-target=\"#TamKon\">Tambah Rumah</a></li>
                    <li style=\"margin-top: -10px;padding-top: 10px;padding-bottom: 10px;\">
                        <ul class='dropdown'>
                            <li>
                                <a href=\"#\" style=\"text-transform:Capitalize;font-family: 'Ubuntu', sans-serif;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Hi, $nama! <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\"  >
                                    <li><a href=".site_url('Profile').">Profile</a></li>
                                    <li><a href=".site_url('Inbox').">Inbox</a></li>
                                    <li><a href=".site_url('Logout').">Log out</a></li>
                                </ul>
                            </li>
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

<div class="panel panel-default" style="background-color: #999999">
  <div class="panel-body">
    <div class="conteiner">
  <div class="row">
    <div class="col-md-8 col-sm-offset-2">
      <div class="panel panel-success">
        <div class="panel-heading"><a href="<?php echo site_url('Inbox') ?>" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a></div>
        <div class="panel-body" style="height: 300px; overflow-y: scroll">
          <div class="row">


             <div class="col-md-7 pull-left">
              <?php foreach($showChat2 as $show) { ?>
              <div class="panel panel-warning panel-comment">
                <div class="panel-heading">
                  <strong style="opacity: .5; font-size: 12px; color: #2a2709"><?php echo $show->namalengkap ?>:</strong>
                  <small><?php echo date("d-M-Y H:i:s"); ?></small><br/>
                  <?php echo $show->isi ?>
                </div>
              </div>
              <?php } ?>
            </div>

            <div class="col-md-7 pull-right">
              <?php foreach($isiPesanBalas as $show) { ?>
              <div class="panel panel-success panel-comment">
                <div class="panel-heading">
                  <strong style="opacity: .5; font-size: 12px; color: #2a2709"><?php echo $show->namalengkap ?>:</strong>
                  <small><?php echo date("d-M-Y H:i:s"); ?></small><br/>
                  <?php echo $show->isi ?>
                </div>
              </div>
              <?php } ?>
            </div>
              

          </div>
        </div>
        <form method="POST" action="<?php echo site_url('Inbox/balasPesanPemilikDetil')?>" enctype="multipart/form-data">

            <?php foreach($showChat2 as $tampilin) { ?>
              <input required class="form-control required text-capitalize" data-placement="top" data-trigger="manual" type="hidden" name="idpengirim" value="<?php echo $tampilin->idpenerima ?>">

              <?php $namalengkap = $this->M_Inbox->getNamaPenerima($tampilin->idpenerima); ?>
              <div class="form-group">
                <?php foreach($namalengkap as $item) { ?>
                <input type="hidden" name="namapenerima" class="form-control" value="<?php echo $item->namalengkap ?>" readonly="">
                <input required class="form-control required text-capitalize" data-placement="top" data-trigger="manual" type="hidden" name="idpenerima" value="<?php echo $tampilin->idpengirim ?>">
                <?php } ?>
              </div>

<?php echo "pengirim $tampilin->idpenerima" ?>
<?php echo "penerima $tampilin->idpengirim" ?>
              <div class="form-group">
                <?php if( $show->jenispesan=='normal') { ?>
                  <input type="hidden" name="jenispesan" class="form-control" value="<?php echo $tampilin->jenispesan?>" readonly="">
                <?php } else { ?>
                  <input type="hidden" name="jenispesan" class="form-control" value="<?php echo $tampilin->jenispesan?>" readonly="">
                <?php } ?>
              </div>
              <?php } ?>
              <div class="panel-footer">
                <div class="panel-body">
                  <div class="form-group">
                    <textarea name="isipesan" class="form-control"></textarea>
                  </div>
                  <button type="submit" class="btn btn-success"><i class="fa fa-send"></i> Kirim Pesan</button>
                  <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p>
                </div>
              </div>
           </form>

      </div>
    </div>
  </div>
</div>
  </div>
</div>
           <!-- 
      </div>
    </div>
  </div>
</div> -->
<!-- /.Detil modal Barang -->




