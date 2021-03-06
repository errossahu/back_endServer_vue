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
                
                <a href="<?=base_url('backend/cuci/tambahCuci')?>" class="btn btn-primary">Tambah Tempat Cuci <i class="fas fa-plus"></i></a>
              </div>
              <div class="card-body" style="height: 60px;">
                
                <a href="<?=base_url('backend/cuci/listPemesananan')?>" class="btn btn-primary">Tambah Tempat Cuci <i class="fas fa-plus"></i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body"> 
                <table  style=" width: 100%;" id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Cuci </th>
                    <th>Alamat</th>
                    <th>No_Hp</th>
                    <th>Status Cui </th>
           
                    <th >Action</th>
                    
                  </tr>
                  </thead>
                  <tbody style="height: 50px">
                <?php $no=1; foreach ($cuci as $key => $value) {
                      # code...
                    ?>
                  <tr >
                    
                   <td ><?=$no++?></td>
                    <td><?=$value->nama_cuci?></td>
                    <td><?=$value->alamat?>
                    <td><?=$value->no_hp?></td>
                    <td>
                      <?php if($value->status_cuci==1):?>
                           <p style="color:green">Tersedia</p>
                      <?php endif ?>                    
                   
                        <?php if($value->status_cuci==0):?>
                  <div style="background:red"><p style="color:black">Tidak Tersedia</p></div> 
                         <?php endif ?>                    
                    </td>
                      <td class="text-center">
                      <a class="btn btn-primary" href="<?=base_url('backend/cuci/editCuci/'.$value->id_cuci)?>" title=""><i class="fas fa-edit"> </i></a>
                      <a class="btn btn-danger" href="<?=base_url('backend/cuci/delete/'.$value->id_cuci)?>"  onclick="return confirm('Apakah Data Ingin Dihapus.?')" title=""><i class="fas fa-trash"> </i></a>
                                                  
                     
                      </td>

                  </tr>
                      <?php }?>                
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
