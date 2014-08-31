<script>
var sp =new google.maps.LatLng(-23.547146, -46.635125);
function initializeSP()
{
var mapSP = {
  center:sp,
  zoom:7,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var mapsp=new google.maps.Map(document.getElementById("mapSP")
  ,mapSP);

var marker=new google.maps.Marker({
  position:sp,
  });
marker.setMap(mapsp);
}
google.maps.event.addDomListener(window, 'load', initializeSP);
</script>