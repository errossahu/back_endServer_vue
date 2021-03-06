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
              <?php echo form_open('backend/pegawai/tambahPegawai') ?>
              <form method="post" role="form"  onSubmit="return validasi()">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pegawai</label>
                    <input value="" placeholder="Nama Pegawai" name="namaPegawai" type="text" class="form-control" id="namaPegawai" >
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="User Name">
                    <div>
                      <span style="color: red" id="warning" ></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" value="" name="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Retype Password</label>
                    <input type="password" class="form-control" id="password1" value="" placeholder="Password">
                    <div>
                      <span id="warning2" ></span>
                    </div>
                  </div>
                  <div class="form-group" style="width: 20%">
                    <label for="exampleInputEmail1">Level</label>

                        <select name="level" class="custom-select">
                          <option value="">--Pilih Level User--</option>
                         
                          <option value="1">Pegawai</option>
                          <option value="0">Admin</option>
                       
                        </select>
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
