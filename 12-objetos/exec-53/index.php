<?php

  class Cachorro {
    function latir() {
      echo "Auau <br>";
    }

    function andar($m) {
      echo "O cachorro andou $m metros <br>";
    }
  }

  $pitbull = new Cachorro;
  $viralata = new Cachorro;

  $pitbull->latir();
  $viralata->andar(512);

?>