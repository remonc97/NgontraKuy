 <!-- entry modal Barang -->
<div class="modal fade" id="entryPesanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">
          <div class="icon">
            <i class="ion ion-cube"></i> Buat Pesan Baru
          </div>
        </h4>
      </div>
      <form method="POST" action="<?php echo site_url('')?>" enctype="multipart/form-data">
      <div class="modal-body">

         <input required class="form-control required text-capitalize" placeholder="Input Tahun Terbit" data-placement="top" data-trigger="manual" type="hidden" name="tglpesan">

        <div class="form-group"><label>Nama Penerima</label>
          <select name="jenispesan" class="form-control">
            <option value="iduser">Nama</option>
          </select> 
        </div>

        <div class="form-group"><label>Jenis Pesan</label>
          <select name="jenispesan" class="form-control">
            <option value="normal">Normal</option>
            <option value="komplain">Komplain</option>
          </select> 
        </div>

        <div class="form-group"><label>Isi Pesan</label>
          <textarea name="sinopsis" class="form-control"></textarea>
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
              <!-- /.entry Barang modal -->