<script>
var copan =new google.maps.LatLng(-23.546619, -46.644674);

function initializeCopan(){
var mapCopan = {
  center:copan,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var mapcopan=new google.maps.Map(document.getElementById("mapCopan")
  ,mapCopan);

var markercopan=new google.maps.Marker({
  position:copan,
  });
markercopan.setMap(mapcopan);
    
}
google.maps.event.addDomListener(window, 'load', initializeCopan);
</script>