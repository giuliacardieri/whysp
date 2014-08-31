<?php
    include "assets/includes/page_start.php";
    $title = "Ibirapuera Park | Sightseeing";
	include "assets/includes/head.php";
    include "assets/includes/mapibirapuera.php";
    include "assets/includes/menu.php";
    include "assets/includes/images.php";
    include "assets/includes/imgibirapuera.php";    
?>
    <img id="mainImg" class="noshow" src="assets/images/ibirapuera/0.jpg" alt="Ibirapuera Park"/>
<?php
    include "assets/includes/sightseeing_menu.php";
?>  
<script> changeImg(5); isCurrent("s5");</script>
        <main>
          <h2>Parque Ibirapuera - Ibirapuera Park</h2>
          <p>Parque Ibirapuera is the most famous park in São Paulo. It mixes culture, recreation and nature in one place. You can also enjoy a sunny day walking around the lake, ride a bicycle or visit one of the exhibitions.</p>
          <p>If you like architecture Ibirapuera Park is a great place to enjoy Oscar Niemeyer’s architecture, the most famous Brazilian architect.</p>
          <p>One of its buldings is the Oca (the name that native people gave to their homes). This building is only open when a art exhibition is happening, but you can enjoy the outside architecture.</p>
          <p>Another building is Museu de Arte Moderna(Museum of  Modern Art), also known as MAM has more than 4500 paintings, sculptures and other works from modern and contemporary artists. It was first designed by Oscar Niemeyer in 1948 as a temporary pavillion and later in 1980 Lina Bo Bardi redesigned it into a museum.</p>
          <p>Besides the Oca and MAM there is a Planetarium near gate 2. It has free shows of 50 minutes.</p>

          <p>Address: Avenida Pedro Álvares Cabral, Vila Mariana.</p>
          <p>Official website: <a href=" http://www.prefeitura.sp.gov.br/cidade/secretarias/meio_ambiente/parques/regiao_sul/index.php?p=14062"> http://www.prefeitura.sp.gov.br/cidade/secretarias/meio_ambiente/parques/regiao_sul/index.php?p=14062</a></p>
          <div id="mapIbirapuera"></div>
          <img onclick="showPic('bibirapuera1.jpg', '60%')" src="assets/images/ibirapuera1.jpg" alt="sunset at ibirapuera park" />
          <img onclick="showPic('bibirapuera2.jpg', '60%')" src="assets/images/ibirapuera2.jpg" alt="obelisk at ibirapuera park"/>
          <img onclick="showPic('bibirapuera3.jpg', '60%')" src="assets/images/ibirapuera3.jpg" alt="The oca at ibirapuera park" />
          <img onclick="showPic('bibirapuera4.jpg', '60%')" src="assets/images/ibirapuera4.jpg" alt="Christmas lights at ibirapuera park"/>
          <h4>Photo1 by <a href="http://www.flickr.com/photos/daxfdr/3810127273/">daxfdr</a></h4>
          <h4>Photo2 by <a href="http://www.flickr.com/photos/jbarahona/5552510717/">Jorge Barahona Ch.</a></h4>
          <h4>Photo3 by <a href="http://www.flickr.com/photos/wallyg/7694967924/">Wally Gobetz</a></h4>
          <h4>Photo4 by <a href="http://www.flickr.com/photos/whltravel/8699360932/">...your local connection on</a></h4>
        </main>
    </div>
<?php
    include "assets/includes/footer.php";
?>