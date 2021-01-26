<?php 
  require_once "program_functions.php";

   if(!empty($_POST["submit"])){
      
      if(validateName($_POST["fullname"])){
       $nameArray = correctNameDetector($_POST["fullname"]);
      }else{
        $errors = "Please enter a  valid fullname";
      }

      
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
        
        <?php  if(!empty($nameArray)){ ?>
        <h1>Welcome <?=$nameArray["lastname"];?></h1>
        <?php }else if(!empty($errors)){ ?>
         <h1 style="color:red;"> <?=$errors;?></h1>

        <?php } ?>

     <form method="POST" action="functions.php">
          <input name="fullname" type="text" placeholder="Enter fullname" >
          <br><br>
          <input type="submit" name="submit" value="submit">
     </form>
</body>
</html>