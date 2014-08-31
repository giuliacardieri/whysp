<script>
var paulista =new google.maps.LatLng(-23.565163, -46.651849);

function initializePaulista(){
var mapPaulista = {
  center:paulista,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var mappaulista=new google.maps.Map(document.getElementById("mapPaulista")
  ,mapPaulista);

var markerpaulista=new google.maps.Marker({
  position:paulista,
  });
markerpaulista.setMap(mappaulista);
    
}
google.maps.event.addDomListener(window, 'load', initializePaulista);
</script>