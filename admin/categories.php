<?php

session_start();
include('../config.php');
include('../functions.php');

$admin_data = check_login($con);

$query_select = "select * from category";
$result_select = mysqli_query($con, $query_select);


if (isset($_POST['add_category'])) {
    $ca_name_en = $_POST['ca_name_en'];
    $ca_name_ar = $_POST['ca_name_ar'];

    $query_insert = "insert into category(name_in_en, name_in_ar) values('$ca_name_en', '$ca_name_ar')";

    $result_insert = mysqli_query($con, $query_insert);

    if ($result_insert) {
        $_SESSION['status'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                Category added successfully
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                                </div>";

        header("Location: categories.php");
        die;
    }
}

if (isset($_GET['id'])) {

    $query_delete = "delete from category where category_id='" . $_GET['id'] . "'";

    $result_delete = mysqli_query($con, $query_delete);

    if ($result_delete) {
        $_SESSION['deleted'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                Category deleted successfully
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                                </div>";

        header("Location: categories.php");
        die;
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/add-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

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
    <title>Add Category</title>

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
                        <img class="ttr-logo-mobile" alt="" src="../assets/images/logo-white.png" width="160" height="160">
                        <img class="ttr-logo-desktop" alt="" src="../assets/images/logo-white.png" width="160" height="27">
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
                <h4 class="breadcrumb-title">Categories</h4>
            </div>
            <div class="row">
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Add New Category</h4>
                        </div>
                        <div class="widget-inner">
                            <form class="edit-profile m-b10" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <table id="item-add" style="width:100%;">
                                            <tr class="list-item">
                                                <td>
                                                    <div class="row" style="justify-content: center">
                                                        <label class="col-form-label m-a10">Name in English</label>
                                                        <div class="col-lg-4 col-sm-12 m-a10">
                                                            <input class="form-control" name="ca_name_en" required type="text" value="">
                                                        </div>
                                                        <label class="col-form-label m-a10">Name in Arabic</label>
                                                        <div class="col-lg-4 col-sm-12 m-a10">
                                                            <input class="form-control" name="ca_name_ar" required type="text" value="">
                                                        </div>
                                                        <div class="col-lg-3 col-sm-12 m-a10">
                                                            <button type="submit" name="add_category" class="btn-secondry form-control"><i class="fa fa-fw fa-plus-circle"></i>Add
                                                                Category</button>
                                                        </div>
                                                    </div>

                                                    <?php
                                                    if (isset($_SESSION['status'])) {
                                                        echo $_SESSION['status'];
                                                        unset($_SESSION['status']);
                                                    }
                                                    ?>

                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12  m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>All Categories</h4>
                        </div>
                        <div class="widget-inner">

                            <?php
                            if (isset($_SESSION['deleted'])) {
                                echo $_SESSION['deleted'];
                                unset($_SESSION['deleted']);
                            }
                            ?>
                            
                            <div class="row">
                                <div class="col-12 m-b10">
                                    <input type="text" id="category" onkeyup="myFunction()" class="form-control" placeholder="Search Category">
                                    <script>
                                        $(document).ready(function() {
                                            $("#category").on("keyup", function() {
                                                var value = $(this).val().toLowerCase();
                                                $("#tCategory tr").filter(function() {
                                                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                                });
                                            });
                                        });
                                    </script>
                                </div>
                                <div class="table-responsive col-12">
                                    <table id="newStdTable" class="table table-striped table-bordered table-sm " cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name In English</th>
                                                <th>Name In Arabic</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tCategory">
                                            <?php
                                            while ($rows = mysqli_fetch_array($result_select)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $rows['name_in_en']; ?></td>
                                                    <td><?php echo $rows['name_in_ar']; ?></td>
                                                    <td>
                                                        <span class="orders-btn">
                                                            <a href="categories.php?id=<?php echo $rows['category_id']; ?>" class="btn button-sm red" style="font-size: small;">Delete
                                                            </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            <tr>
                                                <td>Tiger</td>
                                                <td>Tiger</td>
                                                <td>
                                                    <span class="orders-btn">
                                                        <a href="#" class="btn button-sm red" style="font-size: small;">Delete
                                                        </a>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Garrett</td>
                                                <td>Garrett</td>
                                                <td>
                                                    <span class="orders-btn">
                                                        <a href="#" class="btn button-sm red" style="font-size: small;">Delete
                                                        </a>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>San Francisco</td>
                                                <td>San Francisco</td>
                                                <td>
                                                    <span class="orders-btn">
                                                        <a href="#" class="btn button-sm red" style="font-size: small;">Delete
                                                        </a>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>New York</td>
                                                <td>New York</td>
                                                <td>
                                                    <span class="orders-btn">
                                                        <a href="#" class="btn button-sm red" style="font-size: small;">Delete
                                                        </a>
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
            $('.add-item').on('click', function(e) {
                e.preventDefault();
                newMenuItem();
            });
            $(document).on("click", "#item-add .delete", function(e) {
                e.preventDefault();
                $(this).parent().parent().parent().parent().remove();
            });
        }
    </script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/add-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

</html>