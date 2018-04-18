   <!-- detil modal Barang -->
<?php foreach($customer as $data) { ?>
<div class="modal fade" tabindex="-1" id="balasPesanModal<?php echo $data->idpesan ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         <h3 id="myModalLabel"><span class="glyphicon glyphicon-envelope"></span> Pesan</h3>
      </div>
      <div class="modal-body">
          <form method="POST" action="<?php echo site_url('Inbox/balasPesanCustomer')?>" enctype="multipart/form-data">
            <div class="modal-body">

              <input required class="form-control required text-capitalize" data-placement="top" data-trigger="manual" type="hidden" name="<?php echo $data->iduser ?>">

              <div class="form-group"><label>Nama Pengirim Pesan</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $data->nama?>" readonly="">
                 <input required class="form-control required text-capitalize" data-placement="top" data-trigger="manual" type="hidden" value="<?php echo $data->iduser ?>" name="penerima">
              </div>

              <div class="form-group"><label>Jenis Pesan</label>
                <?php if( $data->jenispesan=='normal') { ?>
                  <input type="text" name="jenispesan" class="form-control" value="<?php echo $data->jenispesan?>" readonly="">
                <?php } else { ?>
                  <input type="text" name="jenispesan" class="form-control" value="<?php echo $data->jenispesan?>" readonly="">
                <?php } ?>
              </div>
              

              <div class="form-group"><label>Isi Pesan</label>
                <textarea name="isipesan" class="form-control"></textarea>
              </div>

            </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="fa fa-send"></i> Kirim Pesan</button>
                <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p>
              </div>
           </form>
      </div>
    </div>
  </div>
</div>
<!-- /.Detil modal Barang -->
<?php } ?>
  