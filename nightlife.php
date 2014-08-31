<?php
    include "assets/includes/page_start.php";
    $title = "Nightlife";
	include "assets/includes/head.php";
    include "assets/includes/mapnightlife.php";
    include "assets/includes/menu.php";
    include "assets/includes/images.php";
?>
    <img id="mainImg" class="noshow" src="assets/images/nightlife/0.jpg" alt="Sao Paulo Nightlife"/>
    <img class="noshow" src="assets/images/nightlife/1.jpg" alt="Sao Paulo Nightlife"/>
    <script> changeImg(2); </script>
        
    <div id="bottom">  
        <section>
          <h3>Nightlife</h3>
          <ul>
            <li><a href="#augusta">Rua Augusta</a></li>
            <li><a href="#madalena">Vila Madalena</a></li>
          </ul>
        </section>

        <main>

          <h2>Nightlife in São Paulo</h2>
          <p>São Paulo has a lot to offer for nightlife. You can go to nightclub, often called Baladas, or to a boteco, a bar that usually offers live music and petiscos (snacks).</p>
            
          <h3 id="augusta">Rua Augusta</h3>
          <p>Rua Augusta, or Augusta Street, is very famous for its nightlife. You can find many types of nightclubs, bars and restaurants in central part of the street (near Paulista Avenue).
You can find upscale, casual and GLS (Brazilian slang for Gays, Lesbians and Sympathizers) nightclubs in the same street. It is always good to be careful with your belongings, especially during night.</p>
          <div id="mapAugusta"></div>
          <img onclick="showPic('baugusta.jpg', '70%')" src="assets/images/augusta.jpg" alt="Rua Augusta" />
          <img onclick="showPic('baugusta1.jpg', '70%')" src="assets/images/augusta1.jpg" alt="Rua Augusta 2" />
          <img onclick="showPic('bnightlife1.jpg', '50%')" src="assets/images/nightlife1.jpg" alt="DJ at Rua Augusta" />
          <h4>Photo1 by <a href="http://www.flickr.com/photos/360o/203929768/">Maren Yumi Motomura</a></h4>
          <h4>Photo2 by <a href="http://www.flickr.com/photos/rejanesouza/6356162657/">Rejane Souza</a></h4>
          <h4>Photo3 by <a href="http://www.flickr.com/photos/leandrogodoi/4519514323/">Leandro Godoi</a></h4>
            
          <h3 id="madalena">Vila Madalena</h3>
          <p>Vila Madalena is an artsy neighborhood that has restaurants, bars and botecos.  If you want to listen to samba or other Brazilian popular music this is a good place.
You can also enjoy art galleries, bookstores and art shops during day.</p>
          <div id="mapMadalena"></div>
          <img onclick="showPic('bmadalena.jpg', '110%')" src="assets/images/madalena.jpg" alt="Vila Madalena" />
          <img onclick="showPic('bmadalena1.jpg', '110%')" src="assets/images/madalena1.jpg" alt="Vila Madalena" /> 
          <h4>Photo1 by <a href="http://www.flickr.com/photos/stankuns/8560821564/">Fernando Stankuns</a></h4>
          <h4>Photo2 by <a href="http://www.flickr.com/photos/gonza2010/6257614984/">Gonzalo Cuellar</a></h4>
        
        </main>
    </div>

<?php
    include "assets/includes/footer.php";
?>