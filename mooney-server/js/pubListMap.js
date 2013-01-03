/*****************************
 * Load the Beer Map
 * and locate on Dublin
 *****************************/
var DUBLIN_LAT  = 53.3428;
var DUBLIN_LONG = -6.2661;

$(document).ready(function() {
  map = new OpenLayers.Map("pubListMap");
  var mapnik         = new OpenLayers.Layer.OSM();
  var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984
  var toProjection   = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
  var position       = new OpenLayers.LonLat(DUBLIN_LONG,DUBLIN_LAT).transform( fromProjection, toProjection);
  var zoom           = 14; 

  map.addLayer(mapnik);  
  map.setCenter(position, zoom);
});