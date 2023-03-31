<?php

  class Cachorro {
    public $raca;
    public $cor;
    public $idade;

    function __construct($raca, $cor, $idade) {
      $this->raca = $raca;
      $this->cor = $cor;
      $this->idade = $idade;
    }

    public function exibirAnimal() {
      echo "O cachorro é da raça $this->raca, cor $this->cor e tem $this->idade anos de idade. <br>";
    }
  }

  $bob = new Cachorro("Bull Terrier", "branco", 4);

  $bob->exibirAnimal();
?>