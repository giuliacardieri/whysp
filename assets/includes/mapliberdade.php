<script>
var liberdade =new google.maps.LatLng(-23.555184, -46.635569);

function initializeLiberdade(){
var mapLIBERDADE = {
  center:liberdade,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var mapliberdade=new google.maps.Map(document.getElementById("mapLIBERDADE")
  ,mapLIBERDADE);

var markerliberdade=new google.maps.Marker({
  position:liberdade,
  });
markerliberdade.setMap(mapliberdade);
    
}
google.maps.event.addDomListener(window, 'load', initializeLiberdade);
</script>