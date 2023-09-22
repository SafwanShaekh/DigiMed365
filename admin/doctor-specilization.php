<?php
session_start();
error_reporting(0);
include('include/config.php');

if(strlen($_SESSION['id'])==0){
    header('location:logout.php');
} else {
    if(isset($_POST['submit'])) {
        $doctorspecilization = mysqli_real_escape_string($conn, $_POST['doctorspecilization']);
        
        $sql = "INSERT INTO doctorspecilization (specilization) VALUES ('$doctorspecilization')";
        $result = mysqli_query($conn, $sql);
        
        if($result) {
            $_SESSION['successmsg'] = "Doctor Specialization added successfully !!";
            header("location:doctor-specilization.php");
        } else {
            $_SESSION['errormsg'] = "Error: " . mysqli_error($conn);
            header("location:doctor-specilization.php");
        }
    }

    //code for delete
    if(isset($_GET['del'])){
        $sid=$_GET['id'];
        $res = mysqli_query($conn,"DELETE FROM doctorspecilization WHERE id = '$sid'");
        
        if($res) {
            $_SESSION['successmsg'] = "Doctor Specialization removed successfully !!";
            header("location:doctor-specilization.php");
        } else {
            $_SESSION['errormsg'] = "Error: " . mysqli_error($conn);
            header("location:doctor-specilization.php");
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Add Doctor Specialization</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <form action="doctor-specilization.php" method="POST">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="mb-2">
                                                            <span style="color: green;"><?php echo htmlentities($_SESSION['successmsg']);?></span>
                                                            <span style="color: red;"><?php echo htmlentities($_SESSION['errormsg']);?></span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="doctor-name-input">Specilization
                                                                Name</label>
                                                            <input type="text" class="form-control" name="doctorspecilization"
                                                                id="doctor-name-input" value=""
                                                                placeholder="Enter doctor specilization" required>
                                                            <div class="invalid-feedback">Please Enter a doctor specilization.
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="text-start">
                                                                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                                            </div>
                                                        </div>
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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Doctor Specialization</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="listjs-table" id="customerList">

                                        <div class="table-responsive table-card mt-3 mb-1">
                                            <table class="table align-middle table-nowrap" id="customerTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="p-3">#</th>
                                                        <th>Specialization</th>
                                                        <th>Creation Date</th>
                                                        <th>Updation Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <?php
                                                    $sql2 = mysqli_query($conn,"SELECT * FROM doctorspecilization");
                                                    $cnt = 1;
                                                    while($row = mysqli_fetch_assoc($sql2)){
                                                    ?>
                                                    <tr>
                                                        <td class="id" style="display:none;"><a
                                                                href="javascript:void(0);"
                                                                class="fw-medium link-primary">#VZ2101</a>
                                                        </td>
                                                        <td class="p-3"><?php echo $cnt;?>.</td>
                                                        <td><?php echo $row['specilization'];?></td>
                                                        <td><?php echo $row['creation_datetime'];?></td>
                                                        <td><?php echo $row['update_datetime'];?></td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <a href="edit-doctor-specilization.php?id=<?php echo $row['id'];?>" class="btn btn-sm btn-success edit-item-btn">Edit</a>
                                                                </div>
                                                                <div class="remove">
                                                                    <a href="doctor-specilization.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-danger remove-item-btn">Remove</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php 
                                                    $cnt=$cnt+1;
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
</body>
</html>
<?php } ?>