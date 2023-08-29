<?php
session_start();
include_once "include/config.php";
$loggedin_doctor = $_SESSION['dname'];
$msg = "";


$healthfetch = "select * from health_vitals where `doctorname` = '$loggedin_doctor'";
$healthresult = mysqli_query($conn,$healthfetch);

if (isset($_POST['update'])) {
    $user_id = $_POST['id'];
    $user_name = $_POST['username'];
    $bmi = $_POST['bmi'];
    $weight = $_POST['weight'];
    $pulse_rate = $_POST['pulserate'];
    $bodytemp = $_POST['bodytemp'];

    $update = "UPDATE `health_vitals` SET `user_id`='$user_id',`user_name`='$user_name',`bmi`='$bmi',`weight`='$weight',`pulse_rate`='$pulse_rate',`body_temp`='$bodytemp' WHERE `user_id`='$user_id'";
    $result = $conn->query($update);

    if ($result == TRUE) {
        $msg = '<div class="alert alert-success" role="alert">
        <strong>Record Updated Successfully. Refresh the page to see your changes</strong>
    </div>';
    } else {
        $msg = '<div class="alert alert-success" role="alert">
            <strong>An Error Occured while processing your request.Please try again</strong>
        </div>';
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
                   
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Manage Patients</h4>
                                    <div class="d-flex justify-content-sm-end">
                                    <div class="remove">
                        <a href="add-health.php" class="btn btn-sm btn-info remove-item-btn">Add Health Info</a>
                    </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="listjs-table" id="customerList">
                                        <div class="row g-4 mb-3">
                                            <!-- HTML code for displaying search form and results -->
                                            <div class="col-sm">
                                                <form method="POST">
                                                    <div class="d-flex justify-content-sm-end">
                                                        <div class="search-box ms-2">
                                                            <input type="text" class="form-control search" name="search" placeholder="Search...">
                                                            <i class="ri-search-line search-icon"></i>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="table-responsive table-card mt-3 mb-1">
                                            <table class="table align-middle table-nowrap main-table" id="customerTable">
                                                <div class="mb-2 px-3 pb-2">
                                                    <span style="color: green;"><?php echo htmlentities($_SESSION['successmsg']);?></span>
                                                    <span style="color: red;"><?php echo htmlentities($_SESSION['errormsg']);?></span>
                                                </div>
                                                <thead class="table-light">
                                                    <tr>
                                                       
                                                        <th>Patient Name</th>
                                                        <th>BMI</th>
                                                        <th>Weight</th>
                                                        <th>Pulse Rate</th>
                                                        <th>Body Temp</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <div class="mb-2 mt-3" ><?php echo($msg); ?>
                                                    <?php
                                                    
                                                    while($row = $healthresult->fetch_assoc()){
                                                        ?>
                                                        
                                                        <td><?php echo($row['user_name']);   ?></td>
                                                        <form action="manage-health.php" method="post">
                                                        <input type="hidden" name="username" value="<?php echo($row['user_name']);   ?>">
                                                        <input type="hidden" name="id" value="<?php echo($row['user_id']);   ?>">
                                                        <td><input type="text" name="bmi" value="<?php echo($row['bmi']);   ?>"></td>
                                                        <td><input type="text" name="weight" value="<?php echo($row['weight']);   ?>"></td>
                                                        <td><input type="text" name="pulserate" value="<?php echo($row['pulse_rate']);   ?>"></td>
                                                        <td><input type="text" name="bodytemp" value="<?php echo($row['body_temp']);   ?>"></td>
                                                        <td><input type="submit" name="update" value="Update Info" class="btn btn-success"></td>
                                                        </form>
                                                        
                                                        
                                                        <?php
                                                    }
                                                    ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end col -->
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

               </script>
</body>

</html>