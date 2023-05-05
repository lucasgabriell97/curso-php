<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  $idade = 24;

  $stmt = $conn->prepare("UPDATE pessoas SET nome = ? WHERE idade = ?");

  $nome = "Hugo Costa";

  $stmt->bind_param("si", $nome, $idade);

  $stmt->execute();

  if($stmt->error) {
    echo "Erro: " . $stmt->error;
  }