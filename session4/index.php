<?php 
  $num1 = 50;
  $num2 = 10;
  $modulo = $num1 % $num2;
  // echo $modulo;
  $relation = ($num1 === $num1 );
  // var_dump($relation);

  $andOperation = (($num2 > $num1) && ($num2 == $num1)); // false && false = false
  $andOperation1 = (($num2 < $num1) && ($num2 == $num2)); // false && false = false
  $orOperation = (($num2 > $num1) || ($num2 == $num2)); // false && false = false

  var_dump($orOperation);