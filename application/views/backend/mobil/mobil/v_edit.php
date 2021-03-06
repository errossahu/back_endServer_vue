   <?php echo form_open_multipart('backend/mobil/mobil/editMobil/'.$mobil->id_mobil) ?>
 <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->

<div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit  Mobil </h3>
 
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group"> 
                  <div class="form-group">
                    <div class="form-group">
                  <label>Nama Guide</label>
                  <select name="id_guide" class="form-control select2" style="width: 100%;">
                    <option  selected="selected" value="<?=$mobil->id_guide?>" ><?=$mobil->nama_guide?></option>
                    <?php foreach($guide as $key=>$value){?>
                      <option value="<?=$value->id_guide?>"><?=$value->nama_guide?></option>}
                      
                    <?php } ?> 
                  </select>
                </div>
                  </div>  
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <div class="form-group">
                    <div class="form-group">
                  <label>Type Mobil</label>
                  <select name="id_type" class="form-control select2" style="width: 100%;">
                    <option  selected="selected" value="<?=$mobil->id_type?>"><?=$mobil->nama_type?></option>
                    <?php  foreach ($type as $key => $value) {?>
                   
                       <option value="<?=$value->id_type?>"><?=$value->nama_type?></option>}
                    <?php }?>    
                  </select>
                </div>
                  </div>  
                </div>
              </div>

              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Partener Mobil</label>
                    <input name="nama_kendaraan" value="<?=$mobil->nama_kendaraan?>" placeholder="Nama Parner"  id="nama_partner" type="text" class="form-control"  required >
                    <div>
                      <span style="color: red" id="warning_guide" ></span>
                    </div>
                  </div> 
                <!-- /.form-group -->
                
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1">No Plat </label>
                    <input name="no_plat" value="<?=$mobil->no_plat?>" placeholder="No Plat"  id="no_plat" type="text" class="form-control"  required >
                    <div>
                      <span style="color: red" id="warning_guide1" ></span>
                    </div>
                  </div> 
              </div>
               <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1">Warna Mobil  </label>
                    <input name="warna" value="<?=$mobil->warna?>" placeholder="warna Mobil "  id="warna_mobil" type="text" class="form-control"  required >
                    <div>
                      <span style="color: red" id="warning_guide2" ></span>
                    </div>
                  </div> 
              </div>
                <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1">Tahun  </label>
                    <input name="tahun" value="<?=$mobil->tahun?>" placeholder="Tahun "  id="tahun" type="text" class="form-control"  required >
                    <div>
                      <span style="color: red" id="warning_guide3" ></span>
                    </div>
                  </div> 
              </div>
                <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1">Kapasitas  </label>
                    <input name="kapasitas" value="<?=$mobil->kapasitas?>" placeholder="Kapasitas Mobil"  id="kapasitas" type="text" class="form-control"  required >
                    <div>
                      <span style="color: red" id="warning_guide4" ></span>
                    </div>
                  </div> 
              </div>
                  <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1">Harga Sewa </label>
                    <input name="harga_sewa" value="<?=$mobil->harga_sewa?>" placeholder="Harga Sewa"  id="rupiah" type="text" class="form-control"  required >
                    <div>
                      <span style="color: red" id="warning_guide" ></span>
                    </div>
                  </div> 
              </div>
                 <div class="col-md-6">

                <div class="form-group">
               
                    <label for="exampleInputEmail1">Gambar Sampul</label>
                    <img style="width: 70px" src="<?=base_url('gambar_mobil/'.$mobil->gambar_mobil)?>" alt="">
                    <input name="gambar_mobil" value="" placeholder="Gambar"  id="gambar" type="file" class="form-control"  >
                    <div>
                      <span style="color: red" id="warning_guide" ></span>
                    </div>
                  </div> 
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
         
        </div>
      </div>
    </section>
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                DESKRIPSI MOBIL 
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
                  

                <textarea  name="deskripsi_indo" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          
                          <?=$mobil->deskripsi_indo?>
                          
                          </textarea>
                    </div>
              </div>
              
            </div>
          </div>

      </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
        <div class="card-footer">
                
                  <button class="btn btn-success toastsDefaultSuccess"  id="btn" type="submit" class="btn btn-primary">Submit</button>
                </div>
    </section>
      <?php echo form_close(); ?>
       