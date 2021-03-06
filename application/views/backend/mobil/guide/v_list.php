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
    ?>
  <div class="card">
              <div class="card-body" style="height: 60px;">
                
                <a href="<?=base_url('backend/mobil/guide/tambahGuide')?>" class="btn btn-primary">Tambah Guide <i class="fas fa-plus"></i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body"> 
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Hp</th>
                    <th>No Ktp</th>
                    <th >Gambar</th>
                    <th>Berapa Kali Transaksi</th>
                    <th>Aksi</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                <?php $no=1; foreach ($guide as $key => $value) {
                      # code...
                    ?>
                  <tr>
                    
                   <td><?=$no++?></td>
                    <td><?=$value->nama_guide?></td>
                    <td><?=$value->email?></td>
                    <td><?=$value->no_hp?></td>
                    <td><?=$value->no_ktp?></td>
                    <td>

                      <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle"
                       src="<?=base_url('gambar_guide/'.$value->gambar)?>"
                       alt="User profile picture">
                </div>


              </td>
                    <td>Berapa Kali Disisi Trasaksi</td>
                    <td class="text-center">
                      
                     <div class="btn-group btn-group-sm">
                        <a  href="<?=base_url('backend/mobil/guide/edit/'.$value->id_guide)?>"class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="<?=base_url('backend/mobil/guide/deleteGuide/'.$value->id_guide)?>"  onclick="return confirm('Apakah Data Ingin Dihapus.?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
