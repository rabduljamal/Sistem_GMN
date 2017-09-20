<div class="container">

    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Purchase</h5>
        <ol class="breadcrumbs">
          <li><a href="index.php"><span class="mdi-action-home"></span></a></li>
          <li class="active"><a href="#">Pengajuan</a></li>
        </ol>
      </div>
    </div>
    <!--work collections end-->
    <div class="row">
      <div class="col s12 m12 l12">

        <div class="row">
          <div class="card-panel">
            <div class="row">
              <div class="input-field col s3">
                <input id="no_order" type="text" class="validate valid" readonly value="<?=$no_order?>">
                <label for="no_order" class="active">No. Order</label>
              </div>
              <div class="input-field col s3">
                <input id="no_faktur" type="text" class="validate" >
                <label for="no_faktur">No. faktur</label>
              </div>
              <div class="input-field col s3">
                <input id="tanggal" type="text" class="validate valid" readonly value="<?=$tanggal?>">
                <label for="tanggal" class="active">Tanggal</label>
              </div>
              <div class="input-field col s3">
                <input id="pic" type="text" class="validate valid" readonly value="<?=$user_kode?>">
                <label for="pic" class="active">Pic</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="card-panel">
            <div class="header2">
              <div class="input-field col s3">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Cari Kode/Nama Barang / Vendor</label>
              </div>
              <div class="input-field col s3">
                <div id="modal-vendor-add" class="btn-floating btn-small cyan waves-effect waves-light btn modal-trigger" data-toggle="modal" data-target="modal_pengajuan_purchase">
                <i class="mdi-content-add"></i>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <table class="responsive-table display dataTable">
                    <thead>
                        <tr>
                            <th data-field="id">ID</th>
                            <th data-field="month">Nama Barang</th>
                            <th data-field="item-sold">Banyak</th>
                            <th data-field="item-price">Harga</th>
                            <th data-field="total-profit">Vendor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>January</td>
                            <td>122</td>
                            <td>100</td>
                            <td>$122,00.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>January</td>
                            <td>122</td>
                            <td>100</td>
                            <td>$122,00.00</td>
                        </tr>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<script>
  $(document).ready(function() {
  $('.modal-trigger').leanModal();
});
</script>
<div id="modal_pengajuan_purchase" class="modal">
  <div class="modal-content">
      <div class="input-field col s3">
        <input id="vendor_barang_kode" type="text" class="validate valid" readonly value="<?=$user_kode?>">
        <label for="vendor_barang_kode" class="active">Kode barang</label>
      </div>
      <div class="input-field col s3">
        <input id="vendor_barang_tanggal" type="text" class="validate valid" value="<?=$tanggal?>">
        <label for="vendor_barang_tanggal" class="active">Tanggal</label>
      </div>
      <div class="input-field col s3">
        <input id="vendor_barang_nama" type="text" class="validate">
        <label for="vendor_barang_nama">Nama Barang</label>
      </div>
      <div class="input-field col s3">
        <input id="vendor_barang_vendor" type="text" class="validate">
        <label for="vendor_barang_vendor">Vendor</label>
      </div>
  </div>
  <div class="modal-footer cyan">
    <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Tutup</a>
    <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Simpan</a>
  </div>
</div>
