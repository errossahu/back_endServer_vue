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
              <?php echo form_open_multipart('backend/blog/home/createBlog') ?>
              <form method="post" role="form"  onSubmit="return validasi()">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input value="" placeholder="Judul" name="judul" type="text" class="form-control" id="namaPegawai" >
                  </div>  
                   
                </div>
                <div class="form-group">


                    <div>
                      <span id="warning2" ></span>
                    </div>
                    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Content Blog
                <small>Text Editor</small>
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <div class="form-group">
                  

                <textarea  name="isi"  class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                          </div>
              </div>
              
            </div>
          </div>

      </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
      
    </section>

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

               
            </div>

            <!-- /.card -->
</div>
</div>
</div>
</section>  
