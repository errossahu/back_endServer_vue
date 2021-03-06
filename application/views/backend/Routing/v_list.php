<div id="map" style="width: 100%; height: 400px;"></div>



<div class="card">
              <div class="card-body" style="height: 60px;">
                               <a href="<?=base_url('backend/destinasi/tambahJarak')?>" class="btn btn-primary">Tambah destinasi <i class="fas fa-plus"></i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body"> 
                <table  style=" width: 100%;" id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama destinasi</th>
                     <th>Deskripsi Indo</th> 
                     <th>Deskripsi English</th>
                     <th>Harga Perjalanan</th>  
                    <th >Action</th>
                    
                  </tr>
                  </thead>
                  <tbody style="height: 50px">
                <?php $no=1; foreach ($destinasi as $key => $value) {
                      # code...
                    ?>
                  <tr >
                    
                   <td ><?=$no++?></td>
                    <td><?=$value->nama_tempat?></td>
                    <td><?=$value->deskripsi_indo?>
                    <td><?=$value->deskripsi_eng?>
                    <td><?=$value->harga_trip?></td>
 
                    </td>

                    <td class="text-center">
                      <a class="btn btn-primary" href="<?=base_url('backend/destinasi/editdestinasi/'.$value->id_destinasi)?>" title=""><i class="fas fa-edit"> </i></a>
                      <a class="btn btn-danger" href="<?=base_url('backend/destinasi/delete/'.$value->id_destinasi)?>"  onclick="return confirm('Apakah Data Ingin Dihapus.?')" title=""><i class="fas fa-trash"> </i></a>
                                                  
                     
                   </td>
                  </tr>
                      <?php }?>                
                  </tbody>
                 
                </table>
                <div>
            <input type="text" value="<?=$total->total?>">
            <span>Total Jarak</span>
              </div>
              </div>
              <!-- /.card-body -->
              
            </div>
            
            <!-- /.card -->
            <script>
var map = L.map('map').setView([-8.4871671,119.8845982], 15);
var totalJarak =0 ;
var totalWaktu = 0 ;
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiZXJyb3MiLCJhIjoiY2tjdGhmYTJqMG9sOTJ5bDE5eGpvcWFkZiJ9.qqM9vC1MoeZmIWX5rdYZ6w'
  
    }).addTo(map);
   
    var latTemp = -8.482941443127926 ;
    var longTemp =119.87998008728029;
    var icon1 = L.icon({
              iconUrl:'<?=base_url('icons/1.png')?>',
              iconSize:[30,30]
    });

   

    <?php
    foreach($destinasi as $key =>$value){?>
        
        
        var marker = L.marker([<?=$value->langtitude ?>,<?=$value->longtitude ?>],
      {icon:icon1}).addTo(map).bindPopup("<b><?=$value->nama_tempat?></b><br />I am a popup.").openPopup();
      
        
        
        if(latTemp == -8.482941443127926  && latTemp == 119.87998008728029)
        {

        
          var routeControl = L.Routing.control({
          waypoints: [
            L.latLng(latTemp, longTemp),
            L.latLng(<?=$value->langtitude ?>, <?=$value->longtitude ?>),
 
          ]
        }).addTo(map);
        
        routeControl.on('routesfound', function(e) {
          var routes = e.routes;
          var summary = routes[0].summary;
          // alert time and distance in km and minutes
          

         
      
          totalJarak = summary.totalDistance/1000 ; 
           
           totalWaktu = Math.round(summary.totalTime % 3600 / 60) ;
  
           alert(totalJarak);
           document.getElementById("totalJarak").value =totalJarak ;
        });
        }
        else {

           var routeControl = L.Routing.control({
            waypoints: [
             L.latLng(latTemp, longTemp),
            L.latLng(<?=$value->langtitude ?>, <?=$value->longtitude ?>),
 
          ],
          router: L.Routing.mapbox('pk.eyJ1IjoiZXJyb3MiLCJhIjoiY2tjdGhmYTJqMG9sOTJ5bDE5eGpvcWFkZiJ9.qqM9vC1MoeZmIWX5rdYZ6w'),
        }).addTo(map);
        routeControl.on('routesfound', function(e) {
          var routes = e.routes;
          var summary = routes[0].summary;
          // alert time and distance in km and minutes
    

         
   
        totalJarak = summary.totalDistance/1000 +totalJarak; 
        tempJarak = totalJarak ;
        totalWaktu = Math.round(summary.totalTime % 3600 / 60) ;
  
          
        });
       
       
        }
        latTemp=<?=$value->langtitude?>; 
        longTemp= <?=$value->longtitude?>;
       
       

     
             
        
        
      <?php 
    }?>
    
    
    


</script>