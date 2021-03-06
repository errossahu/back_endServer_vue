<div class="card-header">

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php echo form_open('backend/destinasi/coutingBetween2Node') ?>
              <form method="post" role="form" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Node Awal</label>
                    
                    <select name="node_awal" class="form-control select2" style="width: 100%;">
                    <option  selected="selected">--Kode Node Awal--</option>
                    <?php  foreach ($node_destinasi as $key => $value) {?>
                        
                       <option ><?=$value->nama_tempat?></option>}
                    <?php }?>    
                  </select>
                    
                                     </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Node Akhir</label>
                    <select name="node_akhir" class="form-control select2" style="width: 100%;">
                    <option  selected="selected">--Kode Node Akhir--</option>
                    <?php  foreach ($node_destinasi as $key => $value) {?>
                   
                       <option ><?=$value->nama_tempat?></option>}
                    <?php }?>    
                  </select>
                    
                    <div>
                      <span style="color: red" id="warning" ></span>
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

               
            </div>