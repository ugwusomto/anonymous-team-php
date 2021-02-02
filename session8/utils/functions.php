<?php
/**
  @Desc This is a sanitization function
 */
 function sanitize($data,$case = null){
   $result = trim($data);
   $result = htmlspecialchars($result);
   if($case == "lower"){
     $result = strtolower($result);
   }else if($case == "upper"){
     $result = strtoupper($result);
   }
   return $result;

 }
 

 function see($data,$die = false){
     echo "<pre>";
     print_r($data);
     if($die){
       die();
     }
 }

 function addUser($formData){
   extract($formData);
   global $conn;

   $sql = "INSERT INTO `users`(`fullname`,`email`,`password`) VALUES('$fullname','$email','$password')";
   $result  = $conn->query($sql);
   if($result){
     return true;
   }else{
     return false;
   }
   
 }


