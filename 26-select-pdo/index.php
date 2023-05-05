<?php

  $host = "localhost";
  $db = "cursophp";
  $user = "root";
  $pass = "";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

  $idade = 28;

  $stmt = $conn->prepare("SELECT * FROM pessoas WHERE idade < :idade");

  $stmt->bindParam(":idade", $idade);

  $stmt->execute();

  $data = $stmt->fetch(PDO::FETCH_ASSOC);

  print_r($data);