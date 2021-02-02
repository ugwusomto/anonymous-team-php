<?php 
require_once "utils/Db.php";
require_once "utils/functions.php";

if(!empty($_POST["register"])){
  $errors = [];
  $formData = []; 

  if(!empty($_POST["fullname"])){
    $formData["fullname"] = sanitize($_POST["fullname"],"lower");
  }else{
    $errors["fullname"] = "Please enter fullname";
  }

  if(!empty($_POST["email"])){
    $formData["email"] = sanitize($_POST["email"],"lower");
  }else{
    $errors["email"] = "Please enter email";
  }

  if(!empty($_POST["password"])){
    $password = sanitize($_POST["password"]);
    $formData["password"] = sha1($password);
  }else{
    $errors["password"] = "Please enter password";
  }

  if(empty($errors)){
    $result = addUser($formData);
    if($result){
      $success = "User Successfully added";
      header("Refresh:3; url=login.php");
    }else{
      $error = "Somthing went wrong";
    }
  }




}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Register</title>
</head>
<body>
     <div class="container">
         
        <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
              <form method="POST" class="p-5" autocomplete="off" action="index.php" >
                <div class="form-row">
                <?php if(!empty($success)){ ?>
                      <span class="text-success text-center "><?=$success;?></span>
                      <?php } ?>
                </div>

                <div class="form-row">
                <?php if(!empty($error)){ ?>
                      <span class="text-danger text-center "><?=$error;?></span>
                      <?php } ?>
                </div>
                <div class="form-row mt-5">
                      <label for="Fullname">Fullname</label>
                      <input name="fullname" type="text" class="form-control" placeholder="Enter Fullname" value="<?php if(!empty($_POST["fullname"])){echo $_POST["fullname"];} ?>">
                      <?php if(!empty($errors["fullname"])){ ?>
                      <span class="text-danger"><?=$errors["fullname"];?></span>
                      <?php } ?>
                  </div>

                  <div class="form-row mt-5">
                      <label for="email">Email</label>
                      <input name="email" type="email" class="form-control" placeholder="Enter Email" value="<?php if(!empty($_POST["email"])){echo $_POST["email"];} ?>">
                      <?php if(!empty($errors["email"])){ ?>
                      <span class="text-danger"><?=$errors["email"];?></span>
                      <?php } ?>
                  </div>

                  <div class="form-row mt-5">
                      <label for="password">password</label>
                      <input  autocomplete="false"  type="password" name="password" class="form-control" placeholder="Enter password" value="<?php if(!empty($_POST["password"])){echo $_POST["password"];} ?>">
                      <?php if(!empty($errors["password"])){ ?>
                      <span class="text-danger"><?=$errors["password"];?></span>
                      <?php } ?>
                  </div>

                  <div class="form-row mt-5">
                      <input type="submit" name="register" class="form-control btn btn-success w-25" value="Register">
                  </div>
                </form>
              </div>
              <div class="col-md-3"></div>
        </div>

     </div>

</body>
</html>

