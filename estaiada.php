<?php
    include "assets/includes/page_start.php";
    $title = "Estaiada Bridge | Sightseeing";
	include "assets/includes/head.php";
    include "assets/includes/mapestaiada.php";
    include "assets/includes/menu.php";
    include "assets/includes/images.php";    
?>
    <img id="mainImg" class="noshow" src="assets/images/estaiada/0.jpg" alt="Estaiada Bridge"/>
    <img class="noshow" src="assets/images/estaiada/1.jpg" alt="Estaiada Bridge"/>
<?php
    include "assets/includes/sightseeing_menu.php";
?>  
<script> changeImg(2); isCurrent("s4");</script>

        <main>
          <h2>Ponte Estaiada - Estaiada Bridge</h2>
          <p>Ponte Estaiada, or Estaiada Bridge in English, is the popular name of Octavio Frias de Oliveira bridge. It is a cable-stayed brigde over Pinheiros River. It connects Marginal Pinheiros to Jornalista Roberto Marinho Avenue. It was opened in May 2008 and is an important postcard of São Paulo. </p>
         <div id="mapEstaiada"></div>
        <img onclick="showPic('bestaiada1.jpg', '50%')" src="assets/images/estaiada1.jpg" alt="ponte estaiada"/>
        <img onclick="showPic('bestaiada2.jpg', '50%')" src="assets/images/estaiada2.jpg" alt="ponte estaiada"/>
        <h4>Photo1 by <a href="http://www.flickr.com/photos/ealecrim/5756522055/">Emerson Alecrim</a></h4>
          <h4>Photo2 by <a href="http://www.flickr.com/photos/marcosuk/3192059946/">Marcos Leal</a></h4>
       </main>
        
    </div>

<?php
    include "assets/includes/footer.php";
?>