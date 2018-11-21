<!DOCTYPE html>
<html>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link href="assets/css/addRestaurant.css" rel="stylesheet" type="text/css" />


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
                <a href="index.html" class="logo">
                    <img src="assets/images/logo-sm.png" alt="" height="22" class="logo-small">
                    <img src="assets/images/logo.png" alt="" height="24" class="logo-large">
                </a>

            </div>
            <!-- End Logo container-->


            <div class="menu-extras topbar-custom">

                <!-- Search input -->


                <ul class="list-inline float-right mb-0">



                    <!-- User-->
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                            <a class="dropdown-item" href="#"><span class="badge badge-success pull-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
                        </div>
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
                        <a href="index.php"><i class="ti-home"></i>Dashboard</a>
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

<br><br><br>

<form id="formRestaurant">

    <div class="wrapper fadeInDown">
        <div class="container-fluid">


            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Note :-</h4>
                            <p class="text-muted m-b-30 font-14">Here are Register Restaurant Company </p>


                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Registration Id</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="registrationId" id="registrationId" placeholder="Enter Register Id">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Enter Name">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="address" id="address" placeholder="Enter Address">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="email" id="email" placeholder="Enter Email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Mobile</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="tel" id="tel" placeholder="Enter Telephone">
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Select Dates</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2" multiple="multiple" name="days[]" data-placeholder="Select a State">
                                        <option>Monday</option>
                                        <option>Tuesday</option>
                                        <option>Wednesday</option>
                                        <option>Thursday</option>
                                        <option>Friday</option>

                                    </select>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Select Time</label>
                                <div class="col-sm-5">
                                    <select class="form-control" name="fromTime" id="fromTime" data-placeholder="Select Start Time">
                                        <option value="6:30am">6:30am</option>
                                        <option value="7:00am">7:00am</option>
                                        <option value="7:30am">7:30am</option>
                                        <option value="8:00am">8:00am</option>
                                        <option value="8:30am">8:30am</option>
                                        <option value="9:00am">9:00am</option>
                                        <option value="9:30am">9:30am</option>
                                        <option value="10:00am">10:00am</option>
                                        <option value="10:30am">10:30am</option>
                                        <option value="11:00am">11:00am</option>
                                        <option value="11:30am">11:30am</option>
                                        <option value="12:00 pm">12:00pm</option>
                                        <option value="12:30 pm">12:30pm</option>
                                        <option value="1:00pm">1:00pm</option>
                                        <option value="1:30pm">1:30pm</option>
                                        <option value="2:00pm">2:00pm</option>
                                        <option value="2:30pm">2:30pm</option>
                                        <option value="3:00pm">3:00pm</option>
                                        <option value="3:30pm">3:30pm</option>
                                        <option value="4:00pm">4:00pm</option>
                                        <option value="4:30pm">4:30pm</option>
                                        <option value="5:00pm">5:00pm</option>
                                        <option value="5:30pm">5:30pm</option>
                                        <option value="6:00pm">6:00pm</option>
                                        <option value="6:30pm">6:30pm</option>
                                        <option value="7:00pm">7:00pm</option>
                                        <option value="7:30pm">7:30pm</option>
                                        <option value="8:00pm">8:00pm</option>
                                        <option value="8:30pm">8:30pm</option>
                                        <option value="9:00pm">9:00pm</option>
                                        <option value="9:30pm">9:30pm</option>
                                        <option value="10:00pm">10:00pm</option>
                                        <option value="10:30pm">10:30pm</option>
                                        <option value="11:00pm">11:00pm</option>
                                        <option value="11:30pm">11:30pm</option>
                                        <option value="12:00am">12:00am</option>
                                        <option value="12:30am">12:30am</option>
                                        <option value="01:00am">01:00am</option>
                                        <option value="01:30am">01:30am</option>
                                        <option value="02:00am">02:00am</option>
                                        <option value="02:30am">02:30am</option>
                                        <option value="03:00am">03:00am</option>
                                        <option value="03:30am">03:30am</option>
                                        <option value="04:00am">04:00am</option>
                                        <option value="04:30am">04:30am</option>
                                        <option value="05:00am">05:00am</option>
                                        <option value="05:30am">05:30am</option>
                                        <option value="06:00am">06:00am</option>


                                    </select>
                                </div>

                                <div class="col-sm-5">
                                    <select class="form-control" name="toTime" id="toTime" data-placeholder="select End Time">
                                        <option value="6:30am">6:30am</option>
                                        <option value="7:00am">7:00am</option>
                                        <option value="7:30am">7:30am</option>
                                        <option value="8:00am">8:00am</option>
                                        <option value="8:30am">8:30am</option>
                                        <option value="9:00am">9:00am</option>
                                        <option value="9:30am">9:30am</option>
                                        <option value="10:00am">10:00am</option>
                                        <option value="10:30am">10:30am</option>
                                        <option value="11:00am">11:00am</option>
                                        <option value="11:30am">11:30am</option>
                                        <option value="12:00 pm">12:00pm</option>
                                        <option value="12:30 pm">12:30pm</option>
                                        <option value="1:00pm">1:00pm</option>
                                        <option value="1:30pm">1:30pm</option>
                                        <option value="2:00pm">2:00pm</option>
                                        <option value="2:30pm">2:30pm</option>
                                        <option value="3:00pm">3:00pm</option>
                                        <option value="3:30pm">3:30pm</option>
                                        <option value="4:00pm">4:00pm</option>
                                        <option value="4:30pm">4:30pm</option>
                                        <option value="5:00pm">5:00pm</option>
                                        <option value="5:30pm">5:30pm</option>
                                        <option value="6:00pm">6:00pm</option>
                                        <option value="6:30pm">6:30pm</option>
                                        <option value="7:00pm">7:00pm</option>
                                        <option value="7:30pm">7:30pm</option>
                                        <option value="8:00pm">8:00pm</option>
                                        <option value="8:30pm">8:30pm</option>
                                        <option value="9:00pm">9:00pm</option>
                                        <option value="9:30pm">9:30pm</option>
                                        <option value="10:00pm">10:00pm</option>
                                        <option value="10:30pm">10:30pm</option>
                                        <option value="11:00pm">11:00pm</option>
                                        <option value="11:30pm">11:30pm</option>
                                        <option value="12:00am">12:00am</option>
                                        <option value="12:30am">12:30am</option>
                                        <option value="01:00am">01:00am</option>
                                        <option value="01:30am">01:30am</option>
                                        <option value="02:00am">02:00am</option>
                                        <option value="02:30am">02:30am</option>
                                        <option value="03:00am">03:00am</option>
                                        <option value="03:30am">03:30am</option>
                                        <option value="04:00am">04:00am</option>
                                        <option value="04:30am">04:30am</option>
                                        <option value="05:00am">05:00am</option>
                                        <option value="05:30am">05:30am</option>
                                        <option value="06:00am">06:00am</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Select Availability</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="availability" id="availability" data-placeholder="Select Availability">
                                        <option value="Enable">Enable</option>
                                        <option value="Disable">Disable</option>
                                    </select>
                                </div>



                            </div>

                            <input type="text" id="action" name="action" hidden>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                &nbsp;<input type="submit" value="Register Restaurant" class="btn btn-primary" name="btn" id="btn">

                            </div>


                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->
</form>


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
<script src="test.js"></script>
<script src="assets/plugins/select2/select2.full.js"></script>
<script src="ajax/manageRestaurant.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>


<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2();


    })
</script>
</body>

</html>









