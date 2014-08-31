<script>
var ibirapuera =new google.maps.LatLng(-23.587155, -46.657655);

function initializeIbirapuera(){
var mapIbirapuera = {
  center:ibirapuera,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var mapibirapuera=new google.maps.Map(document.getElementById("mapIbirapuera")
  ,mapIbirapuera);

var markeribirapuera=new google.maps.Marker({
  position:ibirapuera,
  });
markeribirapuera.setMap(mapibirapuera);
    
}
google.maps.event.addDomListener(window, 'load', initializeIbirapuera);
</script>