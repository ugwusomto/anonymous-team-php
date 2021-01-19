<?php

// http://localhost/anonymous-team-php/class%20work/dataprocessor/failed.php?=fullnamePlease+Enter+fullname&email=Enter+email&password=Enter+password
echo "<pre>";
print_r($_POST);


if (!empty($_POST["login-form"])) {
    echo "login form<br>";
}

if (!empty($_POST["register-form"])) {
    $errors  = [];
  
    if (empty($_POST["fullname"])) {
        $errors["fullname"] = "Please Enter fullname";
    } else {
        $fullname  = $_POST["fullname"];
    }

    if (empty($_POST["email"])) {
        $errors["email"] = "Enter email";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["password"])) {
        $errors["password"] = "Enter password";
    } else {
        $password = $_POST["password"];
    }
 
    if(empty($errors)){
      // redirect to success page
      header("Location: success.php?name=$fullname");
      exit();
    }else{
      // redirect to errors page
      $errorsToUrl = http_build_query($errors);
      $url = "failed.php?".$errorsToUrl;
      header("Location: $url");
      exit();

    }
}


if (!empty($_POST["contact-form"])) {
    echo "contact form";
}


  // indexed Arrays
  // $names = ["ada","obi","joy"];
  // print_r($names);
  // // associative ARRAYS
  // $studentInfo = ["name"=>"John","age"=>20,"complexion"=>"dark"];
  // print_r($studentInfo);
  // echo "\n";
  // echo $names[1];
  // echo "\n";
  // echo $studentInfo["complexion"];
 
