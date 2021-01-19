<?php

$success = true;

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
        <form action="processor.php" method="POST">
          <div class="form-row">
           <label for="fullname">Enter fullname</label>
           <input  type="text" name="fullname" id="fullname">
           <?php 
             if(!empty($success)){ echo "<p>Hello</p>";}
           ?>
          </div>

          <div class="form-row">
           <label for="email">Enter email</label>
           <input  type="email" name="email" id="email">
          </div>

          <div class="form-row">
           <label for="password">Enter password</label>
           <input  type="password" name="password" id="password">
          </div>
          
        
          <div class="form-row">
           <input type="submit" name="register-form" value="register">
          </div>
        </form>
   </div>
</body>
</html>