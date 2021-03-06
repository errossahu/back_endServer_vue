<script src="<?=base_url()?>assets/ckeditor/ckeditor.js"></script>
<script src="<?=base_url()?>assets/ckeditor/samples/js/sample.js"></script>
<link rel="stylesheet" href="<?=base_url()?>assets/ckeditor/samples/css/samples.css">
<link rel="stylesheet" href="<?=base_url()?>assets/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tambah Produk</h1>
                        <?php echo form_open_multipart('menulapak/produk/addProduk')  ;?>
                        
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">Nama Produk</label>
                                <input required class="form-control" id="inputEmail4" placeholder="Nama Produk" name="nama_produk"> 
                                </div>
                                <div class="form-group col-md-6">
                                <label for="inputPassword4">Harga</label>
                                <input type="number" class="form-control" id="inputPassword4" name="harga" placeholder="Harga">
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Stok</label>
                                <input name ="stok" type="number" class="form-control" id="inputAddress" placeholder="Stok">
                            </div>
                            <div style="height:20%" class="form-group col-md-6">
                                <label for="inputAddress2">Min Stok</label>
                                <input name="min_stok" style="height:40%" type="number" class="form-control" id="inputAddress2" placeholder="Minimal Stok ">
                            </div>
                            
                            <div style="height:20%" class="form-group col-md-6">
                                <label for="inputAddress2">Deskripsi</label>
                                <textarea  name="deskripsi" id="editor"></textarea >
                                       </div>



                            

                            
                            
                            </div>

                            <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Foto 1</label>
                                <input name="foto1" onchange="previewFile()"   type="file"  class="form-control" id="inputAddress" placeholder="Stok">
                                <img id="foto_1" src=""  class="img-thumbnail" alt="Image preview...">
                            </div>
                            <div  class="form-group col-md-4">
                                <label for="inputAddress2">Foto 2</label>
                                <input name="foto2"  onchange="previewFile2()"  id="foto2"  type="file"  class="form-control" id="inputAddress" placeholder="Stok">
                                <img id="foto_2" src=""  class="img-thumbnail" alt="Image preview...">

                            </div>
                            <div  class="form-group col-md-4">
                                <label for="inputAddress2">Foto 3</label>
                                <input name="foto3" onchange="previewFile3()" id="foto3"  type="file" class="form-control" id="inputAddress2" placeholder="Deskripsi Produk ">
                                <img id="foto_3" src=""  class="img-thumbnail" alt="Image preview...">

                            </div>
                            

                            
                            
                            </div>
                            
                          <button type="submit" class="btn btn-primary">Tambah</button>
                        
<?php echo form_close(); ?>
                    </div>
                </main>
                <script>
                function previewFile2(){
                 var preview = document.getElementById('foto_2');
                 var file    = document.getElementById('foto2').files[0];
     
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
                <script>
                function previewFile3()
                {
                    var preview = document.getElementById('foto_3') ; 
                    var file = document.getElementById('foto3').files[0] ;
                    var reader = new FileReader(); 
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
                <script> 
 
                function previewFile() {
                 var preview = document.getElementById('foto_1');
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
                <script>
	initSample();
</script>
