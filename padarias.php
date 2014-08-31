<?php
    include "assets/includes/page_start.php";
    $title = "Bakeries | Food";
	include "assets/includes/head.php";
    include "assets/includes/menu.php";
    include "assets/includes/images.php";
    include "assets/includes/imgbakeries.php";
?>
    <img id="mainImg" class="noshow" src="assets/images/bakeries/0.jpg" alt="Bakeries"/>
<?php
    include "assets/includes/food_menu.php";
?>
<script> changeImg(3); isCurrent("food2");</script>
        <main>
          <h2>Padarias</h2>
          <p>Padaria is a translation for bakery, although a Brazilian bakery is a lot different from an American or Canadian bakery. </p>
          <h3 id="pao">Pão Francês</h3>
          <p>Paulistas (people who lives in São Paulo state) love bread, especially the one called pão francês (French bread). You should try it! It is even better toasted with butter or cheese and ham.</p>
          <img onclick="showPic('bpao.jpg', '50%')" src="assets/images/pao.jpg" alt="Pão Francês" />
          <img onclick="showPic('bpao1.jpg', '50%')" src="assets/images/pao1.jpg" alt="Pão Francês" />
          <h4>Photo1 by <a href="https://www.flickr.com/photos/67288829@N00/276121692/">Rogerio Rosa</a></h4>
          <h4>Photo2 by <a href="https://www.flickr.com/photos/luciannagerghi/7916399270/">lgerghi</a></h4>
            
          <h3 id="pastel">Pastel</h3>
          <p>Pastel is a Brazilian style fried empanada. There are many fillings but the most common are mozzarella, ground meat, heart of palm and chicken. You can also have pasteis (plural of Pastel) with sweet fillings such as Chocolate and Banana.</p>
          <p>You can buy pasteis at some padarias or at pastelarias, fast-food shops that sells pasteis.</p>
            <img onclick="showPic('bpastel.jpg', '75%')" src="assets/images/pastel.jpg" alt="pastel"/>
            <img onclick="showPic('bpastel1.jpg', '75%')" src="assets/images/pastel1.jpg" alt="Pastel" />
             <h4>Photo1 by <a href="https://www.flickr.com/photos/wallyg/7659487706/">Wally Gobetz</a></h4>
          <h4>Photo2 by <a href="https://www.flickr.com/photos/viajor/11763841056/">Jorge in Brazil</a></h4>
            
          <h3 id="pdq">Pão de Queijo</h3>
            <p>Pão de Queijo literally means Cheese Bread but it is a different kind of cheese bread that you only find in Brazil. It is usually in small balls format, served hot and you eat as a snack or breakfast.</p>
            <p>Pães de Queijo(plural for pão de queijo) are chewy and moist. It is made of cassava and cheese.</p>
            <img onclick="showPic('bpdq.jpg', '115%')" src="assets/images/pdq.jpg" alt="Pão de Queijo" />
            <img onclick="showPic('bpdq1.jpg', '115%')" src="assets/images/pdq1.jpg" alt="Pão de Queijo" />
            <h4>Photo1 by <a href="http://www.flickr.com/photos/lcloss/4105726715/">Luciano Closs</a></h4>
          <h4>Photo2 by <a href="https://www.flickr.com/photos/glauciagoes/4543954418/">Glaucia Goes</a></h4>
            
            
          <h3 id="cafe">Café</h3>
            <p>Don’t expect coffee like you find on Starbucks or Tim Hortons. Brazilian coffees are very different, and usually a lot tastier!</p>
            <p>Brazil is the world’s largest producer of coffee and people drink it a lot. Usually they order a espresso (sometimes called cafezinho – little coffee) or café com leite (coffee with milk). The size is a lot smaller than US standards but usually coffees are stronger.</p>
            <img onclick="showPic('bcafe.jpg', '165%')" src="assets/images/cafe.jpg" alt="Brazilian Coffee" />
            <img onclick="showPic('bcafe1.jpg', '165%')" src="assets/images/cafe1.jpg" alt="Coffee Tree" />
            <img onclick="showPic('bcafe2.jpg', '165%')" src="assets/images/cafe2.jpg" alt="Brazilian Coffee" />
            <h4>Photo1 by <a href="http://www.flickr.com/photos/alexandre_cg/2748583754/">Alexandre Costa</a></h4>
          <h4>Photo2 by <a href="http://www.flickr.com/photos/fotosdoacre/9318293536/">Agência de Notícias do Acre</a></h4>
          <h4>Photo3 by <a href="http://www.flickr.com/photos/darlanmc/6270849135/ ">Darlan</a></h4>
            
          <h3 id="brigadeiro">Brigadeiro</h3>
            <p>Brigadeiro is the most famous Brazilian candy. The traditional one is a small ball made of condensed milk and chocolate with little chocolate sprinkles.</p>
            <p>You can easily find it in every padaria or candy shops (docerias).</p>
            <p>If you like chocolate is a must try when you go to Brazil!</p>
            <img onclick="showPic('bbrigadeiro.jpg', '225%')" src="assets/images/brigadeiro.jpg" alt="brigadeiro" />
            <img onclick="showPic('bbrigadeiro1.jpg', '225%')" src="assets/images/brigadeiro1.jpg" alt="brigadeiro" />
            <h4>Photo1 by Giulia de Andrade Cardieri</h4>
          <h4>Photo2 by <a href="http://www.flickr.com/photos/tadeupereira/371336124/">Tadeu Pereira</a></h4>
            
            
        </main>
    </div>

<?php
    include "assets/includes/footer.php";
?>