<?php
    include "assets/includes/page_start.php";
    $title = "Copan Building | Sightseeing";
	include "assets/includes/head.php";
    include "assets/includes/mapcopan.php";
    include "assets/includes/menu.php";
    include "assets/includes/images.php";
?>
    <img id="mainImg" class="noshow" src="assets/images/copan/0.jpg" alt="Copan Building"/>
    <img class="noshow" src="assets/images/copan/1.jpg" alt="Copan Building"/>
<?php
    include "assets/includes/sightseeing_menu.php";
?>
<script> changeImg(2);  isCurrent("s7");</script>

        <main>
          <h2>Copan Building</h2>
          <p>Copan building was designed by Oscar Niemeyer, who is the most famous Brazilian architect. It is a well-known image of São Paulo because of its characteristic curves.</p>
          <p>Copan use to be home for wealthy and artsy people but now it is not a fancy place anymore. It is worth a look and Terraço Itália, a restaurant on the top of a nearby building, Italia Building (Edifício Itália), offers a panoramic view of the city including Copan building.</p>
          <p>Fun fact: Some people say Copan Building is haunted by ghosts of its older habitants.</p>
          <p>Address: Avenida Ipiranga, 200, Republica.</p>
          <div id="mapCopan"></div>
          <img onclick="showPic('bcopan1.jpg', '25%')" src="assets/images/copan1.jpg" alt="copan building"/>
          <img onclick="showPic('bcopan2.jpg', '25%')" src="assets/images/copan2.jpg" alt="copan building"/>
          <h4>Photos by Caio Ribeiro</h4>
        </main>
    </div>

<?php
    include "assets/includes/footer.php";
?>