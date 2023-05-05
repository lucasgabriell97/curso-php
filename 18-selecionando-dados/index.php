<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  $q = "SELECT * FROM pessoas";

  $result = $conn->query($q);

  $conn->close();

  // Um resultado
  $pessoa = $result->fetch_assoc();
  print_r($pessoa);
  
  // Todos os resultados
  $pessoas = $result->fetch_all();
  print_r($pessoas);