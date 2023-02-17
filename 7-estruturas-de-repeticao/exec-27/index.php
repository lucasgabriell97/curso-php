<?php

  $arr = [25, 11.8, true, "Flamengo", [1, 2], "Cebola", "Gato", 102, 10, "Faca"];

  $x = count($arr);
  $y = 0;

  while($y < $x) {
    if(is_string($arr[$y])) {
      echo $arr[$y] . "<br>";
    }

    $y++;
  }

?>