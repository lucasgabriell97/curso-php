<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  $table = "pessoas";
  $nome = "Lucas Gabriell";
  $idade = 25;

  $q = "INSERT INTO $table (nome, idade) VALUES ('$nome', '$idade')";

  $conn->query($q);

  $conn->close();