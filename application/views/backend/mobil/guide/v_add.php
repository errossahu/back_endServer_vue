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
              <?php echo form_open_multipart('backend/mobil/guide/tambahGuide') ?>
              <form method="post" role="form"  onSubmit="return validasi()">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Guide</label>
                    <input value="" placeholder="Nama Pegawai" name="nama_guide" id="nama_guide" type="text" class="form-control"  required >
                    <div>
                      <span style="color: red" id="warning_guide" ></span>
                    </div>
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                    <div>
                      <span style="color: red" id="warning_guide1" ></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Hp</label>
                    <input type="text" class="form-control" id="no_hp" value="" name="no_hp" placeholder="No Hp ">
                    <div>
                      <span style="color: red" id="warning_guide2" ></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Ktp</label>
                    <input type="text" class="form-control" name="no_ktp" id="no_ktp" value="" placeholder="No Ktp">
                    <div>
                      <span style="color: red" id="warning_guide3" ></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label >Gambar</label>
                    <input onchange="previewFile()" name="gambar" type="file" class="form-control"  value="" >
                    <img id="img" src=""  class="img-thumbnail" alt="Image preview...">
                    <div>
                      <span id="warning2" ></span>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button id="btn" type="submit" class="btn btn-primary">Submit</button>
                </div>
                <script type="text/javascript" >
                  function previewFile() {
                 var preview = document.getElementById('img');
                 var file    = document.querySelector('input[type=file]').files[0];
                 var reader  = new FileReader();

                  reader.onloadend = function () {
                  preview.src = reader.result;

                   }

                if (file) {
                reader.readAsDataURL(file);
                } else {
                preview.src = "";
                   }
                  }
                </script> 
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
