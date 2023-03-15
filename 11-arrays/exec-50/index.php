<?php

  $pessoas = [
    'Lucas' => 25,
    'Bernardo' => 2,
    'Ieda' => 61,
    'Maysa' => 31
  ];

?>

<table border="1">
  <tr>
    <th>Nome</th>
    <th>Idade</th>
  </tr>
  <?php foreach($pessoas as $nome => $idade): ?>
    <tr>
      <td><?= $nome; ?></td>
      <td><?= $idade; ?></td>
    </tr>
  <?php endforeach; ?>
</table>