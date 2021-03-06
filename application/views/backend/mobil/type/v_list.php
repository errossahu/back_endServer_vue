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
                
                <a  data-toggle="modal" data-target="#modal-default" href="<?=base_url('backend/mobil/type/tambahTipe ')?>" class="btn btn-primary">Tambah Tipe <i class="fas fa-plus"></i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body"> 
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama TYPE</th>
                  
                    <th>Dibuat Oleh</th>
         
                    <th >Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                <?php $no=1; foreach ($type as $key => $value) {
                      # code...
                    ?>
                  <tr>
                    
                   <td><?=$no++?></td>
                    <td><?=$value->nama_type?></td>
              
                    <td><?=$value->created_by?></td>
                    <td class="text-center">
                      <a class="btn btn-primary" data-toggle="modal" data-target="#edit<?=$value->id_type?>" href=""  title=""><i class="fas fa-edit"> </i></a>
                      <a class="btn btn-danger" href="<?=base_url('backend/mobil/type/delete/'.$value->id_type)?>"  onclick="return confirm('Apakah Data Ingin Dihapus.?')" title=""><i class="fas fa-trash"> </i></a>
                                                  
                     
                   </td>
                  </tr>
                      <?php }?>                
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Tipe </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                <?php echo form_open('backend/mobil/type/tambahType'); ?>

            <div class="modal-body">
              <input class="form-control" type="text" name="nama_type" placeholder="Nama Tipe Mobil&hellip;">
               </div>
               <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="sumbit" class="btn btn-primary">Simpan</button>
            </div>
             <?php echo form_close();?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    
<?php foreach ($type as $key => $value) {
  # code...
?>
      <div class="modal fade" id="edit<?=$value->id_type?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Tipe </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                <?php echo form_open('backend/mobil/type/edit/'.$value->id_type); ?>

            <div class="modal-body">
              <input value="<?=$value->nama_type?>" class="form-control" type="text" name="nama_type" placeholder="Nama Tipe Mobil&hellip;">
               </div>
              
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="sumbit" class="btn btn-primary">Simpan</button>
            </div>
             <?php echo form_close();?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    <?php }?>


            </div>
            <!-- /.card -->
  