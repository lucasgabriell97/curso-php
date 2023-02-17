<?php

  $velocidade = 35;

  if($velocidade < 40) {
    echo "O motorista está na velocidade certa! <br>";
  } else if($velocidade === 40) {
    echo "Tome cuidado! <br>";
  } else {
    echo "O motorista está multado!";
  }

?>