
<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   <meta charset="utf-8">
   <title>LOGIN FORM</title>
   <link rel="stylesheet" href="../css/Login.css">
</head>

<body>
  <div class="center">
    <h1>Login</h1>
	<form id="login" action="../back-ends/login.inc.php" method="POST">
	  <div class= "txt_field">
	    <input type="text" name="email" required>
		<span></span>
		<label>Email Address</label>
	  </div>
	   <div class= "txt_field">
	    <input type="password" name="password" required>
		<span></span>
		<label>Password</label>
	  </div>
	  <input type="submit" value="Login">
	  <div class="signup_link">
	     Don't have an account? <a href="registration.php">Sign_up</a>
	  </div>
	  </form>
  </div>
</body> -->


<!DOCTYPE html>
<html>
    
<head>
	<title> Login </title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" href="../Images/Pre-Z.jpg" type="image/jpg">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../Images/Pre-Z.jpg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
                <form   method="POST"action="../back-ends/login.inc.php">
                    <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="email" required class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" required class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
                            <input type="submit" value="Login"> 
				 	<!-- <button type="button" name="submit" class="btn login_btn">Login</button> -->
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="#" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
                        </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>