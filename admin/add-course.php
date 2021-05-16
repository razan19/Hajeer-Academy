<?php

	session_start();
	include('../config.php');
	include('../functions.php');

	$admin_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/add-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />


	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>Manage Courses </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/calendar/fullcalendar.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">

</head>

<body class="ttr-opened-sidebar ttr-pinned-sidebar">

	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<div class="ttr-logo-box">
				<div>
					<a href="index.php" class="ttr-logo">
						<img class="ttr-logo-mobile" alt="" src="../assets/images/logo-white.png" width="160"
							height="160">
						<img class="ttr-logo-desktop" alt="" src="../assets/images/logo-white.png" width="160"
							height="27">
					</a>
				</div>
			</div>
			<!--logo end -->
			<div class="ttr-header-menu">
				<!-- header left menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="../en/index.php" class="ttr-material-button ttr-submenu-toggle">HOME</a>
					</li>
				</ul>
				<!-- header left menu end -->
			</div>
		</div>
	</header>
	<!-- header end -->
	<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul>
					<li>
						<a href="dashboard.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-home"></i></span>
							<span class="ttr-label">Dashborad</span>
						</a>
					</li>
					<li>
                        <a href="categories.php" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-list"></i></span>
                            <span class="ttr-label">Categories</span>
                        </a>
                    </li>
					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-book"></i></span>
							<span class="ttr-label">Courses</span>
							<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
						</a>
						<ul>
							<li>
								<a href="add-course.php" class="ttr-material-button"><span class="ttr-label">Add
										Course</span></a>
							</li>
							<li>
								<a href="mng-course.php" class="ttr-material-button"><span class="ttr-label">Manage
										Courses</span></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="students.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-user"></i></span>
							<span class="ttr-label">Students</span>
						</a>
					</li>
					<li class="ttr-seperate"></li>

					<li>
						<a href="logout.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="fa fa-sign-out"></i></span>
							<span class="ttr-label">Logout</span>
						</a>
					</li>
					
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Courses</h4>
			</div>
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Add New Course</h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>1. Basic info</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Course title</label>
										<div>
											<input class="form-control" type="text" value="">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Course title</label>
										<div>
											<input class="form-control" type="text" value="">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Course start</label>
										<div>
											<input class="form-control" type="text" value="">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Course expire</label>
										<div>
											<input class="form-control" type="text" value="">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Teacher name</label>
										<div>
											<input class="form-control" type="text" value="">
										</div>
									</div>
									<div class="seperator"></div>

									<div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>2. Description</h3>
										</div>
									</div>
									<div class="form-group col-12">
										<label class="col-form-label">Course description</label>
										<div>
											<textarea class="form-control"> </textarea>
										</div>
									</div>
									<div class="col-12 m-t20">
										<div class="ml-auto">
											<h3 class="m-form__section">3. Add Item</h3>
										</div>
									</div>
									<div class="col-12">
										<table id="item-add" style="width:100%;">
											<tr class="list-item">
												<td>
													<div class="row">
														<div class="col-md-4">
															<label class="col-form-label">Course Name</label>
															<div>
																<input class="form-control" type="text" value="">
															</div>
														</div>
														<div class="col-md-3">
															<label class="col-form-label">Course Category</label>
															<div>
																<input class="form-control" type="text" value="">
															</div>
														</div>
														<div class="col-md-3">
															<label class="col-form-label">Course Category</label>
															<div>
																<input class="form-control" type="text" value="">
															</div>
														</div>
														<div class="col-md-2">
															<label class="col-form-label">Close</label>
															<div class="form-group">
																<a class="delete" href="#"><i
																		class="fa fa-close"></i></a>
															</div>
														</div>
													</div>
												</td>
											</tr>
										</table>
									</div>
									<div class="col-12">
										<button type="button" class="btn-secondry add-item m-r5"><i
												class="fa fa-fw fa-plus-circle"></i>Add Item</button>
										<button type="reset" class="btn">Save changes</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

	<!-- External JavaScripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
	<script src="assets/vendors/counter/waypoints-min.js"></script>
	<script src="assets/vendors/counter/counterup.min.js"></script>
	<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
	<script src="assets/vendors/masonry/masonry.js"></script>
	<script src="assets/vendors/masonry/filter.js"></script>
	<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
	<script src='assets/vendors/scroll/scrollbar.min.js'></script>
	<script src="assets/js/functions.js"></script>
	<script src="assets/vendors/chart/chart.min.js"></script>
	<script src="assets/js/admin.js"></script>
	<script>
		// Pricing add
		function newMenuItem() {
			var newElem = $('tr.list-item').first().clone();
			newElem.find('input').val('');
			newElem.appendTo('table#item-add');
		}
		if ($("table#item-add").is('*')) {
			$('.add-item').on('click', function (e) {
				e.preventDefault();
				newMenuItem();
			});
			$(document).on("click", "#item-add .delete", function (e) {
				e.preventDefault();
				$(this).parent().parent().parent().parent().remove();
			});
		}
	</script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/add-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

</html>