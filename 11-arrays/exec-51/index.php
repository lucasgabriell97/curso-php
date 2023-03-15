<?php

  $ranking = [
    "Gabriell" => 200,
    "Felipe" => 58,
    "joão" => 105,
    "Pedro" => 28,
    "Maria" => 147,
    "Joana" => 78
  ];

  arsort($ranking);

?>

<h1>Ranking</h1>
<ol>
  <?php foreach($ranking as $pessoa => $pontuacao): ?>
    <li><?= $pessoa ?> -> <?= $pontuacao ?> pontos</li>
  <?php endforeach; ?>
</ol>