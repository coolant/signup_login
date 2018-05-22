<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title>Signup & Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<?php include 'parts/nav.php'; ?> 
	<!--i have cut NAV menu and created write it in nav.php to reuse in all pages. kind of wordpress style -->

	<div class="container">
		<div class="row">
			<div class="col-md-8 content">
				<h1>It is free</h1><hr>
				<p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>

			</div> <!-- col md8 -->
			<div class="col-md-4 content">
				<div class="signup-cover">
				<div class="card">
					<div class="card-header">
						<div class="row">

							<div class="col-md-9">
								<h3 class="form-heading">Sign up</h3>
								<p>Account creating is free</p>
							</div><!--col-->

							<div class="col-md-3 text-right">
								<i class="fas fa-pen-square fa-3x"></i>
							</div><!--col-->

						</div><!--row-->
					</div><!--card-header-->
					<div class="card-body">
						<form id="signup_submit">
							<div class="form-group show-progress">
								

							</div>



							<div class="form-group">
								<input type="text" id="name" name="name" class="form-control" placeholder="Enter Name..">
								<div class="name-error error"></div>
							</div><!--form-group-->
							<div class="form-group">
								<input type="email" id="email" name="email" class="form-control" placeholder="Enter Email..">
								<div class="email-error error"></div>
							</div><!--form-group-->
							<div class="form-group">
								<input type="password" id="password" name="password" class="form-control" placeholder="Choose Password..">
								<div class="password-error error"></div>
							</div><!--form-group-->
							<div class="form-group">
								<input type="password" id="confirm" name="confirm" class="form-control" placeholder="Confirm Password..">
								<div class="confirm-error error"></div>
							</div><!--form-group-->
							<div class="form-group">
								<button type="button" id="submit" class="btn btn-success btn-block form-btn">Create Account</button>
								<div class="button-error error"></div>
							</div><!--form-group-->
							<div class="form-group">
								<a href="#" id="login">Already have an account?</a>
							</div><!--form-group-->

						</form> <!-- form -->						
					</div><!--card-body-->
				</div> <!-- card -->
			</div><!--signup cover-->

				<div class="login-cover">
					<div class="card">
						<div class="card-header">
							<div class="row">

								<div class="col-md-9">
									<h3 class="form-heading">Login</h3>
									<p>Enter Email and Password</p>
								</div><!--col-->

								<div class="col-md-3 text-right">
									<i class="fas fa-lock fa-3x"></i>
								</div><!--col-->

							</div><!--row-->
						</div><!--card-header-->
						<div class="card-body">
							<form>
								
								<div class="form-group">
									<input type="email" id="Email" class="form-control" placeholder="Enter Email..">
								</div><!--form-group-->
								<div class="form-group">
									<input type="password" id="Confirm" class="form-control" placeholder="Choose Password..">
								</div><!--form-group-->
								
								<div class="form-group">
									<button type="button" id="Login" class="btn btn-success btn-block form-btn">Login</button>
								</div><!--form-group-->
								<div class="form-group">
									<a href="#" id="signup">Create a New Account?</a>
								</div><!--form-group-->
							</form> <!-- form -->						
						</div><!--card-body-->
					</div> <!-- card -->
						
				</div> <!--login-cover-->
			</div><!-- col md4-->
		</div><!-- row -->
	</div><!-- container -->

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/simple.js"></script>
<script type="text/javascript" src="assets/js/signup.js"></script>
</body>
</html>