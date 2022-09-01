<?php
  $a = array ('a' => 10, 'b' => 12, 'c' => 13);
  $keys = array_keys($a);

  shuffle($a);
  var_dump($a); //Devolverá un array con los índices y valores mezclados de forma aleatoria

  foreach ($keys as $key) {
    echo $key . " - " . $a[$key]; //Devolverá una lista con valores mezclados de forma aleatoria y sus índices originales 
  }
?>