<script>
var benedito =new google.maps.LatLng(-23.557807, -46.680602);
var masp =new google.maps.LatLng(-23.561267, -46.655977);
var municipal =new google.maps.LatLng(-23.541544, -46.629415);

function initializeMarkets(){
var mapBenedito = {
  center:benedito,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
    
var mapbenedito=new google.maps.Map(document.getElementById("mapBenedito")
  ,mapBenedito);

var markerbenedito=new google.maps.Marker({
  position:benedito,
  });
markerbenedito.setMap(mapbenedito);
  
    
var mapMasp = {
  center:masp,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
    
var mapmasp=new google.maps.Map(document.getElementById("mapMasp")
  ,mapMasp);

var markermasp=new google.maps.Marker({
  position:masp,
  });
markermasp.setMap(mapmasp);

var mapMunicipal = {
  center:municipal,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
    
var mapmunicipal=new google.maps.Map(document.getElementById("mapMunicipal")
  ,mapMunicipal);

var markermunicipal=new google.maps.Marker({
  position:municipal,
  });
markermunicipal.setMap(mapmunicipal);
}
    
google.maps.event.addDomListener(window, 'load', initializeMarkets);
</script>