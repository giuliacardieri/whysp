<?php
    include "assets/includes/page_start.php";
    $title = "Markets| Sightseeing";
	include "assets/includes/head.php";
    include "assets/includes/mapmarkets.php";
    include "assets/includes/menu.php";
    include "assets/includes/images.php";
    include "assets/includes/imgmarkets.php";    
?>
    <img id="mainImg" class="noshow" src="assets/images/municipal/0.jpg" alt="Municipal Market in SP"/>
<?php
    include "assets/includes/sightseeing_menu.php";
?>  
<script> changeImg(4); isCurrent("s1");</script>
        <main>
          <h2>Markets</h2>
            <h3 id="benedito">Benedito Calixto</h3>
            <p>The outdoor market Benedito Calixto, or just Calixto, goes all day on Saturday (9AM-7PM) selling antiques, handcrafted items and food. Around noon live music and dancing starts near the food court.</p>
            <p>You can find much traditional food from all parts of Brazil, especially northeastern region. Some famous snacks are cashew nuts, Brazil nuts, acarajé, coconut water, esfihas and pasteis.</p>
            <p>Address: Praça Benedito Calixto – Jardim Paulista.</p>
            <div id="mapBenedito"></div>
            <img onclick="showPic('bbenedito.jpg', '50%')" src="assets/images/benedito.jpg" alt="municipal market"/>
            <img onclick="showPic('bbenedito1.jpg', '50%')" src="assets/images/benedito1.jpg" alt="municipal market"/>
            <img onclick="showPic('bbenedito2.jpg', '50%')" src="assets/images/benedito2.jpg" alt="municipal market"/>
            <img onclick="showPic('bbenedito3.jpg', '50%')" src="assets/images/benedito3.jpg" alt="municipal market"/>
            <h4>Photo1 by <a href="http://www.flickr.com/photos/phaeldiniz/6338339559/">Phael Diniz</a></h4>    
          <h4>Photo2 by <a href="http://www.flickr.com/photos/jubasimoes/8114752386/">Juliana Simões</a></h4>
          <h4>Photo3 by <a href="http://www.flickr.com/photos/phaeldiniz/6339093206/">Phael Diniz</a></h4>
          <h4>Photo4 by <a href="http://www.flickr.com/photos/phaeldiniz/6339092248/">Phael Diniz</a></h4>
            
            <h3 id="fmasp">MASP</h3>
            <p>On Saturdays the area around <a href="museums.shtml">MASP</a> host two outdoor markets.</p>
            <p>The one under the museum is the most famous and has a great variety of antiques.</p>
            <p>The other one is located across is a handicrafts market and also has street food.</p>
            <div id="mapMasp"></div>
            <img onclick="showPic('bmaspm.jpg', '105%')" src="assets/images/maspm.jpg" alt="masp market"/>
            <img onclick="showPic('bmaspm1.jpg', '105%')" src="assets/images/maspm1.jpg" alt="masp market"/>
            <h4>Photo1 by <a href="http://www.flickr.com/photos/garotadpi/226354364/">Fernanda Lobato</a></h4>
          <h4>Photo2 by <a href="http://www.flickr.com/photos/andresavastano/12032406164/">André Savastano</a></h4>

            <h3 id="municipal">Mercado Municipal</h3>
            <p>Municipal Market of São Paulo, or Mercadão, is São Paulo’s most famous market. It was opened in 1933 and has a distinct architecture with stained glass imported from Germany.</p>
            <p>On the first floor you can find a great variety of food from all parts of Brazil such as fruits, spices, meat, sweets and seafood. The second floor has a Gourmet Lounge with traditional dishes such as Sanduiche de Mortadela(Bologna Sandwich) and Pastel de Camarão(Shrimp Brazilian Style Empanada).</p>
            <p>Besides a touristic place, the Municipal Market is also an important supply center for the city.</p>
            <p>Be careful with your purse or bag and don’t bring valuable items because the area around the market is not 100% safe.</p>
            <p>It is located in downtown, near 25 de Março street.</p>
<p>Address:  Rua Cantareira (Cantareira Street), 306.</p>
<p>Official website:<a href="http://www.oportaldomercadao.com.br/">http://www.oportaldomercadao.com.br/</a></p>
            <div id="mapMunicipal"></div>

            <img onclick="showPic('bmercado1.jpg', '180%')" src="assets/images/mercado1.jpg" alt="municipal market"/>
            <img onclick="showPic('bmunicipal1.jpg', '180%')" src="assets/images/municipal1.jpg" alt="municipal market"/>
            <img onclick="showPic('bmunicipal2.jpg', '180%')" src="assets/images/municipal2.jpg" alt="municipal market"/>
            <h4>Photo1 by <a href="http://www.flickr.com/photos/fjota/2498616579/">Flávio Jota de Paula</a></h4>
          <h4>Photo2 by <a href="http://www.flickr.com/photos/92740747@N02/11031989136/">FreitasMarta</a></h4>
          <h4>Photo3 by <a href="http://www.flickr.com/photos/92740747@N02/11032246463/">FreitasMarta</a></h4>
        </main>
    </div>
<?php
    include "assets/includes/footer.php";
?>