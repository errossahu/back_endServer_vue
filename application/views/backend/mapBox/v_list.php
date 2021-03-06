<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Create a draggable Marker</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
<script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
<style>
	body { margin: 0; padding: 0; }
	#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
</head>
<body>
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
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
<link
rel="stylesheet"
href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css"
type="text/css"
/>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
 
<div id="map"></div>
<pre id="coordinates" class="coordinates"></pre>
 
<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoiZXJyb3MiLCJhIjoiY2tjdGhmYTJqMG9sOTJ5bDE5eGpvcWFkZiJ9.qqM9vC1MoeZmIWX5rdYZ6w';
var coordinates = document.getElementById('coordinates');
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [0, 0],
zoom: 2
});
 
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



map.addControl(
new MapboxGeocoder({
accessToken: mapboxgl.accessToken,
mapboxgl: mapboxgl
})
);

map.addControl(new mapboxgl.NavigationControl());

</script>
 
</body>
</html>