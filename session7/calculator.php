<?php

 require_once "utils.php";

  if (!empty($_POST['submit'])) {
      $errors = [];


      if (!empty($_POST['a'])) {
          $a = intval($_POST['a']);
      } else {
          $errors["a"] = "Enter the value of A";
      }

      if (!empty($_POST['b'])) {
          $b = intval($_POST['b']);
      } else {
          $errors["b"] = "Enter the value of B";
      }



      if (!empty($_POST['c'])) {
          $c = intval($_POST['c']);
      } else {
          $errors["c"] = "Enter the value of C";
      }

      if(empty($errors)){
          $x  = sqrt(pow($b,2)-(4*$a*$c));
          $divisor = (2*$a);
          $root1 =  (-$b + ($x))/$divisor;
          $root2 = (-$b-($x))/$divisor;
          $success = "The root of the equation {$a}x<sup>2</sup> {$b}x {$c} is {$root1} and {$root2}";

      }else{
        // see($errors);
      }


  }

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="assets/bootstrap.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <style>
      body{
        background:#eee;
      }
    </style>
  </head>

  <body>


      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
     
        </div>
      </nav>



    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
        <h1 class="text-center h3">Quadratic Calculator</h1>
        </div>
  
        <div class="col-md-6 mx-auto">
          <form action="calculator.php" method="POST" class="p-5">
             <?php if(!empty($success)){?>
              <p class="text-center text-success alert-success "><?=$success?></p>
             <?php } ?>


            <div class="form-row">
              <label for="a">Enter A</label>
              <input id="a" name="a" plalceholder="Enter a" type="text" class="form-control" value="<?php if(!empty($_POST['a'])){echo  $_POST['a']; } ?>">
              <?php  if(!empty($errors['a'])){ ?>
                 <span class="text-danger mt-1"><?=$errors['a']?></span>
              <?php  } ?>
            </div>

            <div class="form-row">
              <label for="b">Enter B</label>
              <input id="b" name="b" plalceholder="Enter b" type="text" class="form-control"  value="<?php if(!empty($_POST['b'])){echo  $_POST['b']; } ?>">
              <?php  if(!empty($errors['b'])){ ?>
                 <span class="text-danger mt-1"><?=$errors['b']?></span>
              <?php  } ?>
            </div>

            <div class="form-row">
              <label for="c">Enter A</label>
              <input id="c" name="c" plalceholder="Enter c" type="text" class="form-control"  value="<?php if(!empty($_POST['c'])){echo  $_POST['c']; } ?>">
              <?php  if(!empty($errors['c'])){ ?>
                 <span class="text-danger mt-1"><?=$errors['c']?></span>
              <?php  } ?>
            </div>
            
            <button type="submit" name="submit"  value="find-quadratic" class="btn btn-primary mt-4">Find Roots</button>

            <div class="form-row mt-4">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Launch demo modal
        </button>
            </div>
          </form>
        </div>
      </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

  </body>

</html>