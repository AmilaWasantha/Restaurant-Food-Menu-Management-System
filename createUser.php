
<?php


$RestaurantRegistrationId="";
$RestaurantName="";


if(isset($_POST['btnSearchRestaurnatForCreateUser'])){

    $regId=$_POST['RestaurantRegistrationId'];
    $connection = new mysqli("localhost","root","amila1568","foodmanage",3306);
    $result=$connection->query("select * from restaurant where reg_id='{$regId}'");
    while ($row = mysqli_fetch_array($result)){
        $RestaurantRegistrationId=$row['reg_id'];
        $RestaurantName=$row['res_name'];


    }

}


?>

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
                <a href="index.php" class="logo">
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
                        <a href="index.php">Dashboard</a>
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

<form id="formCreateUser" action="createUser.php" method="POST">

    <div class="wrapper fadeInDown">
        <div class="container-fluid">


            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Note :-</h4>
                            <p class="text-muted m-b-30 font-14">Here are Create User To  Restaurant Company </p>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Restaurant Id</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" name="RestaurantRegistrationId" value="<?php echo $RestaurantRegistrationId ?>" id="registrationId" placeholder="Enter Register Id">
                                </div>
                                <div class="col-sm-4">
                                    &nbsp;<input type="submit" value="Search Restaurant" class="btn btn-success" name="btnSearchRestaurnatForCreateUser" id="btnSearchRestaurnatForCreateUser" ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Restaurant Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="RestaurantName" id="RestaurantName" value="<?php echo $RestaurantName ?>" placeholder="Enter Name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">User NIC</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="userNic" id="userNic"  placeholder="Enter User NIC">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="fullName" id="fullName"  placeholder="Enter User FullName">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">user Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="userName" id="userName"  placeholder="Enter User Name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="password" id="password" placeholder="Enter User Password">
                                </div>
                            </div>


                            <input type="text" id="action" name="action" hidden>



                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                &nbsp;<input type="submit" value="Save User" class="btn btn-primary" name="btnSaveUser" id="btnSaveUser">
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
<script src="ajax/manageUser.js"></script>


<!-- App js -->
<script src="assets/js/app.js"></script>

<script>

    function getData(e) {
        e.preventDefault();
    }
</script>


<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2();


    })
</script>
</body>

</html>









