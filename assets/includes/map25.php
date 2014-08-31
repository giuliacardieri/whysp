<script>
var vinte =new google.maps.LatLng(-23.543318, -46.632477);

function initialize25(){
var map25 = {
  center:vinte,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map25=new google.maps.Map(document.getElementById("map25")
  ,map25);

var marker25=new google.maps.Marker({
  position:vinte,
  });
marker25.setMap(map25);
    
}
google.maps.event.addDomListener(window, 'load', initialize25);
</script>