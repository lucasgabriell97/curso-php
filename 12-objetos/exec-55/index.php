<?php

  class Carro {
    public $cor;
    public $rodas;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($vel) {
      return $this->velocidadeMaxima = $vel;
    }

    function getVelocidadeMaxima() {
      echo "A velocidade máxima deste carro é: $this->velocidadeMaxima km/h <br>";
    }

  }

  $bmw = new Carro;

  $bmw->cor = "Preto";
  $bmw->rodas = 4;

  $bmw->setVelocidadeMaxima(200);

  $bmw->getVelocidadeMaxima();