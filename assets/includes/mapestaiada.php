<script>
var estaiada =new google.maps.LatLng(-23.612856, -46.698235);

function initializeEstaiada(){
var mapEstaiada = {
  center:estaiada,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var mapestaiada=new google.maps.Map(document.getElementById("mapEstaiada")
  ,mapEstaiada);

var markerestaiada=new google.maps.Marker({
  position:estaiada,
  });
markerestaiada.setMap(mapestaiada);
    
}
google.maps.event.addDomListener(window, 'load', initializeEstaiada);
</script>