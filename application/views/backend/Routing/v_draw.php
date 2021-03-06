
<style>
.coordinates {
background: rgba(0, 0, 0, 0.5);
color: #fff;
position: absolute;
bottom: 40px;
left: 10px;
padding: 5px 10px;
margin: 0;
font-size: 11px;
line-height: 18px;
border-radius: 3px;
display: none;
}
</style>
 
<div id="map"></div>
<pre id="coordinates" class="coordinates"></pre>
 
<script>
		mapboxgl.accessToken = 'pk.eyJ1IjoiZXJyb3MiLCJhIjoiY2tjdGhmYTJqMG9sOTJ5bDE5eGpvcWFkZiJ9.qqM9vC1MoeZmIWX5rdYZ6w';
	var map = new mapboxgl.Map({
	container: 'map', // container id
	style: 'mapbox://styles/mapbox/streets-v11',
	center: [-74.5, 40], // starting position
	zoom: 9 // starting zoom
	});
	
	// Add zoom and rotation controls to the map.
	map.addControl(new mapboxgl.NavigationControl());
	var marker = new mapboxgl.Marker({
	draggable: true
	})
	.setLngLat([0, 0])
	.addTo(map);
 
function onDragEnd() {
var lngLat = marker.getLngLat();
coordinates.style.display = 'block';
coordinates.innerHTML =
'Longitude: ' + lngLat.lng + '<br />Latitude: ' + lngLat.lat;
}
 
marker.on('dragend', onDragEnd);
</script>
 
