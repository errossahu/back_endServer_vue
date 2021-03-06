<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css"
type="text/css" />
<!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>


<div class="container">
<div class="row">
    <div class="col-6"><p><b>Map</b> </p>
    <div id="map" style="width: 100%; height: 400px;"></div>
    <pre id="coordinates" class="coordinates"></pre>

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
              <?php echo form_open('backend/destinasi/tambahDestinasi') ?>
              <form method="post" role="form" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Tempat</label>
                    <input value="" placeholder="Nama Tempat" name="nama_tempat" type="text" class="form-control" id="namaPegawai" >
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Langtitude</label>
                    <input type="text"  id="lat" class="form-control" name="langtitude" placeholder="User Name">
                    <div>
                      <span style="color: red" id="warning" ></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">longtitude</label>
                    <input type="text" id="long" class="form-control"  value="" name="longtitude" placeholder="Password">
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
var nilai = document.getElementById("long");

    var curlLocation=[0,0];
    if(curlLocation[0]==0 && curlLocation[1]==0)
    {
        curlLocation=[-8.4871671,119.8845982];
    }
    var map = L.map('map').setView([-8.4871671,119.8845982], 15);


    mapboxgl.accessToken = 'pk.eyJ1IjoiZXJyb3MiLCJhIjoiY2tjdGhmYTJqMG9sOTJ5bDE5eGpvcWFkZiJ9.qqM9vC1MoeZmIWX5rdYZ6w';
    var map = new mapboxgl.Map({
    container: 'map', // container id
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [119.8845982,-8.4871671], // starting position
    zoom: 15 // starting zoom
    });
 
// Add zoom and rotation controls to the map.


var marker = new mapboxgl.Marker({
            draggable: true
    }).setLngLat([119.8845982,-8.4871671]).addTo(map);

function onDragEnd() {
    var lngLat = marker.getLngLat();
    
    coordinates.style.display = 'block';
    coordinates.innerHTML = 'Longitude: ' + lngLat.lng + '<br />Latitude: ' + lngLat.lat;
    $("#lat").val(lngLat.lat);
    $("#long").val(lngLat.lng);
}
 
var geo =map.addControl(
new MapboxGeocoder({
    accessToken: mapboxgl.accessToken,
    mapboxgl: mapboxgl
})
);



map.addControl(new mapboxgl.NavigationControl());
marker.on('dragend', onDragEnd);
</script>