<?php

  $arr = [
    [1, 2, 3, 4.5],
    ["JS", "PHP", "C#", "Python"],
    ["Lucas", "Hugo", "Thiago", "Alef"]
  ];

  for($i = 0; $i < count($arr); $i++) {
    echo "Imprimindo array externo: " . ($i + 1) . "<br>";

    for($j = 0; $j < count($arr[$i]); $j++) {
      echo $arr[$i][$j] . "<br>";
    }
  }