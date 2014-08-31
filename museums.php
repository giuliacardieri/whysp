<?php
    include "assets/includes/page_start.php";
    $title = "Museums | Culture&amp;Art";
	include "assets/includes/head.php";
    include "assets/includes/mapmuseums.php";
    include "assets/includes/menu.php";
    include "assets/includes/images.php";
    include "assets/includes/imgmuseums.php";    
?>
    <img id="mainImg" class="noshow" src="assets/images/masp/0.jpg" alt="MASP"/>
<?php
    include "assets/includes/ca_menu.php";
?>
    <script> changeImg(5); isCurrent("ca1");</script>
        <main>               
          <h2>Museums</h2>
          <h3 id="masp">MASP - Museu de Arte de São Paulo</h3>
            <p>Museu de Arte de São Paulo, São Paulo Museum of Art, is located in Paulista Avenue. It is famous for its unique architecture and most comprehensive collection of western art in Latin America.</p>
            <p>MASP was established in 1947. Although, only in 1968 it changed to Paulista Avenue on the famous glass and concrete structure designed by Lina Bo Bardi. It is considered a main symbol of Brazilian architecture. </p>
            <p>This museum has a huge collection including Goya, El Greco, Monet, Picasso and Cézanne. There are also some great Brazilian paintings from Cândido Portinari and Anita Malfatti.</p>

            <p>This is one of the most famous landmarks of São Paulo and you should definitely include in your list, even if it is only for admire the architecture.
            <p>Address: Avenida Paulista, 1578, Bela Vista</p>
            <p>Official website: <a href="http://www.masp.art.br">http://www.masp.art.br</a></p>
            <div id="mapMASP"></div>
            <img onclick="showPic('museum1.jpg', '60%')" src="assets/images/masp1.jpg" alt="masp"/>
            <img onclick="showPic('museum2.jpg', '60%')" src="assets/images/masp2.jpg" alt="masp"/>
            <h4>Photo1 by <a href="http://www.flickr.com/photos/wallyg/7707982348/">Wally Gobetz</a></h4>
            <h4>Photo2 by <a href="http://www.flickr.com/photos/miss_acacia/2507792900/">Joana Rangel</a></h4>
            
          <h3 id="pinacoteca">Pinacoteca do Estado de São Paulo</h3>
            <p>Pinacoteca do Estado de São Paulo, pinacotheca of the state of São Paulo, is located in downtown São Paulo. It is the oldest museum in the city, established in 1911, and one of the most important museums in Brazil.</p>
            <p>Pinacoteca hosts cultural events and has an international circuit of exhibitions.</p>
            <p>Its collection is composed by a wide-range collection of Brazilian Art. It has many paintings and sculpture of the 19th century, Brazilian modernist artwork, European paintings and sculptures and other works on paper.</p>
            <p>The museum is connected to Parque da Luz, a public park that has outdoor sculptures and a European-style garden.</p>
            <p>Address: Praça da Luz, 2.</p>
            <p>Official website:<a href="http://www.pinacoteca.org.br"> http://www.pinacoteca.org.br</a></p>
            <div id="mapPINA"></div>
            <img onclick="showPic('pin1.JPG', '140%')" src="assets/images/pinacoteca.jpg" alt="pinacoteca"/>
            <img onclick="showPic('pin2.jpg', '140%')" src="assets/images/pinacoteca1.jpg" alt="pinacoteca"/>
            <img onclick="showPic('pin3.jpg', '140%')" src="assets/images/pinacoteca2.jpg" alt="pinacoteca"/>
            <h4>Photo1 by Giulia de Andrade Cardieri</h4>
            <h4>Photo2 by <a href="http://www.flickr.com/photos/soldon/6217407064/ ">Rodrigo Soldon</a></h4>
            <h4>Photo3 by <a href="http://www.flickr.com/photos/soldon/6217414138/ ">Rodrigo Soldon</a></h4>

          <h3 id="soccer">Museu do Futebol - Soccer Museum</h3>
             <p>Museu do Futebol, or Soccer Museum, is located in Estádio do Pacaembu (Pacaembu stadium).
Pacaembu is one of São Paulo’s largest soccer stadiums.</p>
            <p>If you like soccer or sports in general this is a good place to visit! Brazil won the Soccer World Cup five times and soccer is part of Brazilian culture.</p>
             <p>The museum has vintage soccer displays, interactive exhibits, celebrations of world cup history and Brazilian soccer stars.</p>
             <p>The admission is about $3 and Thursdays are free. The hours are Tuesday-Saturday from 9AM-5PM.</p>
             <p>Address: Estádio do Pacaembu, Praça Charles Miller.</p>
            <p>Official website:<a href="http://www.museudofutebol.org.br"> http://www.museudofutebol.org.br</a></p>
             <div id="mapFUT"></div>
            <img onclick="showPic('fut1.jpg', '210%')" src="assets/images/futebol.jpg" alt="soccer museum"/>
            <img onclick="showPic('fut2.jpg', '210%')" src="assets/images/futebol1.jpg" alt="soccer museum"/>
            <h4>Photo1 by <a href="http://www.flickr.com/photos/wallyg/7688723168/ ">Wally Gobetz</a></h4>
            <h4>Photo2 by <a href="http://www.flickr.com/photos/wallyg/7688719454/ ">Wally Gobetz</a></h4>
            
        </main>
    </div>
<?php
    include "assets/includes/footer.php";
?>