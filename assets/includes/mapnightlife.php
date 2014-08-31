<script>
var augusta =new google.maps.LatLng(-23.551500, -46.651626);
var madalena =new google.maps.LatLng(-23.545735, -46.700241);

function initializeNightlife(){
var mapAugusta = {
  center:augusta,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
    
var mapaugusta=new google.maps.Map(document.getElementById("mapAugusta")
  ,mapAugusta);

var markeraugusta=new google.maps.Marker({
  position:augusta,
  });
markeraugusta.setMap(mapaugusta);
  
    
var mapMadalena = {
  center:madalena,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
    
var mapmadalena=new google.maps.Map(document.getElementById("mapMadalena")
  ,mapMadalena);

var markermadalena=new google.maps.Marker({
  position:madalena,
  });
markermadalena.setMap(mapmadalena);
}
    
google.maps.event.addDomListener(window, 'load', initializeNightlife);
</script>