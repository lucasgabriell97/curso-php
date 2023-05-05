<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  $nome = "Hugo César";
  $idade = 24;

  $stmt = $conn->prepare("INSERT INTO pessoas (nome, idade) VALUES (?, ?)");

  $stmt->bind_param("si", $nome, $idade); // d = double

  $stmt->execute();