<?php


 if (!empty($_POST["register-form"])) {
     $errors = [];
     $formData = [];
            
     // check for name
     if (!empty($_POST["name"])) {
         $formData["name"] = $_POST["name"];
     } else {
         $errors["name"] = "Enter fullname";
     }

     // check for password
     if (!empty($_POST["password"])) {
									$formData["password"] = $_POST["password"];
									if(strlen($formData["password"]) < 7){
										$errors["password"] = "Password must be at least 7 characters";
									}
     } else {
         $errors["password"] = "Enter password";
     }

     // check foremail
     if (!empty($_POST["email"])) {
         $email = $_POST["email"];
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $errors["email"] = "Invalid email address";
         }
     } else {
         $errors["email"] = "Please enter email";
     }

     // check forservice
     if (!empty($_POST["service"])) {
         $service = $_POST["service"];
     } else {
         $errors["service"] = "Please select service";
     }

     if (empty($errors)) {
         $success  = "Your registeration was successfull";
     } else {
     }
                    
     // echo "<pre>";
                // print_r($_POST);
                // print_r($errors);
 }


?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Contact V4</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<!--===============================================================================================-->
	</head>

	<body>


		<div class="container-contact100">
			<div class="wrap-contact100">
				<form
					action="<?=$_SERVER["PHP_SELF"]?>"
					method="POST" class="contact100-form validate-form">
					<span class="contact100-form-title">
						Say Hello!
					</span>
     
					<?php if(!empty($success)){ ?>
					<p class="text-center text-success"><?=$success?></p>
					<?php } ?>

					<?php if (!empty($errors["name"])) { ?>
					<p class="text-danger"><?=$errors["name"]?>
					</p>
					<?php } ?>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Your Name</span>
						<input class="input100" type="text" name="name" placeholder="Enter your name" value="<?php
                       if (!empty($_POST["name"])) {
                           echo $_POST["name"];
                       }?>">
						<span class="focus-input100"></span>
					</div>

					<?php if (!empty($errors["email"])) { ?>
					<p class="text-danger"><?=$errors["email"]?>
					</p>
					<?php } ?>
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter your email addess"
							value="<?php if (!empty($_POST["email"])) {
                           echo $_POST["email"];
                       }?>">
						<span class="focus-input100"></span>
					</div>

					<?php if (!empty($errors["password"])) { ?>
					<p class="text-danger"><?=$errors["password"]?>
					</p>
					<?php } ?>
					<div class="wrap-input100 validate-input" data-validate="Valid password is required: ex@abc.xyz">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter your password addess"
							value="<?php if (!empty($_POST["password"])) {
                           echo $_POST["password"];
                       }?>">
						<span class="focus-input100"></span>
					</div>

					<?php if (!empty($errors["service"])) { ?>
					<p class="text-danger"><?=$errors["service"]?>
					</p>
					<?php } ?>
					<div class="wrap-input100 input100-select">
						<span class="label-input100">Needed Services</span>
						<div>
							<select class="selection-2" name="service">
								<option <?php if (!empty($_POST["service"]) && $_POST["service"] == "") {
                           echo "selected";
                       } ?>
									value="">Choose Services</option>
								<option <?php if (!empty($_POST["service"]) && $_POST["service"] == "online") {
                           echo "selected";
                       } ?>
									value="online">Online Store</option>
								<option <?php if (!empty($_POST["service"]) && $_POST["service"] == "ecommerce") {
                           echo "selected";
                       } ?>
									value="ecommerce">eCommerce Bussiness</option>
								<option <?php if (!empty($_POST["service"]) && $_POST["service"] == "ui/ux") {
                           echo "selected";
                       } ?>
									value="ui/ux">UI/UX Design</option>
								<option <?php if (!empty($_POST["service"]) && $_POST["service"] == "offline") {
                           echo "selected";
                       } ?>
									value="offline">Offline Services</option>
							</select>
						</div>
						<span class="focus-input100"></span>
					</div>



					<div class="container-contact100-form-btn">
						<div class="wrap-contact100-form-btn">
							<div class="contact100-form-bgbtn"></div>
							<button value="register" type="submit" name="register-form" class="contact100-form-btn">
								<span>
									Submit
									<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
								</span>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>



		<div id="dropDownSelect1"></div>

		<!--===============================================================================================-->
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/select2/select2.min.js"></script>
		<script>
			$(".selection-2").select2({
				minimumResultsForSearch: 20,
				dropdownParent: $('#dropDownSelect1')
			});
		</script>
		<!--===============================================================================================-->
		<script src="vendor/daterangepicker/moment.min.js"></script>
		<script src="vendor/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/countdowntime/countdowntime.js"></script>
		<!--===============================================================================================-->
		<script src="js/main.js"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'UA-23581568-13');
		</script>

	</body>

</html>