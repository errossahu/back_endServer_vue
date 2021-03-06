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
                            if ($this->session->flashdata('proteksiLevel')) {
                                echo '<div class="alert alert-success alert-dismissible " style="width:25%">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                          &times;</button>';
                                    echo $this->session->flashdata('proteksiLevel');
                                    echo '</div>';
                            }
    ?>
  <div class="card">
              <div class="card-body" style="height: 60px;">
                
                <a href="<?=base_url('backend/pegawai/tambahPegawai')?>" class="btn btn-primary">Tambah Pegawai <i class="fas fa-plus"></i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body"> 
                <table  style=" width: 100%;" id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>User Name</th>
                    <th>Level Pegawai</th>
                    <th>Total Transaksi</th>
                    <th >Action</th>
                    
                  </tr>
                  </thead>
                  <tbody style="height: 50px">
                <?php $no=1; foreach ($pegawai as $key => $value) {
                      # code...
                    ?>
                  <tr >
                    
                   <td ><?=$no++?></td>
                    <td><?=$value->namaPegawai?></td>
                    <td><?=$value->user_name?>
                    <?php if ($value->level==1): ?>
                      <td>Pegawai</td>
                    <?php endif ?>
                    <?php if ($value->level==0): ?>
                      <td>Admin</td>
                    <?php endif ?>
                    </td>
                    <td>Berapa Kali Disisi Trasaksi</td>
                    <td class="text-center">
                      <a class="btn btn-primary" href="<?=base_url('backend/pegawai/detailPegawai/'.$value->id_pegawai)?>" title=""><i class="fas fa-edit"> </i></a>
                      <a class="btn btn-danger" href="<?=base_url('backend/pegawai/delete/'.$value->id_pegawai)?>"  onclick="return confirm('Apakah Data Ingin Dihapus.?')" title=""><i class="fas fa-trash"> </i></a>
                                                  
                     
                   </td>
                  </tr>
                      <?php }?>                
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
