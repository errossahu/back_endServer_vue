    <!-- Input Jumlah Budget -->
<div><input  id="budget"><br><br>
<button onclick="rute()">Try it</button>


</div>

<div id="map" style="width: 100%; height: 400px;"></div>

<script type="text/javascript">
function rute()
{
  

    var map =  L.map('map').setView([-8.4871671,119.8845982], 15);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiZXJyb3MiLCJhIjoiY2tjdGhmYTJqMG9sOTJ5bDE5eGpvcWFkZiJ9.qqM9vC1MoeZmIWX5rdYZ6w'   
    }).addTo(map);

    var totalBiaya = 0 ;
    var budget = parseInt(document.getElementById('budget').value);
         
    <?php
    
    foreach($jalur as $key =>$value){?>
         window.alert(totalBiaya);
        if(totalBiaya <= budget)
        {
            
            
            
                L.Routing.control({
                    waypoints: [
                        L.latLng(<?=$value->lat_awal?>,<?=$value->lot_awal?>),
                        L.latLng(<?=$value->lat_akhir?>, <?=$value->long_akhir?>)
                    ],
                    routeWhileDragging: true
                }).addTo(map);
                totalBiaya = totalBiaya + <?=$value->biaya?>;
           
        }
        
        else
        {
            window.alert('Uang Lebih Kecil');
        }
      
    <?php }?>


}
    

</script>





