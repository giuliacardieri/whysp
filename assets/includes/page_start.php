<?php
    $title_main = " | Why São Paulo?";
    include "/Volumes/Students/students/135/gxd5961/db_conn.php";
      $link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
      if(!$link)
      {
        echo "Connection Error D: " . mysqli_connect_error();
        die();
      }
?>