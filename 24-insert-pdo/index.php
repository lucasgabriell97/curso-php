<?php

  $host = "localhost";
  $db = "cursophp";
  $user = "root";
  $pass = "";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

  $stmt = $conn->prepare("INSERT INTO pessoas (nome, idade) VALUES (:nome, :idade)");

  $nome = "Thiago Henrique";
  $idade = 27;

  $stmt->bindParam(":nome", $nome);
  $stmt->bindParam(":idade", $idade);

  $stmt->execute();