<?php
    include "assets/includes/page_start.php";
    $title = "Street Art | Culture&amp;Art";
	include "assets/includes/head.php";
    include "assets/includes/mapsa.php";
    include "assets/includes/menu.php";
    include "assets/includes/images.php";
    include "assets/includes/imgstreetart.php";    
?>
    <img id="mainImg" class="noshow" src="assets/images/streetart/0.jpg" alt="Street Art in SP"/>
<?php
    include "assets/includes/ca_menu.php";
?>
<script> changeImg(3); isCurrent("ca2");</script>
        <main>
          <h2>Street Art</h2>
          <p>São Paulo has a lot of street art. It is considered one of the best cities in the world for the development of creativity in street art. Most of art is on downtown but there are some good near <a href="nightlife.shtml">Vila Madalena</a>.</p>
          <p>Beco do Batman(Batman’s Alley) has some nice street art. It is located off Rua Harmonia,  just before Rua Luis Murat.</p>
          <div id="mapSA"></div>
          <img onclick="showPic('bstreetart1.jpg', '50%')" src="assets/images/streetart1.jpg" alt="streetart"/>
          <img onclick="showPic('bstreetart2.jpg', '50%')" src="assets/images/streetart2.jpg" alt="streetart at rua augusta"/>
          <h4>Photo1 by <a href="http://www.flickr.com/photos/wallyg/7640278398/ ">Wally Gobetz</a></h4>
           <h4>Photo2 by <a href="http://www.flickr.com/photos/babileta/3021154394/">Barbara Carneiro</a></h4>

        </main>
    </div>
<?php
    include "assets/includes/footer.php";
?>