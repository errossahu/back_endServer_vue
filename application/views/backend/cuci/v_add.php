<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12" >


<div class="card card-primary">
              <div class="card-header">

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php echo form_open_multipart('backend/cuci/tambahCuci') ?>
              <form method="post" role="form"  onSubmit="return validasi()">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Tempat</label>
                    <input value="" placeholder="Nama Tempat" name="nama_cuci" type="text" class="form-control" id="namaPegawai" >
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control"  name="alamat" placeholder="Alamat">
                    <div>
                      <span style="color: red" id="warning" ></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Hp</label>
                    <input type="text" class="form-control" id="" value="" name="no_hp" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Gambar</label>
                    <input type="file" class="form-control" value="" name="gambar" placeholder="gambar">
                    <div>
                      <span id="warning2" ></span>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button id="btn" type="submit" class="btn btn-primary">Submit</button>
                </div>

                <script type="text/javascript">
                  $("input").change(function(){
                    alert("The text has been changed.");
                  });
                </script>
                
              </form>
              <?php echo form_close(); ?>

              <?php echo form_open('backend/pegawai/tambahPegawai') ?>

              <?php echo form_close(); ?>
               
            </div>

            <!-- /.card -->
</div>
</div>
</div>
</section>  
