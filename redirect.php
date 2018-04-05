<?php
  session_start();
  $newURL = $_SESSION["url"];
  header('Location:'.$newURL);
 ?>
