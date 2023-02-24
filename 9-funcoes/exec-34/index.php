<?php

  function parOuImpar($num) {
    if($num % 2 == 0) {
      echo "$num é um número par!";
    } else {
      echo "$num é um número ímpar!";
    }
  }

  parOuImpar(28);

?>