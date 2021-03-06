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
              <?php echo form_open('backend/pegawai/detailPegawai/'.$pegawai->id_pegawai); ?>
              <form method="post" role="form"  onSubmit="return validasi()">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pegawai</label>
                    <input value="<?=$pegawai->namaPegawai?>" name="namaPegawai" type="text" class="form-control" id="namaPegawai" >
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input value="<?=$pegawai->user_name?>" type="text" class="form-control" id="user_name" name="user_name" >
                    <div>
                      <span style="color: red" id="warning" ></span>
                      <input type="text"id="temp" style="display: none" value="<?=$pegawai->user_name?>" ></input>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input value="<?=$pegawai->password?>" type="password" class="form-control" id="password" value="" name="password">
                  </div>

                  <div class="form-group" style="width: 20%">
                    <label for="exampleInputEmail1">Level</label>

                        <select name="level" class="custom-select">
                          <option value=""><?php if($pegawai->level==1)
                          {
                            echo('Pegawai');
                          }
                        
                            ?></option>
                         
                          <option value="0">Admin</option>
                       
                        </select>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <?php echo form_close(); ?>
               
            </div>

            <!-- /.card -->
</div>
</div>
</div>
</section>  
