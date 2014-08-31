<?php
    include "assets/includes/page_start.php";
    $title = "Homepage ";
	include "assets/includes/head.php";
    include "assets/includes/mapSP.php";
    include "assets/includes/menu.php";
    include "assets/includes/imgsp.php";
?>   
    <img id="mainImg" class="noshow" src="assets/images/sp/0.jpg" alt="Sao Paulo Cityview"/>
    <script> changeImg(5); </script>
    <div id="bottom">  
        <section>
          <h3>External Links</h3>
          <ul>
            <li><a href="http://www.saopaulo.sp.gov.br/en/conhecasp/">Official City Website</a></li>
            <li><a href="http://en.wikipedia.org/wiki/S%C3%A3o_Paulo">Wikipedia Page</a></li>
            <li><a href="http://www.nytimes.com/travel/guides/central-and-south-america/brazil/sao-paulo/overview.html">NY Times Guide</a></li>
          </ul>
        </section>

        <main>
          <h2>Why São Paulo?</h2>
          <p>São Paulo is the largest city in Brazil, with a city population of almost 20 million in its metropolitan region, and the world’s seventh largest city by population.</p>
          <p>Now you might be thinking, why should I visit a big city like São Paulo? Well, besides being a huge city São Paulo also has a lot of culture and interesting things that you will not find anywhere else in the world.</p>
          <p>The first thing to learn before planning a visit is basic information about the city and the country, Brazil.</p>

        <p>The official language is portuguese! Not Spanish or Brazilian</p>
        <p>The capital city is Brasilia.</p>
        <p>The currency is called Real, or Reais in plural.(R$).</p>
        <p>You already know but most of Brazil is located in South hemisphere, which means summer is on December/January/February and winter is in June/July/August.</p>
        <p>It is the capital of São Paulo state, located in southeastern Brazil.</p>
        <p>The climate is subtropical, expect to be warm most part of the year. During May-August the temperatures drop a little, so don't forget your light jacket. Don’t expect a tropical weather all year round. It rains, a lot! Always take an umbrella.</p>
         <div id="mapSP"></div>
       </main>
    </div>
<?php
        include "assets/includes/footer.php";
?>
