/*****************************
 * Load the Beer Map
 * and locate on Dublin
 *****************************/
var DUBLIN_LAT  = 53.3428;
var DUBLIN_LONG = -6.2661;

$(document).ready(function() {
  map = new OpenLayers.Map("pubListMap");
  
  map.addLayer(new OpenLayers.Layer.OSM());
  var markers = new OpenLayers.Layer.Text(
    "text", {
             location: "./markers.txt",
   	     projection: map.displayProjection
            }
  );
  
  map.addLayer(markers);

  var fromProjection = new OpenLayers.Projection("EPSG:4326");
  var toProjection   = new OpenLayers.Projection("EPSG:900913");
  var position = new OpenLayers.LonLat(DUBLIN_LONG, DUBLIN_LAT).transform(fromProjection, toProjection);
  var zoom = 13;
  map.setCenter(position, zoom);
});
