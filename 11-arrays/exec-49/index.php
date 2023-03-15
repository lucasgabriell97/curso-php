<?php

  $raca = "pitbull";
  $cor = "marrom";
  $olhos = "azul";
  $idade = 4;

  $cachorro = compact("raca", "cor", "olhos", "idade");

  print_r($cachorro);
  echo "<br>";

  $key = array_keys($cachorro);
  $value = array_values($cachorro);

  for($i = 0; $i < count($cachorro); $i++) {
    echo "$key[$i]: $value[$i] <br>";
  }

?>