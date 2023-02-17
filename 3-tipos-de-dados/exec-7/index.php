<?php

  $pessoa = [
    'nome' => 'Lucas',
    'idade' => 23,
    'sexo' => 'Masculino',
    'nacionalidade' => 'Brasileiro',
    'anoNascimento' => 1997
  ];

  $nome = $pessoa['nome'];
  $idade = $pessoa['idade'];

  if($idade >= 18) {
    echo "$nome tem $idade anos e é maior de idade!";
  }

?>