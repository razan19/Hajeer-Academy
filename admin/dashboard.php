<?php

	session_start();
	include('../config.php');
	include('../functions.php');

	$admin_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">


<head>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
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
	<title>Dashboard </title>

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
				<h4 class="breadcrumb-title">Dashboard</h4>
			</div>
			<div class="row">
				<div class="col-12  m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>New Students</h4>
						</div>
						<div class="widget-inner">
							<div class="row">
								<div class="col-12 m-b10">
									<input type="text" id="myInput" onkeyup="myFunction()" class="form-control"
										placeholder="Search Students">
									<script>
										$(document).ready(function () {
											$("#myInput").on("keyup", function () {
												var value = $(this).val().toLowerCase();
												$("tbody tr").filter(function () {
													$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
												});
											});
										});
									</script>
								</div>
								<div class="table-responsive col-12">
									<table id="newStdTable" class="table table-striped table-bordered table-sm "
										cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>#ID</th>
												<th>Full Name</th>
												<th>Phone</th>
												<th>Birthday</th>
												<th>Course</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Tiger</td>
												<td>Nixon</td>
												<td>System Architect</td>
												<td>Edinburgh</td>
												<td>61</td>
												<td>
													<span class="orders-btn">
														<a href="#" class="btn button-sm green"
														style="font-size: small;">Accept</a>
													</span>
												</td>
											</tr>
											<tr>
												<td>Garrett</td>
												<td>Winters</td>
												<td>Accountant</td>
												<td>Tokyo</td>
												<td>63</td>
												<td>
													<span class="orders-btn">
														<a href="#" class="btn button-sm green"
														style="font-size: small;">Accept</a>
													</span>
												</td>
											</tr>
											<tr>
												<td>Ashton</td>
												<td>Cox</td>
												<td>Junior Technical Author</td>
												<td>San Francisco</td>
												<td>66</td>
												<td>
													<span class="orders-btn">
														<a href="#" class="btn button-sm green"
														style="font-size: small;">Accept</a>
													</span>
												</td>
											</tr>
											<tr>
												<td>Brielle</td>
												<td>Williamson</td>
												<td>Integration Specialist</td>
												<td>New York</td>
												<td>61</td>
												<td>
													<span class="orders-btn">
														<a href="#" class="btn button-sm green"
														style="font-size: small;">Accept</a>
													</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>
				</div>
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


</html>