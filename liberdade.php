<?php
    include "assets/includes/page_start.php";
    $title = "Japanesetown | Sightseeing";
	include "assets/includes/head.php";
    include "assets/includes/mapliberdade.php";
    include "assets/includes/menu.php";
    include "assets/includes/images.php";
    include "assets/includes/imgliberdade.php";    
?>
    <img id="mainImg" class="noshow" src="assets/images/liberdade/0.jpg" alt="Japanesetown in São Paulo"/>
<?php
    include "assets/includes/sightseeing_menu.php";
?>  
<script> changeImg(3); isCurrent("s2");</script>

        <main>
          <h2>Liberdade - Japanesetown</h2>
          <p>Did you know that Brazil has the largest number of Japanese living outside Japan? Well it does and many of these Japanese descendants live in São Paulo.</p>
          <p>Liberdade is a Japanese neighborhood that has nice restaurants, shops and culture.  The street lights were designed in Japanese style and even some fast food restaurants and other places are decorated in oriental style.</p>
          <p>It is a fun place to visit and see the Japanese influence in São Paulo. You can even feel you are in Japan for some hours.</p>
          <p>There is a street fair at Praça Liberdade on Sundays. It is usually crowded but has nice Asian food, crafts and souvenirs.</p>
         <div id="mapLIBERDADE"></div>
         <img onclick="showPic('bliberdade1.jpg', '50%')" src="assets/images/liberdade1.jpg" alt="liberdade"/>
         <img onclick="showPic('bliberdade3.jpg', '50%')" src="assets/images/liberdade3.jpg" alt="liberdade"/>
         <img onclick="showPic('bliberdade4.jpg', '50%')" src="assets/images/liberdade4.jpg" alt="liberdade"/>
         <h4>Photo1 by <a href="http://www.flickr.com/photos/makoto-suzuki/9235899292/">Adriano Makoto Suzuki</a></h4>
          <h4>Photo2 by <a href="http://www.flickr.com/photos/lauro/3039890092/">Lauro Maia</a></h4>
          <h4>Photo3 by <a href="http://www.flickr.com/photos/cviniciusj/4292226070/">Carlos Vinícius</a></h4>

        </main>
    </div>

<?php
    include "assets/includes/footer.php";
?>