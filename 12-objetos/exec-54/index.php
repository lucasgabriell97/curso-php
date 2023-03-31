<?php

  class Pessoa {
    public $nome = "Lucas Gabriell";
    public $idade;

    function andar($km) {
      echo "A pessoa andou $km metros. <br>";
    }
  }

  $lucas = new Pessoa;

  echo $lucas->nome . "<br>";

  $lucas->idade = 25;
  echo $lucas->idade . "<br>";

  echo "O meu nome é $lucas->nome e tenho $lucas->idade anos. <br>";

  $lucas->andar(9);

?>