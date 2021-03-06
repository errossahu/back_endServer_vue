<div class="container">
<div class="row">
    <div class="col-6"><p>Map</p>
    <div id="map" style="width: 100%; height: 400px;"></div>

</div>
    <div class="col-6">Form
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
              <?php echo form_open('backend/destinasi/editDestinasi'.$destinasi->id_destinasi) ?>
              <form method="post" role="form" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Tempat</label>
                    <input value="<?=$destinasi->nama_tempat?>" placeholder="Nama Tempat" name="nama_tempat" type="text" class="form-control" id="namaPegawai" >
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Langtitude</label>
                    <input type="text" value="<?=$destinasi->langtitude ?>" id="lat" class="form-control" name="langtitude" placeholder="User Name">
                    <div>
                      <span style="color: red" id="warning" ></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">longtitude</label>
                    <input type="text" value="<?=$destinasi->longtitude ?>" id="long" class="form-control"  value="" name="longtitude" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Harga Trip</label>
                    <input type="text" name="harga_trip"class="form-control"  value="" placeholder="Password">
                    <div>
                      <span id="warning2" ></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Deskripsi Indo</label>
                    <input type="text"  name="deskripsi_indo"class="form-control"  value="" placeholder="Password">
                    <div>
                      <span id="warning2" ></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Deskripsi Indo</label>
                    <input type="text"  name="deskripsi_eng"class="form-control"  value="" placeholder="Password">
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

               
            </div>

            <!-- /.card -->
</div>
</div>
</div>
</section>  

    </div>
</div>

</div>
<script>
    var curlLocation=[0,0];
    if(curlLocation[0]==0 && curlLocation[1]==0)
    {
        curlLocation=[<?=$destinasi->langtitude ?>,<?=$destinasi->longtitude ?>];
    }
    var map = L.map('map').setView([<?=$destinasi->langtitude ?>,<?=$destinasi->longtitude ?>], 15);


    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

    map.attributionControl.setPrefix(false);
    var marker = new L.marker(curlLocation,{
        draggable:'true',
    });

    marker.on('dragend',function(event)
    {
        var position = marker.getLatLng();
        marker.setLatLng(position,{
            draggable:'true' 
        }).bindPopup(position).update();
        $("#lat").val(position.lat);
        $("#long").val(position.lng).keyup();

    });
    // $("#lat, #long").change(function(){
    //  var position =[parseInt($("#lat").val()),parseInt($("#long").val())];
    //  marker.setLatLng(position,{
    //     draggable:'true'
    //  }).bindPopup(position).update();
    //  map.panTo(position);
    // }); 

    map.addLayer(marker);

</script>