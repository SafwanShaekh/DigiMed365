<?php session_start();
error_reporting(0);
$msg="";
include_once "include/config.php";
if (strlen($_SESSION['id'] == 0)) {
    header('location:logout.php');
} else {
    if(isset($_POST['submit'])){
        $doctorname = $_POST['doctorname'];
        $patientname = $_POST['patientname'];
        $bmi = $_POST['bmi'];
        $weight = $_POST['weight'];
        $pulserate = $_POST['pulserate'];
        $bodytemp = $_POST['bodytemp'];

        $insert = "INSERT INTO `health_vitals`(`doctorname`, `user_name`, `bmi`, `weight`, `pulse_rate`, `body_temp`) VALUES ('$doctorname','$patientname','$bmi','$weight','$pulserate','$bodytemp')";
        $result = mysqli_query($conn,$insert);
        if($result == true){
            $msg = '<div class="alert alert-success" role="alert">
            <strong>Record Added Successfully</strong>
        </div>';
        }else{
            $msg = '<div class="alert alert-success" role="alert">
            <strong>An Error Occured while processing your request.Please try again</strong>
        </div>';
        }
    }
}
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover" data-sidebar-image="none" data-preloader="disable">

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

        <?php include_once "include/header.php" ?>

        <!-- ========== App Menu ========== -->
        <?php include_once "include/sidebar.php" ?>

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <form action="add-health.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row g-4 mb-3 card-header">
                                    <div class="col-sm-auto">
                                        <div>
                                            <h4 class="card-title mb-0">Add Health Vitals of Your Patients</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-end">
                                            <a class="btn btn-success add-btn" href="manage-health.php"> View List</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-2 mt-3" ><?php echo($msg); ?>
                                        </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="doctor-name-input">Doctor Name</label>
                                                <input type="text" class="form-control" name="doctorname"  value="<?php echo( $_SESSION['dname']);?>" placeholder="Enter doctor name" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="doctor-name-input">Patient Name</label>
                                                <input type="text" class="form-control" name="patientname" id="doctor-name-input" value="" placeholder="Enter Patient name"  required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="doctor-name-input">BMI</label>
                                                <input type="text" class="form-control" name="bmi" id="doctor-name-input" value="" placeholder="Enter BMI Value"  required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="doctor-name-input">Weight</label>
                                                <input type="text" class="form-control" name="weight" id="doctor-name-input" value="" placeholder="Enter value in kg"  required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="doctor-name-input">Pulse Rate</label>
                                                <input type="text" class="form-control" name="pulserate" id="doctor-name-input" value="" placeholder="Enter value in BPM"  required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="doctor-name-input">Body Temperature</label>
                                                <input type="text" class="form-control" name="bodytemp" id="doctor-name-input" value="" placeholder="Enter value in °C" required>
                                            </div>
                                            <div class="mt-5 mb-3">
                                            <button class="btn btn-success w-100" name="submit" type="submit">Add Record</button>
                                        </div>
                                  



                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>




            <?php include_once "include/footer.php" ?>

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
        <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- Theme Settings -->
    <?php include_once "include/setting.php" ?>


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