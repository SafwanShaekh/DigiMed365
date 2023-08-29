<?php session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
include_once "include/config.php";
if(strlen($_SESSION['id']==0)) {
    header('location:logout.php');
} else {
    $did = mysqli_real_escape_string($conn, $_GET['id'] ?? '');

    if(isset($_POST['submit'])){
        $did = mysqli_real_escape_string($conn, $_POST['id']);
        $name = mysqli_real_escape_string($conn, $_POST['fname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);

        $update_query = "UPDATE `users` SET `fullname`='{$name}',`email`='{$email}',`password`='{$password}',`phone`='{$phone}' WHERE user_id = '{$did}'";
    
        if(isset($update_query)){
            $sql = mysqli_query($conn, $update_query);
    
            if(!$sql) {
                $_SESSION['errmsg']="Something went wrong!!!";
            } else {
                $_SESSION['msg']="Data updated successfully!";
            }
            
            // Redirect the user to the same page with the ID parameter
            header("Location: login-users.php");
            exit();
        }
    }
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | DigiMed365 - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Safwan Shaekh" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- jsvectormap css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include_once "include/header.php"?>

        <!-- ========== App Menu ========== -->
        <?php include_once "include/sidebar.php"?>

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Edit User</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Medical</a></li>
                                        <li class="breadcrumb-item active">Edit User</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <form action="edit-user.php" method="POST" enctype="multipart/form-data">
                        <?php
                        $sql2 = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_id` = '$did'");
                        while($row1=mysqli_fetch_assoc($sql2)){
                        ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-4 mb-3 card-header">
                                            <div class="col-sm-auto">
                                                <div>
                                                    <h4 class="card-title mb-0">Add Doctors</h4>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="d-flex justify-content-end">
                                                    <a class="btn btn-success add-btn" href="login-users.php"> View List</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-2 mt-3" style="color: red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="doctor-name-input">Full Name
                                                </label>
                                                <input type="text" class="form-control" name="fname" id="doctor-name-input" value="<?php echo $row1['fullname'];?>" required>
                                                <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                                            <div class="invalid-feedback">Please Enter a full name.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="doctor-email-input">Email</label>
                                            <input type="email" class="form-control d-none" id="product-id-input">
                                            <input type="email" class="form-control" name="email" id="doctor-email-input" value="<?php echo $row1['email'];?>" required>
                                            <div class="invalid-feedback">Please Enter a email.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" name="password" class="form-control pe-5 password-input" value="<?php echo $row1['password'];?>" id="password-input">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                            <div class="invalid-feedback">Please Enter a doctor password.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="doctor-education-input">Phone</label>
                                            <input type="text" class="form-control d-none" id="product-id-input">
                                            <input type="text" class="form-control" name="phone" id="doctor-education-input" value="<?php echo $row1['phone'];?>" required>
                                            <div class="invalid-feedback">Phone no.</div>
                                        </div>
                                        <div class="mt-5 mb-3">
                                            <button class="btn btn-success w-100" name="submit" type="submit">EDIT NOW</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>

                    </form>
                </div>
            </div>




            <?php include_once "include/footer.php"?>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- Theme Settings -->
    <?php include_once "include/setting.php"?>


    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <!-- password-addon init -->
    <script src="assets/js/pages/password-addon.init.js"></script>
</body>
</html>
<?php } ?>
<?php } ?>