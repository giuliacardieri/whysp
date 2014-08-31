<script>
var pina =new google.maps.LatLng(-23.534006, -46.633893);
var masp =new google.maps.LatLng(-23.561346, -46.656052);
var fut =new google.maps.LatLng(-23.546807, -46.665321);

function initializeMuseums(){
var mapPINA = {
  center:pina,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var mappina=new google.maps.Map(document.getElementById("mapPINA")
  ,mapPINA);

var markerpina=new google.maps.Marker({
  position:pina,
  });
markerpina.setMap(mappina);

    
var mapMASP = {
  center:masp,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var mapmasp=new google.maps.Map(document.getElementById("mapMASP")
  ,mapMASP);

var markermasp=new google.maps.Marker({
  position:masp,
  });
markermasp.setMap(mapmasp);


var mapFUT = {
  center:fut,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var mapfut=new google.maps.Map(document.getElementById("mapFUT")
  ,mapFUT);

var markerfut=new google.maps.Marker({
  position:fut,
  });
markerfut.setMap(mapfut);
}
google.maps.event.addDomListener(window, 'load', initializeMuseums);
</script>