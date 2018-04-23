 <!-- detil modal Pesan -->
<?php foreach($detilPesan as $data){?>
<div class="modal fade" tabindex="-1" id="detilPesanModal<?php echo $data->idpesan ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         <h4><center><b>History Chat</b><center></h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" border="0">
          <tbody>
            <?php $namalengkap = $this->M_Inbox->getNamaPenerima($data->idpenerima); ?>
            <?php foreach($namalengkap as $data2) { ?>
            <tr style="text-transform:capitalize;">
              <td width="150px">Kepada : </td>
              <td><?php echo $data2->namalengkap ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>

        <table class="table table-striped" border="0">
          <tbody>
            <tr style="text-transform:capitalize;">
              <td><?php echo $data->isi ?></td>
            </tr>
          </tbody>
        </table>     
      </div>
    </div>
  </div>
</div>
<!-- /.Detil modal Barang -->
<?php } ?>  