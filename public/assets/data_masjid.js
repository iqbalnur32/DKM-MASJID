/*
  Maps Track lat Long
*/
function openMaps(lat_long){
  var html = '<iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q='+lat_long+'&amp;hl=es;z=14&amp;output=embed" height="300" width="100%" frameborder="0"></iframe>';
  $('#maps_track').html(html);
  // alert(1);
}