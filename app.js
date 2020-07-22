import "https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js";

const mapbox_token = "pk.eyJ1IjoiYXZpd2U0MzIiLCJhIjoiY2s5YmcxYWRpMHp4MzNucGxxOW5xa2l4MCJ9.e3ZT0se7eWoWVkXJyFyicg";

mapboxgl.accessToken = mapbox_token;
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11'
});

fetch("https://api.covid19api.com/")
.then(response=> response.json())
.then(data=> {
   console.log(data);
});