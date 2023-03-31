<?php

  class Humano {
    public $maos = 2;
    public $pernas = 2;

    public function falar() {
      echo "Olá eu sou um humano!";
    }
  }

  class Professor extends Humano {
    public $disciplina = "PHP";

    public function ensinando() {
      echo "O professor está dando aula de $this->disciplina <br>";
    }
  }

  $marcos = new Humano;

  echo "$marcos->maos <br>";
  $marcos->falar();

  $joao = new Professor;

  echo "$joao->disciplina <br>";
  $joao->ensinando() . "<br>";

  echo "$joao->pernas <br>";
