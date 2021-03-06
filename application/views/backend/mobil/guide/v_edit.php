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
              <?php echo form_open_multipart('backend/mobil/guide/edit/'.$guide->id_guide) ?>
              <form method="post" role="form"  onSubmit="return validasi()">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Guide</label>
                    <input value="<?=$guide->nama_guide?>" placeholder="Nama Pegawai" id="nama_guide" name="nama_guide" type="text" class="form-control"  required >
                    <div>
                      <span style="color: red" id="warning_guide" ></span>
                    </div>
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input value="<?=$guide->email?>" type="email" class="form-control" id="email" name="email" placeholder="email" required>
                    <div>
                      <span style="color: red" id="warning_guide1" ></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Hp</label>
                    <input value="<?=$guide->no_hp?>" type="text" class="form-control" id="no_hp" value="" name="no_hp" placeholder="No Hp ">
                    <div>
                      <span style="color: red" id="warning_guide2" ></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Ktp</label>
                    <input value="<?=$guide->no_ktp?>" type="text" class="form-control" id="no_ktp" name="no_ktp" value="" placeholder="No Ktp">
                    <div>
                      <span style="color: red" id="warning_guide3" ></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label >Gambar</label><br>

                    <img style="width: 70px" src="<?=base_url('gambar_guide/'.$guide->gambar)?>" alt="">
                      <br><br>
                    <label>Ganti Foto</label>
                    <input style="width: 200px" name="gambar" type="file" class="form-control"  value="" >
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
