<!DOCTYPE html>
<html>

<!-- Mirrored from themesdesign.in/upcube/layouts/horizontal/pages-timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Sep 2018 10:38:49 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Upcube - Responsive Flat Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesdesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App Icons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

</head>


<body>

<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">

            <!-- Logo container-->
            <div class="logo">
                <!-- Text Logo -->
                <!--<a href="index.html" class="logo">-->
                <!--Upcube-->
                <!--</a>-->
                <!-- Image Logo -->
                <a href="index.php" class="logo">
                    <img src="assets/images/logo-sm.png" alt="" height="22" class="logo-small">
                    <img src="assets/images/logo.png" alt="" height="24" class="logo-large">
                </a>

            </div>
            <!-- End Logo container-->


            <div class="menu-extras topbar-custom">




                <ul class="list-inline float-right mb-0">



                    <!-- User-->
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                        </a>

                    </li>
                    <li class="menu-item list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                </ul>
            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <!-- MENU Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="index.php">Home</a>
                    </li>

                    <li class="has-submenu">
                        <a href="addRestaurant.php">Create Restaurant</a>
                    </li>

                    <li class="has-submenu">
                        <a href="modifyRestaurant.php">Modify Restaurant</a>
                    </li>

                    <li class="has-submenu">
                        <a href="createUser.php">Create User</a>
                    </li>

                    <li class="has-submenu">
                        <a href="#">Modify User</a>
                    </li>


                </ul>
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->


<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Upcube</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active">Timeline</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Timeline</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12">
                                <section id="cd-timeline" class="cd-container">
                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img cd-success">

                                        </div> <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content">
                                            <h3>Create Restaurant</h3>
                                            <p class="mb-0 text-muted font-14">Only Administrator can create accounts for each restaurant. Restaurant has following mandatory attributes. such as Name, Address, Email, Telephone, Open Days, Open Hourse("From" time and "To" Time)</p>
                                            <span class="cd-date">Create Restaurant</span>
                                        </div> <!-- cd-timeline-content -->
                                    </div> <!-- cd-timeline-block -->

                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img cd-danger">
                                        </div> <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content">
                                            <h3>Modify Restaurant</h3>
                                            <p class="m-b-20 text-muted font-14">Admin Can enable/disable an existing company. Once the administrator disabled a company, all the users of that company should not be able to use the system.</p>

                                            <span class="cd-date">Modify Restaurant</span>
                                        </div> <!-- cd-timeline-content -->
                                    </div> <!-- cd-timeline-block -->

                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img cd-info">

                                        </div> <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content">
                                            <h3>Create User Account</h3>
                                            <p class="mb-0 text-muted font-14">Administrator can create user accounts for each restaurant. restaurnt user has followint mandatory attrubutes, such as Name, UserName, Password, Associated Restaurant.</p>
                                            <span class="cd-date">Create User Account</span>
                                        </div> <!-- cd-timeline-content -->
                                    </div> <!-- cd-timeline-block -->

                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img cd-pink">

                                        </div> <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content">
                                            <h3>Modify User Account</h3>
                                            <p class="m-b-20 text-muted font-14">Admin can modify user account</p>
                                            <span class="cd-date">Modify User Account</span>
                                        </div> <!-- cd-timeline-content -->
                                    </div> <!-- cd-timeline-block -->

                                   <!-- cd-timeline-block -->
                                </section> <!-- cd-timeline -->
                            </div>
                        </div><!-- Row -->

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- end container -->
</div>
<!-- end wrapper -->


<!-- Footer -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                © 2018 Upcube - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->


<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

<!-- Mirrored from themesdesign.in/upcube/layouts/horizontal/pages-timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Sep 2018 10:38:49 GMT -->
</html>