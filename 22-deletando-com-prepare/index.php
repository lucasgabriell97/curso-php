<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  $idade = 24;

  $stmt = $conn->prepare("DELETE FROM pessoas WHERE idade = ?");

  $stmt->bind_param("i", $idade);

  $stmt->execute();

  $conn->close();