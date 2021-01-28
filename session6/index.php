<?php

/**
 * This is an indexed Array
 */
$studentNames = array("ada","james","mma","okey","collins");
$statesInNigeria  = ["abia","abuja","kogi","enugu","anambra",12=> "benue"];
$mergedArray = array_merge($studentNames,$statesInNigeria);
sort($mergedArray);
// echo "<pre>";
// print_r($studentNames);
// print_r($statesInNigeria);
// print_r(array_flip($mergedArray));



// accessing an index array by their indexes
// echo "The last student in this class is  : ".$studentNames[4]."<br>";

/**
 * This is an associative array
 */

$customerData = ["name"=>"Jude Somto","age"=>45,"gender"=>"male","complexion"=>"dark","state"=>"Enugu"];

/**
 * Objects
 */
$customerDataObj = (object) ["name"=>"Jame Somto","age"=>45,"gender"=>"male","complexion"=>"dark","state"=>"Enugu"];

// print_r($customerData);
// print_r($customerDataObj);



// $answer = true;
// var_dump($answer);
// echo $customerData["name"];  //Accessing associative array data
// echo $customerDataObj->name; // accessing object data

$allCustomerData = [["name"=>"james meens","age"=>22],["name"=>"iyke Peter","age"=>33],["name"=>"Papa Moses","age"=>66]];

// echo "<pre>";
// print_r($allCustomerData);

// foreach ($allCustomerData as $key => $value) {
//    echo $value["name"]." ".$value["age"]."<br>";        
  
// }

// die();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table{
      width:50%;
      min-height:200px;
      text-align:center;
    }



    .heading{
      height:20px;
    }

    .content{
      height:100px;
    }
     
  </style>
</head>
<body>
      <h1>Customer Table</h1>
      <table border="1">
          <tr class="heading">
             <th>S/N</th>
             <th>Name</th>
             <th>Age</th>
          </tr>
          <?php 
             foreach ($allCustomerData as $key => $value) {
              echo "<tr>
              <td>$key</td>
              <td>".$value["name"]."</td>
              <td>".$value["age"]."</td>
             </tr>";
             }
           ?>

      </table>
</body>
</html>

<!-- Please Brainstorm on this -->
<!-- <?php 
          foreach ($allCustomerData as $key => $value) { ?>
     <tr class="content">
            <td><?=$key+1?></td>
            <td><?=$value["name"]?></td>
            <td><?=$value["age"]?></td>
          </tr>
          <?php } ?> -->
