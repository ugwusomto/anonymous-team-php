
<?php

if(!empty($_POST)){
   $error = false;

   if(empty($_POST["fullname"])){
    $error = true;
   }else{
     $fullname = $_POST["fullname"];
   }

   if(empty($_POST["email"])){
    $error = true;
   }else{
     $email = $_POST["email"];
   }

   if($error){
     echo "failed result";

     die();
   }else{
    header("Location: success.php");


    die();
   }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>WORKING WITH FORM METHODS</title>
 <link rel="stylesheet" href="css/styles.css">
</head>

<body>

   <div class="container">
   <h1>Register form</h1>
        <form action="" method="POST">
          <div class="form-row">
           <label for="fullname">Enter fullname</label>
           <input  type="text" name="fullname" id="fullname">
          </div>

          <div class="form-row">
           <label for="email">Enter email</label>
           <input required type="email" name="email" id="email">
          </div>

          <div class="form-row">
           <label for="password">Enter password</label>
           <input required type="password" name="password" id="password">
          </div>

          <input type="hidden" name="id" value="1">

          <div class="form-row">
           <input type="submit" name="register" value="register">
          </div>
        </form>
   </div>
</body>
</html>