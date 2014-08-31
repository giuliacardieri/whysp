<?php
    include "assets/includes/page_start.php";
    $title = "Paulista Avenue | Sightseeing";
	include "assets/includes/head.php";
    include "assets/includes/mappaulista.php";
    include "assets/includes/menu.php";
    include "assets/includes/images.php";
    include "assets/includes/imgpaulista.php";    
?>
    <img id="mainImg" class="noshow" src="assets/images/paulista/0.jpg" alt="Paulista Avenue"/>
<?php
    include "assets/includes/sightseeing_menu.php";
?>  
<script> changeImg(3); isCurrent("s3");</script>

        <main>
          <h2>Avenida Paulista - Paulista Avenue</h2>
          <p>Avenida Paulista, or Paulista Avenue, is the most famous avenue in São Paulo.</p>
          <p>It is one of the largest business and cultural center of the city. It has pieces of modern and old architecture.</p>
          <p>The <a href="museums.php">MASP</a> is located at Avenida Paulista. Other important and nice places to visit, such as <a href="nightlife.php">Rua Augusta</a>, art galleries, hotels and restaurants, are also located nearby.</p>
         <p>Some fun facts are that Avenida Paulista is considered to have the most expensive real estate in all Latin America, and the world’s largest gay pride parade takes place in Avenida Paulista in May/June.</p>
         <div id="mapPaulista"></div>
          <img onclick="showPic('bpaulista1.jpg', '50%')" src="assets/images/paulista1.jpg" alt="Night at Avenida Paulista" />
          <img onclick="showPic('bpaulista2.jpg', '50%')" src="assets/images/paulista2.jpg" alt="Day at Avenida Paulista"/>
          <img onclick="showPic('bpaulista3.jpg', '50%')" src="assets/images/paulista3.jpg" alt="Day at Avenida Paulista"/>
          <h4>Photo1 by <a href="http://www.flickr.com/photos/cameraobs/3106999321/">Fernando Oliveira</a></h4>
          <h4>Photo2 by <a href="http://www.flickr.com/photos/wallyg/7707978412/">Wally Gobetz</a></h4>
          <h4>Photo3 by <a href="http://www.flickr.com/photos/abanyai/2362706346/">André Banyai</a></h4>
        </main>
    </div>

<?php
    include "assets/includes/footer.php";
?>