<?php

  $host = "localhost";
  $db = "cursophp";
  $user = "root";
  $pass = "";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

  $stmt = $conn->prepare("UPDATE pessoas SET idade = :idade WHERE nome = :nome");

  $idade = 31;
  $nome = "Lucas Gabriell"; 

  $stmt->bindParam(":idade", $idade);
  $stmt->bindParam(":nome", $nome);

  $stmt->execute();