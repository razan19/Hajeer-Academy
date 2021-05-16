<?php

session_start();
include('../config.php');
include('../functions.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {

	$email = $_POST['email'];
	$password = $_POST['password'];

	if (!empty($email) && !empty($password)) {

		$query = "select * from admin where email='$email' limit 1";

		$result = mysqli_query($con, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {
				$admin_data = mysqli_fetch_assoc($result);

				if ($admin_data['password'] === $password) {

					$_SESSION['email'] = $admin_data['email'];
					header("Location: ../admin/dashboard.php");
					die;
				}
			}
		} 
			echo "<script> alert('Email or Password is not correct') </script>";
		
	}
}


?>

<!DOCTYPE html>
<html lang="en">


<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />

	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>Login </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="../assets/js/html5shiv.min.js"></script>
	<script src="../assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="../assets/css/assets.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="../assets/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="../assets/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="../assets/css/color/color-1.css">

</head>

<body id="bg">
	<div class="page-wraper">
		<div id="loading-icon-bx"></div>
		<div class="account-form">
			<div class="account-head" style="background-image:url(../assets/images/courses/pic9.jpg);">
				<a href="index.php"><img src="../assets/images/logo-white-2.png" alt=""></a>
			</div>
			<div class="account-form-inner">
				<div class="account-container">
					<div class="heading-bx left">
						<h2 class="title-head">Login</h2>
					</div>
					<form class="contact-bx" method="POST">
						<div class="row placeani">
							<div class="col-lg-12">
								<div class="form-group">
									<div class="input-group">
										<label>Your Email</label>
										<input name="email" type="email" required="" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<div class="input-group">
										<label>Your Password</label>
										<input name="password" type="password" class="form-control" required="">
									</div>
								</div>
							</div>
							<div class="col-lg-12 m-b30">
								<button name="submit" type="submit" value="Login" class="btn button-md">Login</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- External JavaScripts -->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="../assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="../assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="../assets/vendors/magnific-popup/magnific-popup.js"></script>
	<script src="../assets/vendors/counter/waypoints-min.js"></script>
	<script src="../assets/vendors/counter/counterup.min.js"></script>
	<script src="../assets/vendors/imagesloaded/imagesloaded.js"></script>
	<script src="../assets/vendors/masonry/masonry.js"></script>
	<script src="../assets/vendors/masonry/filter.js"></script>
	<script src="../assets/vendors/owl-carousel/owl.carousel.js"></script>
	<script src="../assets/js/functions.js"></script>
	<script src="../assets/js/contact.js"></script>
</body>

</html>