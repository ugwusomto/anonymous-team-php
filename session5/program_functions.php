<?php
   function correctNameDetector($fullname){
    $result  = explode(" ",$fullname);
    $name["firstname"] = $result[0];
    $name["lastname"] = $result[1];
    return $name;
}

function validateName($fullname){
    $result = trim($fullname);
    if(str_word_count($result) < 2){
     return false;
    }else{
     return true;
    }
}
