<?php
    include "assets/includes/page_start.php";
    $title = "25 de Marco Street | Sightseeing";
	include "assets/includes/head.php";
    include "assets/includes/map25.php";
    include "assets/includes/menu.php";
    include "assets/includes/images.php";
    include "assets/includes/img25.php";
?>
    <img id="mainImg" class="noshow" src="assets/images/25/0.jpg" alt="25 de Marco Street"/>
<?php
    include "assets/includes/sightseeing_menu.php";
?>
<script> changeImg(4); isCurrent("s6");</script>
        <main>
          <h2>25 de Março Street</h2>
          <p>Rua 25 de Março, in English March 25th Street is the most famous popular commerce region in São Paulo. Before you plan a visit you should know that it is usually crowded and that you should be very careful with your belongings.</p>
          <p>You can find almost anything in 25 de Março Street! From underwear to fridge magnets, jewelry to toys. It is a unique place you won’t find anywhere else. </p>
          <p>A nice tip is to arrive very early, around 9AM and leave around 3-4PM.</p>
          <p><a href="markets.php">Municipal Market</a> is only a couple of blocks away and is a good idea to stop there for lunch or just a snack.</p>
          <div id="map25"></div>
          <img onclick="showPic('b251.jpg', '35%')" src="assets/images/251.jpg" alt="25 de Março"/>
          <img onclick="showPic('b252.jpg', '35%')" src="assets/images/252.jpg" alt="25 de Março"/>
          <h4>Photo1 by <a href="http://www.flickr.com/photos/formigao/2907080953/">Rafael Barbosa Cassimiro</a></h4>
          <h4>Photo2 by <a href="http://www.flickr.com/photos/55953988@N00/3166315491/">Otávio Nogueira</a></h4>


        </main>
    </div>
<?php
    include "assets/includes/footer.php";
?>
