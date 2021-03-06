
<?php echo form_open('backend/destinasi/addNode')?>
<form method="post" role="form" >
    <div id="map" style="width: 100%; height: 400px;">

    </div><br><br>  
    <span>Nama Node</span>
    <input style="margin-left: 30px" name="nama_rute" type="text" >
    
    <br>

    <span>Langtitude Awal</span>
    <input  style="margin-left: 30px" name="lat_awal" type="text" value="<?=$nodeAwal->langtitude ?>">
    <br>
    <span> Longtitude Awal</span>
    <input  style="margin-left: 30px" type="text" name="lot_awal" value="<?=$nodeAwal->longtitude ?>"><br>
    <span>Langtitude Akhir</span>
    <input  style="margin-left: 30px" name="lat_akhir" type="text" value="<?=$nodeAkhir->langtitude ?>" ><br>
    
    <span>Longtitude Akhir</span>
    <input  style="margin-left: 30px" name="long_akhir" type="text" value="<?=$nodeAkhir->longtitude ?>" ><br>
    
    <span>Total Jarak</span>
    <input  style="margin-left: 30px"  type="text" id="totalJarak" name="total_jarak" ><br>
    
    <span>Total Biaya</span>
    <input  style="margin-left: 30px"  type="text" id="total" name="biaya" >

    <div class="card-footer">
    <button id="btn" type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>  
<?php echo form_close();?>
<script>
var map = L.map('map').setView([-8.4871671,119.8845982], 15);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 15,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiZXJyb3MiLCJhIjoiY2tjdGhmYTJqMG9sOTJ5bDE5eGpvcWFkZiJ9.qqM9vC1MoeZmIWX5rdYZ6w'
  
    }).addTo(map);
    
    var icon1 = L.icon({
              iconUrl:'<?=base_url('icons/1.png')?>',
              iconSize:[30,30]
    });

    var tempTotal = 0
       var totalJarak = 0 ;
    var totalWaktu = 0 ;
    L.marker([<?=$nodeAwal->langtitude ?>,<?=$nodeAwal->longtitude ?>],{icon:icon1}).addTo(map).bindPopup("<b><?=$nodeAwal->nama_tempat?></b><br />I am a popup.").openPopup();
     L.marker([<?=$nodeAkhir->langtitude ?>,<?=$nodeAkhir->longtitude ?>],{icon:icon1}).addTo(map).bindPopup("<b><?=$nodeAkhir->nama_tempat?></b><br />I am a popup.").openPopup();
      
   var routeControl = L.Routing.control({
    waypoints: [
        L.latLng(<?=$nodeAwal->langtitude ?>,<?=$nodeAwal->longtitude ?>),
        L.latLng(<?=$nodeAkhir->langtitude ?>,<?=$nodeAkhir->longtitude ?>)
    ],
    routeWhileDragging: true,
    
    router: L.Routing.mapbox('pk.eyJ1IjoiZXJyb3MiLCJhIjoiY2tjdGhmYTJqMG9sOTJ5bDE5eGpvcWFkZiJ9.qqM9vC1MoeZmIWX5rdYZ6w'),
}).addTo(map); 


routeControl.on('routesfound', function(e) {
          var routes = e.routes;
          var summary = routes[0].summary;
          // alert time and distance in km and minutes
          totalJarak = summary.totalDistance/1000; 
   
          totalWaktu = Math.round(summary.totalTime % 3600 / 60) ;
          
          document.getElementById("totalJarak").value =totalJarak ;
          tempTotal =totalJarak*10000 ;
          document.getElementById("total").value =tempTotal ;
        });


// function myFunction() {
// var totalJarak = document.getElementById('totalJarak').value; 
// alert(totalJarak);  
// var total= totalJarak*10000; 
// document.getElementById("total").innerHTML =total ;

// }
//  myFunction();
</script>


       