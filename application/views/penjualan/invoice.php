<div class="card border-dark text-dark">
    <div class="pdd-vertical-5 pdd-horizon-10 border bottom print-invisible">
        <ul class="list-unstyle list-inline text-right">
            <li class="list-inline-item">
                <a href="#" class="btn text-gray text-hover display-block padding-10 no-mrg-btm" onclick="window.print();">
                    <i class="ti-printer text-info pdd-right-5"></i>
                    <b>Print</b>
                </a>
            </li>
        </ul>
    </div>
    <a href="<?php echo base_url('index.php/Penjualan/update_invoice') ?>" name="submit" class="btn btn-dan">
        <i class="ti-reload pdd-right-5"></i>
        <span>Reset</span>
    </a>
    <div class="card-body">
        <div class="pdd-horizon-30">
            <div class="mrg-top-15">
                <div class="inline-block">
                    <img class="img-responsive" src="<?php echo base_url() ?>assets/images/logo.png" alt="">
                    <address class="pdd-left-10 mrg-top-20">
                        <b class="text-dark">Anime GF</b><br>
                        <span>admin Kasir</span><br>
                        <span>Jakarta Barat</span><br>
                        <abbr class="text-dark" title="Phone">Phone:</abbr>
                        <span>021xxx</span>
                    </address>
                </div>
                <div class="pull-right">
                    <h2>INVOICE</h2>
                </div>
            </div>
            <div class="row mrg-top-20">
                <div class="col-md-9 col-sm-9">
                    <h3 class="pdd-left-10 mrg-top-10">Invoice To:</h3>
                    <address class="pdd-left-10 mrg-top-10">
                        <b class="text-dark"></b><br>
                        <span></span><br>
                        <span></span>
                    </address>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="mrg-top-80">
                        <div class="text-dark text-uppercase inline-block"><b>Invoice No :</b></div>
                        <div class="pull-right"><?php echo no_faktur() ?></div>
                    </div>
                    <div class="">
                        <div class="text-dark text-uppercase inline-block"><b>Date :</b></div>
                        <div class="pull-right"><?php echo tgl_indo(tanggal()) ?></div>
                    </div>
                </div>
            </div>
            <div class="row mrg-top-20">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Quantity</th>
                                <th>Harga</th>
                                <th>Jumlah Uang</th>
                                <th>Kembalian</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            $no = 1;
                            foreach ($record as $jual) {
                                echo "<tr>
                                <td>$no</td>
                                <td>$jual->nama_barang</td>
                                <td>$jual->harga_jual</td>   
                                <td>$jual->total_beli</td>
                                <td>$jual->jumlah_uang</td>
                                 <td>$jual->uang_kembali</td>   
                                <td class='text-right'>$jual->total_belanja</td>
                         </tr>";
                                $no++;
                                $total = $total + ($jual->harga_jual * $jual->total_beli);
                            }
                     echo "</table>
                     <div class='row mrg-top-30'>
                     <div class='col-md-12'>
                   <div class='pull-right text-right'>
                  <p></p>
                 <p></p>
                <hr>
              <h3><b>Total :</b>Rp " . $total . "</h3>
             </div>
         </div>
      </div>";
                    ?>
                        <div class="row mrg-top-30">
                            <div class="col-md-12">
                                <div class="border top bottom pdd-vertical-20">
                                    <p class="text-opacity"><small>Terimakasih Telah Berbelanja Senang Bisa Membantu</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="row mrg-vertical-20">
                            <div class="col-md-6">
                                <img class="img-responsive text-opacity mrg-top-5" width="100" src="assets/images/logo/logo.png" alt="">
                            </div>
                            <div class="col-md-6 text-right">
                                <small><b>Phone:</b> 021xxx</small>
                                <br>
                                <small>barang yang sudah di beli tidak bisa di kembalikan</small>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>