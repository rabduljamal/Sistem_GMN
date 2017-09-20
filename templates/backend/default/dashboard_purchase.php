<div class="container">

    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Dashboard</h5>
        <ol class="breadcrumbs">
          <li><a href="index.php"><span class="mdi-action-home"></span></a></li>
          <li class="active"><a href="#">Dashboard</a></li>
        </ol>
      </div>
    </div>

    <!--card stats start-->
    <div id="card-stats">
        <div class="row">
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-content  green white-text">
                        <p class="card-stats-title"><i class="mdi-action-assignment-turned-in"></i>Barang Diterima</p>
                        <h4 class="card-stats-number">566</h4>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-content pink lighten-1 white-text">
                        <p class="card-stats-title"><i class="mdi-action-assignment-late"></i>Barang Selisih</p>
                        <h4 class="card-stats-number">1806</h4>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-content blue-grey white-text">
                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Nominal Selisih</p>
                        <h4 class="card-stats-number">$806.52</h4>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-content purple white-text">
                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Pengajuan</p>
                        <h4 class="card-stats-number">$8990.63</h4>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--card stats end-->

    <!--chart dashboard start-->
    <div id="chart-dashboard">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-move-up waves-effect waves-block waves-light">
                        <div class="move-up cyan darken-1">
                            <div>
                                <span class="chart-title white-text">Revenue</span>
                                <div class="chart-revenue cyan darken-2 white-text">
                                    <p class="chart-revenue-total">$4,500.85</p>
                                    <p class="chart-revenue-per"><i class="mdi-navigation-arrow-drop-up"></i> 21.80 %</p>
                                </div>
                                <div class="switch chart-revenue-switch right">
                                    <label class="cyan-text text-lighten-5">
                                      Month
                                      <input type="checkbox">
                                      <span class="lever"></span> Year
                                    </label>
                                </div>
                            </div>
                            <div class="trending-line-chart-wrapper">
                                <canvas id="trending-line-chart" height="70"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Revenue by Month <i class="mdi-navigation-close right"></i></span>
                        <table class="responsive-table">
                            <thead>
                                <tr>
                                    <th data-field="id">ID</th>
                                    <th data-field="month">Month</th>
                                    <th data-field="item-sold">Item Sold</th>
                                    <th data-field="item-price">Item Price</th>
                                    <th data-field="total-profit">Total Profit</th>
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
                                    <td>2</td>
                                    <td>February</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>March</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>April</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>May</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>June</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>July</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>August</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Septmber</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Octomber</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>November</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>December</td>
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
    <!--chart dashboard end-->

    <!--work collections start-->
    <div id="work-collections">
        <div class="row">
            <div class="col s12 m12 l6">
                <ul id="projects-collection" class="collection">
                    <li class="collection-item avatar">
                        <i class="mdi-action-note-add circle light-green darken-2"></i>
                        <span class="collection-header">Pengajuan Terbaru</span>
                        <p><i>item pengajuan purchase terbaru desc</i></p>
                    </li>
                    <li class="collection-item">
                        <table class="responsive-table">
                          <thead>
                            <tr>
                                <th data-field="id">Name</th>
                                <th data-field="name">Item Name</th>
                                <th data-field="price">Item Price</th>
                                <th data-field="total">Total</th>
                                <th data-field="status">Status</th>
                            </tr>
                          </thead>
                            <tbody><tr>
                              <td>Alvin</td>
                              <td>Eclair</td>
                              <td>$0.87</td>
                              <td>$1.87</td>
                              <td>Yes</td>
                            </tr>
                            <tr>
                              <td>Alan</td>
                              <td>Jellybean</td>
                              <td>$3.76</td>
                              <td>$10.87</td>
                              <td>No</td>
                            </tr>
                            <tr>
                              <td>Jonathan</td>
                              <td>Lollipop</td>
                              <td>$7.00</td>
                              <td>$12.87</td>
                              <td>Yes</td>
                            </tr>
                            <tr>
                              <td>Shannon</td>
                              <td>KitKat</td>
                              <td>$9.99</td>
                              <td>$14.87</td>
                              <td>No</td>
                            </tr>
                          </tbody>
                        </table>
                    </li>

                </ul>
            </div>
            <div class="col s12 m12 l6">
                <ul id="projects-collection" class="collection">
                    <li class="collection-item avatar">
                        <i class="mdi-av-new-releases circle orange darken-2"></i>
                        <span class="collection-header">Projects</span>
                        <p><i>faktur pengajuan purchase terbaru desc</i></p>
                    </li>
                    <li class="collection-item">
                        <table class="responsive-table">
                          <thead>
                            <tr>
                                <th data-field="id">Name</th>
                                <th data-field="name">Item Name</th>
                                <th data-field="price">Item Price</th>
                                <th data-field="total">Total</th>
                                <th data-field="status">Status</th>
                            </tr>
                          </thead>
                            <tbody><tr>
                              <td>Alvin</td>
                              <td>Eclair</td>
                              <td>$0.87</td>
                              <td>$1.87</td>
                              <td>Yes</td>
                            </tr>
                            <tr>
                              <td>Alan</td>
                              <td>Jellybean</td>
                              <td>$3.76</td>
                              <td>$10.87</td>
                              <td>No</td>
                            </tr>
                            <tr>
                              <td>Jonathan</td>
                              <td>Lollipop</td>
                              <td>$7.00</td>
                              <td>$12.87</td>
                              <td>Yes</td>
                            </tr>
                            <tr>
                              <td>Shannon</td>
                              <td>KitKat</td>
                              <td>$9.99</td>
                              <td>$14.87</td>
                              <td>No</td>
                            </tr>
                          </tbody>
                        </table>
                    </li>

                </ul>
            </div>

        </div>
    </div>
    <!--work collections end-->

</div>
