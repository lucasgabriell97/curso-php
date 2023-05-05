<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  $idade = 24;

  $stmt = $conn->prepare("SELECT * FROM pessoas WHERE idade > ?");

  $stmt->bind_param("i", $idade);

  $stmt->execute();

  $result = $stmt->get_result();

  $data = $result->fetch_all(); // fetch_row - apenas 1

  print_r($data);