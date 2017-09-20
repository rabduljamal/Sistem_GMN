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
                <input id="no_order" type="text" class="validate" readonly>
                <label for="no_order">No. Order</label>
              </div>
              <div class="input-field col s3">
                <input id="no_faktur" type="text" class="validate">
                <label for="no_faktur">No. faktur</label>
              </div>
              <div class="input-field col s3">
                <input id="tanggal" type="text" class="validate" readonly>
                <label for="tanggal">Tanggal</label>
              </div>
              <div class="input-field col s3">
                <input id="pic" type="text" class="validate" readonly>
                <label for="pic">Pic</label>
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
                <div id="modal-vendor-add" class="btn-floating btn-small cyan waves-effect waves-light btn modal-trigger">
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
$(document).on("click", "#modal-vendor-add", function(){
  $("#modal3").modal("show");
});
</script>
<div id="modal3" class="modal">
  <div class="modal-content teal white-text">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
  </div>
  <div class="modal-footer  teal lighten-4">
    <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Disagree</a>
    <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Agree</a>
  </div>
</div>
