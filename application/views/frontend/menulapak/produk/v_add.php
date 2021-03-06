
<div id="layoutSidenav_content">  
               
                <!-- Ini Awal  -->
                <main>
                    <style>

body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
                    </style>
                    <!-- Ini Awal  -->
                    <div class="container-fluid">
                        <h1 class="mt-4">Dasboard</h1>
                        <!-- INI Penutup -->


 <main>

                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <!-- DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the -->
                                <!-- tambah Target UNTUK BUKA TAB BARU  target="_blank" -->
                                <a  href="<?=base_url('menulapak/produk/tambahProduk')?>">
                                <button class= "btn btn-primary">Tambah Produk</button>                                  
                                </a>
                                         
 
                            </div>
                        </div>
                        <div class="card mb-4">
                            <!-- <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div> -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th>Min Stok </th>

                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th>Min Stok </th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php  
                                               $no=1; foreach ($produk as $key => $value) {
                                        ?>
                                            <tr>

                                                <td><?=$no++?></td>
                                                <td><?=$value->nama_produk?></td>
                                                <td><?=$value->harga?></td>
                                                <td><?=$value->stok?></td>
                                                <td><?=$value->min_stok?></td>

                                                <td style="text"><button data-toggle="modal" data-target="#edit<?=$value->id_produk?>"  class="btn btn-info"><i class="fas fa-info-circle">  </i> Detail     </button>
                                                <button  class="btn btn-danger"><i class="fas fa-trash">  </i> <a  style="text-decoration: none;  color: inherit;" href="<?=base_url('menulapak/produk/deleteProduk/'.$value->id_produk)?>">Hapus</a> </button>
                                                
                                            </tr>
                                           
                                         <?php }?>  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>     




                <!-- Modal -->
                <?php  
                 $no=1; foreach ($produk as $key => $value) {
                                        ?>
                <div class="modal fade" id="edit<?=$value->id_produk?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4>Detail Produk</h4>
              <?php echo form_open_multipart('menuLapaka/produk/detailProduk'.$value->id_produk)?>
              <div>
               
              </div> 
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <?php echo form_close()?>
            </div>
            <div class="modal-body">

                     <style>
              * {
                  font-family: sans-serif; /* Change your font family */
                }

                .content-table {
                  width:100%;
                  border-collapse: collapse;
                  margin: 25px 0;
                  font-size: 0.9em;
                  min-width: 400px;
                  border-radius: 5px 5px 0 0;
                  overflow: hidden;
                  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
                }

                .content-table thead tr {
                  background-color: #009879;
                  color: #ffffff;
                  text-align: left;
                  font-weight: bold;
                  
                }

                .content-table th,
                .content-table td {
                  padding: 12px 15px;
                }

                .content-table tbody tr {
                  border-bottom: 1px solid #dddddd;
                }

                .content-table tbody tr:nth-of-type(even) {
                  background-color: #f3f3f3;
                }

                .content-table tbody tr:last-of-type {
                  border-bottom: 2px solid #009879;
                }

                .content-table tbody tr.active-row {
                  font-weight: bold;
                  color: #009879;
                }

            </style>
              <table class="content-table" >
                  <thead>
                  </thead>
                  <tbody class="table">
                      <tr>
                          <th>Nama Produk:</th>
                          <td><p style="font-weight: bold;"><?=$value->nama_produk?></p></td>
                      </tr>
                      <tr>
                          <th>Harga:</p></td>
                          <td><p style="font-weight: bold;"><?=$value->gambar?></p></td>
                      </tr>
                      <tr>
                        <th>Stok :</th>
                        <td><p style="font-weight: bold;"><?=$value->nama_type?></p></td>

                      </tr>
                      <tr>
                        <th>Min Stok  :</th>
                        <td><p style="font-weight: bold;"><?=$value->warna?></p></td>

                      </tr>
                      <tr>
                        <th>Create By :</th>
                        <td><p style="font-weight: bold;"><?=$value->no_plat?></p></td>

                      </tr>
                          <tr>
                        <th>Created At :</th>
                        <td><p style="font-weight: bold;"><?=$value->tahun?></p></td>

                      </tr>
                          <tr>
                        <th>Stok :</th>
                        <td><p style="font-weight: bold;"><?=$value->kapasitas?></p></td>

                      </tr>
                      </tr>
                          <tr>
                        <th>Status Sewa :</th>
                        <td><p style="font-weight: bold;"><?=$value->status_sewa?></p></td>

                      </tr>
                      </tr>
                          <tr>
                        <th>Harga Sewa Dasar:</th>
                        <td><p style="font-weight: bold;"><?=$value->harga_sewa?></p></td>

                      </tr>
                      
                      
                      </tr>
                          <tr>

                        <th>Deskripsi :</th>
                        <td><p style="font-weight: bold;"><?=$value->deskripsi_indo?></p></td>

                      </tr>
                      


                  </tbody>
              </table>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Kirim Pesan</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<?php }?>