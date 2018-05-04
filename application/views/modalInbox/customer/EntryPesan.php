 <!-- entry modal Barang -->
<div class="modal fade" id="entryPesanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">
          <div class="icon">
            <i class="glyphicon glyphicon-envelope"></i> Buat Pesan Baru
          </div>
        </h4>
      </div>
      <form method="POST" action="<?php echo site_url('Inbox/kirimPesan')?>" enctype="multipart/form-data">
      <div class="modal-body">
        <?php $tampung = $this->M_Inbox->getCustomer2($nama) ?>
          <?php foreach($tampung as $data2) { ?>
            <input required class="form-control required text-capitalize" data-placement="top" data-trigger="manual" type="hidden" name="pengirim2" value="<?php echo $data2->idpengguna ?>">
          <?php } ?>
          <?php foreach($customer as $data) { ?>
            <input required class="form-control required text-capitalize" data-placement="top" data-trigger="manual" type="hidden" name="pengirim" value="<?php echo $data->idpengguna ?>">
          <?php } ?>
          <input required class="form-control required text-capitalize" data-placement="top" data-trigger="manual" type="hidden" name="idpesan">
          <input required class="form-control required text-capitalize" data-placement="top" data-trigger="manual" type="hidden" name="tglpesan">
          <div class="form-group"><label>Nama Pengirim</label>
            <input required class="form-control required text-capitalize" data-placement="top" data-trigger="manual" type="text" name="namapengirim" value="<?php echo $nama ?>" readonly>
          </div>

          <div class="form-group"><label>Nama Penerima</label>
            <select name="namapenerima" class="form-control">
              <?php foreach($pemilik as $data) { ?>
              <option value="<?php echo $data->idpengguna ?>"><?php echo $data->namalengkap ?></option>
              <?php } ?>
            </select>
          </div>

        <!-- <div class="form-group"><label>Jenis Pesan</label>
          <select name="jenispesan" class="form-control">
            <option value="normal">Normal</option>
            <option value="komplain">Komplain</option>
          </select>
        </div> -->

          <div class="form-group"><label>Topik</label>
            <input required class="form-control required text-capitalize" data-placement="top" data-trigger="manual" type="text" name="topik">
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
