<?php
session_start();
// error_reporting(0);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('include/config.php');

if(strlen($_SESSION['id'])==0){
    header('location:logout.php');
} else {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    if(isset($_POST['submit'])){
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $doctorspecilization = mysqli_real_escape_string($conn, $_POST['doctorspecilization']);

        $sql = mysqli_query($conn, "UPDATE `doctorspecilization` SET `specilization`='{$doctorspecilization}' WHERE id = '{$id}'");
        if(!$sql) {
            // Handle query error
            $_SESSION['errormsg'] = "Doctor Specialization is not updated successfully !!";
        }else{
            $_SESSION['msg'] = "Doctor Specialization updated successfully !!";
        }
        // Redirect the user to the same page with the ID parameter
        header("Location: doctor-specilization.php");
        exit();
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

    <!-- Sweet Alert css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

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

        <?php include_once "include/sidebar.php"?>

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
                                <h4 class="mb-sm-0">Update Doctors Specilization</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Update Doctor Specilization</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Update Doctor Specilization</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <form action="edit-doctor-specilization.php" method="POST">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                    <div class="mb-2">
                                                            <span style="color: green;"><?php echo htmlentities($_SESSION['msg']);?></span>
                                                            <span style="color: red;"><?php echo htmlentities($_SESSION['errormsg']);?></span>
                                                        </div>
                                                        <?php
                                                        $sql2 = mysqli_query($conn, "SELECT * FROM `doctorspecilization` WHERE `id` = '$id'");
                                                        while($row=mysqli_fetch_assoc($sql2)){
                                                        ?>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="doctor-name-input">Specilization
                                                                Name</label>
                                                                <input type="text" class="form-control" name="doctorspecilization" id="doctor-name-input" value="<?php echo $row['specilization'];?>" required>
                                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                            <div class="invalid-feedback">Please Enter a doctor specilization.
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="text-start">
                                                                <button type="submit" name="submit" class="btn btn-success">Update</button>
                                                            </div>
                                                        </div>
                                                        <p class="text-center text-lg-end"><?php echo $id;?></p>
                                                    </div>
                                                </div>
                                                <!-- end card -->
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                    <!-- end row -->

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
    <!-- prismjs plugin -->
    <script src="assets/libs/prismjs/prism.js"></script>
    <script src="assets/libs/list.js/list.min.js"></script>
    <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

    <!-- listjs init -->
    <script src="assets/js/pages/listjs.init.js"></script>

    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>
</html>
<?php } ?>
<?php } ?>