<?php

session_start();
include('../config.php');

if (isset($_POST['register'])) {
	$std_name = $_POST['std_name'];
	$std_phone = $_POST['std_phone'];
	$std_birthday = $_POST['std_birthday'];
	$std_status = 'NEW_STD';
	$std_course_id = 0;

	$query_insert = "insert into students(name, phone, birthday, course_id, status) 
	values('$std_name', '$std_phone', '$std_birthday', '$std_course_id','$std_status')";

	$result_insert = mysqli_query($con, $query_insert);

	if ($result_insert) {
		$_SESSION['registered'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
								The registration was successful. We will contact you as soon as possible
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                                </div>";

		header("Location: courses-details.php");
		die;
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
	<meta name="description" content="Hajeer Academy" />

	<!-- OG -->
	<meta property="og:title" content="Hajeer Academy" />
	<meta property="og:description" content="Hajeer Academy" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>Course Details</title>


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
		<!-- Header Top ==== -->
		<header class="header rs-nav header-transparent">
			<div class="top-bar">
				<div class="container">
					<div class="row d-flex justify-content-between">
						<div class="topbar-left">
							<ul>
								<li><a href="contact.php"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
								<li><a href="javascript:;"><i class="fa fa-envelope-o"></i>Support@website.com</a></li>
							</ul>
						</div>
						<div class="topbar-right">
							<ul>
								<li class="header-lang-bx"><a href="../ar/courses-details.html"><i class="flag flag-uk"></i>
										العربية</a></li>
								<li><a href="login.php">Login</a></li>
								<li><a href="login.php">Register</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sticky-header navbar-expand-lg">
				<div class="menu-bar clearfix">
					<div class="container clearfix">
						<!-- Header Logo ==== -->
						<div class="menu-logo">
							<a href="index.php"><img src="../assets/images/logo-white.png" alt=""></a>
						</div>
						<!-- Mobile Nav Button ==== -->
						<button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- Author Nav ==== -->
						<div class="secondary-menu">
							<div class="secondary-inner">
								<ul>
									<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
									<li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a>
									</li>
									<li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
									<!-- Search Button ==== -->
									<li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
								</ul>
							</div>
						</div>
						<!-- Search Box ==== -->
						<div class="nav-search-bar">
							<form action="#">
								<input name="search" value="" type="text" class="form-control" placeholder="Type to search">
								<span><i class="ti-search"></i></span>
							</form>
							<span id="search-remove"><i class="ti-close"></i></span>
						</div>
						<!-- Navigation Menu ==== -->
						<div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
							<div class="menu-logo">
								<a href="index.php"><img src="../assets/images/logo-black.png" alt=""></a>
							</div>
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home </a></li>
								<li class="active"><a href="courses.php">Courses </a></li>
								<li><a href="get-certified.php">Get Certified</a></li>
								<li><a href="contact.php">Contact US </a></li>
							</ul>
							<div class="nav-social-link">
								<a href="javascript:;"><i class="fa fa-facebook"></i></a>
								<a href="javascript:;"><i class="fa fa-google-plus"></i></a>
								<a href="javascript:;"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<!-- Navigation Menu END ==== -->
					</div>
				</div>
			</div>
		</header>
		<!-- header END ==== -->
		<!-- Content -->
		<div class="page-content bg-white">
			<!-- inner page banner -->
			<div class="page-banner ovbl-dark" style="background-image:url(../assets/images/banner/banner2.jpg);">
				<div class="container">
					<div class="page-banner-entry">
						<h1 class="text-white">Course Details</h1>
					</div>
				</div>
			</div>
			<!-- Breadcrumb row -->
			<div class="breadcrumb-row">
				<div class="container">
					<ul class="list-inline">
						<li><a href="index.php">Home</a></li>
						<li><a href="courses.php">Courses</a></li>
						<li>Courses Details</li>
					</ul>
				</div>
			</div>
			<!-- Breadcrumb row END -->
			<!-- inner page banner END -->
			<div class="content-block">
				<!-- About Us -->
				<div class="section-area section-sp4">
					<div class="container">
						<div class="row">
							<div class="ttr-post-info col-lg-8 col-md-8 col-sm-12">
								<div class="ttr-post-title ">
									<h2 class="post-title">Web Design</h2>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="course-price">
									<del>190 JD</del>
									<h2 class="price">120 JD</h2>
								</div>
							</div>
						</div>
						<div class="row d-flex flex-row">
							<div class="col-lg-8 col-md-8 col-sm-12">
								<div class="courses-post">
									<div class="ttr-post-media media-effect">
										<a href="#"><img src="../assets/images/courses/pic1.jpg" alt=""></a>
									</div>
								</div>
								<div class="courese-overview m-t10" id="overview">
									<div class="row">
										<div class="col-md-12 col-lg-12">
											<h5 class="m-b5">Course Description</h5>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting
												industry. Lorem Ipsum has been the industry’s standard dummy text ever
												since the 1500s, when an unknown printer took a galley of type and
												scrambled it to make a type specimen book. It has survived not only five
												centuries, but also the leap into electronic typesetting, remaining
												essentially unchanged.</p>
										</div>
										<div class="col-md-12 col-lg-12">
											<h5 class="m-b5">Basic Information</h5>
											<ul class="course-features">
												<li><i class="ti-book"></i> <span class="label">Category</span> <span class="value">Programming</span></li>
												<li><i class="ti-time"></i> <span class="label">Duration</span> <span class="value">60 hours</span></li>
												<li><i class="ti-stats-up"></i> <span class="label">Skill level</span>
													<span class="value">Beginner</span>
												</li>
												<li><i class="ti-time"></i> <span class="label">Course Times</span>
													<span class="value">Every Sunday from 11:00am To 02:00pm</span>
												</li>
												<li><i class="ti-user"></i> <span class="label">Instructor</span>
													<span class="value">Razan</span>
												</li>
												<li><i class="ti-timer"></i> <span class="label" style="color: red;">Last date to Registration</span>
													<span class="value" style="color: red;">27/6/2021</span>
												</li>
												<li><i class="ti-alarm-clock"></i> <span class="label" style="color: green;">Course start date</span>
													<span class="value" style="color: green;">26/8/2021</span>
												</li>
											</ul>
										</div>
										<div class="col-md-12 col-lg-12">
											<h5>Curriculum</h5>
											<ul class="curriculum-list">
												<li>
													<ul>
														<li>
															<div class="curriculum-list-box">
																<span>Section 1.</span> Introduction to UI Design
															</div>
															<span>10 Hours</span>
														</li>
														<li>
															<div class="curriculum-list-box">
																<span>Section 2.</span> User Research and Design
															</div>
															<span>30 Hours</span>
														</li>
														<li>
															<div class="curriculum-list-box">
																<span>Section 3.</span> Evaluating User Interfaces
															</div>
															<span>20 Hours</span>
														</li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 m-b30">
								<div class="course-detail-bx">
									<h4 class="m-b15" style="text-align: center;">Registration</h4>
									<div class="widget-inner">
										<?php
										if (isset($_SESSION['registered'])) {
											echo $_SESSION['registered'];
											unset($_SESSION['registered']);
										}
										?>
										<form class="edit-profile m-b30" method="POST">
											<div class="row">
												<div class="form-group col-12">
													<label class="col-form-label">Full Name</label>
													<div>
														<input class="form-control" name="std_name" type="name" value="">
													</div>
												</div>
												<div class="form-group col-12">
													<label class="col-form-label">Phone Number</label>
													<div>
														<input class="form-control" name="std_phone" type="phone" value="">
													</div>
												</div>
												<div class="form-group col-12">
													<label class="col-form-label">Birthday</label>
													<div>
														<input class="form-control" name="std_birthday" type="date" value="">
													</div>
												</div>
												<div class="course-buy-now text-center col-12 m-t10 m-b10">
													<button type="submit" name="register" class="btn radius-xl text-uppercase" style="width: 100%;">Register</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- contact area END -->
		</div>
		<!-- Content END-->
		<!-- Footer ==== -->
		<footer>
			<div class="footer-top">
				<div class="pt-exebar">
					<div class="container">
						<div class="d-flex align-items-stretch">
							<div class="pt-logo mr-auto">
								<a href="index.php"><img src="../assets/images/logo-white.png" alt="" width="290" height="110" /></a>
							</div>
							<div class="pt-social-link">
								<ul class="list-inline m-a0">
									<li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="section-area section-sp4">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="tp-caption Newspaper-Title   tp-resizeme" style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal; font-size: 4vw; color: white;">
									Join Our Happy Students​ Today!
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">Copyright © 2021 Hajeer Academy</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer END ==== -->
		<button class="back-to-top fa fa-chevron-up"></button>
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
	<script src="../assets/js/jquery.scroller.js"></script>
	<script src="../assets/js/functions.js"></script>
	<script src="../assets/js/contact.js"></script>
</body>

</html>