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
                
                <a href="<?=base_url('backend/blog/home/createBlog')?>" class="btn btn-primary">Tambah Blog <i class="fas fa-plus"></i></a>
              </div>

              <!-- /.card-header -->
              <div class="card-body"> 
                <table  style=" width: 100%;" id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Slug</th>
                    <th>Isi</th>
                    <th>Gambar</th>
                    <th>Created By</th>
                    <th >Action</th>
                    
                  </tr>
                  </thead>
                  <tbody style="height: 50px">
                <?php $no=1; foreach ($blog as $key => $value) {
                      # code...
                    ?>
                  <tr >
                    
                   <td ><?=$no++?></td>
                    <td><?=$value->judul?></td>
                    <td><?=$value->slug?>
                    <td><?=$value->isi?></td>
                    <td><?=$value->gambar?></td>
                    <td><?=$value->id_pegawai?></td>
                               
                    </td>
                      <td class="text-center">
                      <a class="btn btn-primary" href="<?=base_url('backend/cuci/editCuci/'.$value->id_blog)?>" title=""><i class="fas fa-edit"> </i></a>
                      <a class="btn btn-danger" href="<?=base_url('backend/blog/home/hapusBlog/'.$value->id_blog)?>"  onclick="return confirm('Apakah Data Ingin Dihapus.?')" title=""><i class="fas fa-trash"> </i></a>
                                                  
                     
                      </td>

                  </tr>
                      <?php }?>                
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
