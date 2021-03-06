  <?php 
                            
                              if ($this->session->flashdata('add')) {
                                echo '<div class="alert alert-success alert-dismissible " style="width:25%">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                          &times;</button>';
                                    echo $this->session->flashdata('add');
                                    echo '</div>';
                            }
                              if ($this->session->flashdata('delete')) {
                                echo '<div class="alert alert-success alert-dismissible " style="width:25%">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                          &times;</button>';
                                    echo $this->session->flashdata('delete()');
                                    echo '</div>';
                            }
                            if ($this->session->flashdata('delete')) {
                               echo '<div class="alert alert-success alert-dismissible " style="width:25%">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                          &times;</button>';
                                    echo $this->session->flashdata('delete()');
                                    echo '</div>';
                              # code...
                            }
                            if ($this->session->flashdata('dataKosong')) {
                               echo '<div class="alert alert-success alert-dismissible " style="width:25%">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                          &times;</button>';
                                    echo $this->session->flashdata('dataKosong');
                                    echo '</div>';
                              # code...
                            }
    ?>
  <div class="card">
              <div class="card-body" style="height: 60px;">
                
                <a href="<?=base_url('backend/mobil/mobil/tambahMobil')?>" class="btn btn-primary">Tambah Guide <i class="fas fa-plus"> </i></a>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body"> 
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Guide</th>
                    <th>Type</th>
                    <th>Email</th>
                    <th>Nama Kendaraan</th>
                    <th>Aksi</th>

                    
                  </tr>
                  </thead>
                  <tbody>
                <?php $no=1; foreach ($mobil as $key => $value) {
                      # code...
                    ?>
                  <tr>
                    
                    <td><?=$no++?></td>
                    <td><?=$value->nama_guide?></td>
                    <td><?=$value->nama_type?></td>
                    <td><?=$value->email?></td>
                    <td><?=$value->nama_kendaraan?></td>
                   <td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a data-toggle="modal" data-target="#edit<?=$value->id_mobil?>" href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a  href="<?=base_url('backend/mobil/mobil/editMobil/'.$value->id_mobil)?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        
                        <a href="<?=base_url('backend/mobil/mobil/deleteMobil/'.$value->id_mobil)?>" onclick="return confirm('Apakah Data Ingin Dihapus.?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>



 
                   
                  </tr>
                      <?php }?>                
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


                            






<?php foreach ($mobil as $key => $value) {
  # code...
?>
      <div class="modal fade" id="edit<?=$value->id_mobil?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Mobil : <?=$value->nama_kendaraan?></h4>
              <?php echo form_open_multipart('backend/mobil/mobil/detailMobil'.$value->id_mobil)?>
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
                          <th>Nama Guide:</th>
                          <td><p style="font-weight: bold;"><?=$value->nama_guide?></p></td>
                      </tr>
                      <tr>
                          <th>Email Mobil:</p></td>
                          <td><p style="font-weight: bold;"><?=$value->email?></p></td>
                      </tr>
                      <tr>
                        <th>Type :</th>
                        <td><p style="font-weight: bold;"><?=$value->nama_type?></p></td>

                      </tr>
                      <tr>
                        <th>Warna :</th>
                        <td><p style="font-weight: bold;"><?=$value->warna?></p></td>

                      </tr>
                      <tr>
                        <th>No Plat :</th>
                        <td><p style="font-weight: bold;"><?=$value->no_plat?></p></td>

                      </tr>
                          <tr>
                        <th>Tahun :</th>
                        <td><p style="font-weight: bold;"><?=$value->tahun?></p></td>

                      </tr>
                          <tr>
                        <th>Kapasitas :</th>
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
