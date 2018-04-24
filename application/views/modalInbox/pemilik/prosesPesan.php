<!--MODAL Proses -->
<?php if (isset($pesan)){
foreach($pesan as $data){ ?>
<div class="modal fade" id="prosesPesanModal<?php echo $data->idpengirim ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Konfirmasi Proses</h4>
      </div>
      <div class='modal-body'>Anda yakin ingin memproses pesan ?
      </div>
      <div class='modal-footer'>
        <form class="" action="<?php echo site_url('Inbox/prosesPesan') ?>" method="post">
          <input type='hidden' value='<?php echo $data->idpesan?>' name='idpesan'>
            <button type='button' class='btn btn-default' data-dismiss='modal'>Batal</button>
            <button class='btn btn-danger' aria-label='Proses' type='submit' name='hapus'><i class="fa fa-gears"></i> Proses</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php }
  }
?>