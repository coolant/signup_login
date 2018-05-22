<?php session_start(); ?>  

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
	<div class="container main">
		<div class="row">
			<div class="col-md-12">
				<div class="success-area">
					<?php if(isset($_SESSION['user_name'])): ?>
						<?php echo "Hi ". $_SESSION['user_name']." . Welcome to my website"; ?>
					<?php  endif; ?>
					<?php unset($_SESSION['user_name']); ?>
				</div>
				
			</div>
		</div>
	</div>

</body>



<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/simple.js"></script>
<script type="text/javascript" src="assets/js/signup.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".success-area").fadeOut();
		$(".success-area").fadeIn(5000);
			
	})

</script>
</body>
</html>














