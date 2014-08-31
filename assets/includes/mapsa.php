<script>
var sa =new google.maps.LatLng(-23.556348, -46.686633);

function initializeSA(){
var mapSA = {
  center:sa,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var mapsa=new google.maps.Map(document.getElementById("mapSA")
  ,mapSA);

var markersa=new google.maps.Marker({
  position:sa,
  });
markersa.setMap(mapsa);
}
    
google.maps.event.addDomListener(window, 'load', initializeSA);
</script>