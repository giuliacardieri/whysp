<?php
    include "assets/includes/page_start.php";
    $title = "Pizza | Food";
	include "assets/includes/head.php";
    include "assets/includes/menu.php";
    include "assets/includes/images.php";
?>
    <img id="mainImg" class="noshow" src="assets/images/pizza/0.jpg" alt="Brazilian Pizza"/>
    <img class="noshow" src="assets/images/pizza/1.jpg" alt="Brazilian Pizza Place"/>
<?php
    include "assets/includes/food_menu.php";
?>
<script> changeImg(2); isCurrent("food3");</script>

        <main>
          <h2>Pizza</h2>
          <p>Pizza is a tradition in São Paulo and it is very different from a American, Canadian or European pizza. You can choose between a lot of different flavors, such as chicken with cream cheese(Frango e Catupiry), arugula with sun-dried tomatoes(Rúcula com Tomates Secos), Brigadeiro(Sweet condensed milk with chocolate) and the traditional such as Mussarela(Mozzarella Cheese with olives) and Calabresa(Sausage with onions and olives).</p>
          <p>You can go to a Pizzaria (pizza restaurant) or ask for delivery in a neighborhood place.</p>

        </main>
    </div>

<?php
    include "assets/includes/footer.php";
?>