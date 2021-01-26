<?php

// maths functions
$numbers  = [23,45,666,66];

$max = 0;
for ($counter=0; $counter < count($numbers) ; $counter++) { 
   if($numbers[$counter] > $max){
    $max = $numbers[$counter];
   }
}

echo "Max value : ". max(23,45,666,777,2000,66,77);
echo "<br>Highest value : ". $max;
echo "<br> Our current year ".date("D M Y");



// $highestValue1 = 0;
// $highestValue2 = 0;
// $highestValue = 0;

// if($numbers[0] > $numbers[1]){
//    $highestValue1 = $numbers[0];
// }else{
//  $highestValue1 = $numbers[1];

// }

// if($numbers[2] > $numbers[3]){
//  $highestValue2 = $numbers[2];
// }else{
//  $highestValue2 = $numbers[3];
// }

// if($highestValue2 > $highestValue1){
//   $highestValue = $highestValue2;
// }else{
//  $highestValue = $highestValue1;
// }
