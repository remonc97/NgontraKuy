 <!-- detil modal Barang -->
<?php foreach($detilPesan as $data){?>
<div class="modal fade" tabindex="-1" id="detilPesanModal<?php echo $data->idpesan ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         <h3 id="myModalLabel"><span class="glyphicon glyphicon-envelope"></span> Pesan</h3>
      </div>
      <div class="modal-body">
        <form method="POST" action="" enctype="multipart/form-data">
          <table class="table table-striped" border="0">
            <tbody>
              <tr>
                <td>Nama Penerima</td>
                <td>:</td>
                <td style="text-transform:capitalize;"><?php echo $data->nama ?></td>
              </tr>
              <tr>
                <td>Tanggal Kirim</td>
                <td>:</td>
                <td style="text-transform:capitalize;"><?php echo $data->tglpesan ?></td>
              </tr>
                <tr>
                  <td>Jenis Pesan</td>
                  <td>:</td>
                  <td style="text-transform:capitalize;"><?php echo $data->jenispesan ?></td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td>:</td>
                  <td style="text-transform:capitalize;"><span class="label label-success"><?php echo $data->status;?></span></td>
                </tr>
                <tr>
                  <td>Isi Pesan</td>
                  <td>:</td>
                  <td style="text-transform:capitalize;"><?php echo $data->isi ?></td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /.Detil modal Barang -->
  <?php } ?>