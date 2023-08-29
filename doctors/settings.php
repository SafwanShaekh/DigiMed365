<?php
session_start();
include_once "include/config.php";

$id = $_SESSION['id'];
$fullname = $_SESSION['dname'];
$fetch = "select * from doctors where `doctor_name`='$fullname'";

$result = $conn->query($fetch);
$row = $result->fetch_assoc();

$msg = '';

$pass = $row['doctor_password'];
if (isset($_POST['passSub'])) {
    $op = $_POST['oldPass'];
    $np = $_POST['newpassword'];
    $ncp = $_POST['confNewPass'];

    if (!empty($op) && !empty($np) && !empty($ncp)) {
        if ($op == $pass) {
            if ($np === $ncp) {
                $updatePass = mysqli_query($conn, "UPDATE doctors SET doctor_password = '{$np}' WHERE id = '{$id}'");
                if ($updatePass == true) {
                    $msg = '<div class="alert alert-success" role="alert">
                                <strong>Password Updated Successfully!!!</strong>
                            </div>';
                } else {
                    $msg = '<div class="alert alert-danger" role="alert">
                                <strong>Something went WRONG!!!</strong>
                            </div>';
                }
            } else {
                $msg = '<div class="alert alert-danger" role="alert">
                            <strong>Confirm Password does not match New Password!!! Please try again.</strong>
                        </div>';
            }
        } else {
            $msg = '<div class="alert alert-danger" role="alert">
                        <strong>Please enter the correct OLD PASSWORD!!!</strong>
                    </div>';
        }
    } else {
        $msg = '<div class="alert alert-danger" role="alert">
                    <strong>All inputs are required.</strong>
                </div>';
    }
}

if (isset($_POST['update'])) {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $specilization = $_POST['spec'];
    $eq = $_POST['edu'];
    $we = $_POST['work'];
    $sc = $_POST['complete'];
    $ss = $_POST['satisfie'];
    $intro = $_POST['about'];

     if (!empty($name) && !empty($email) && !empty($specilization) && !empty($eq) && !empty($we) && !empty($sc) && !empty($ss) && !empty($intro)) {
            $UPDATE = mysqli_query($conn, "UPDATE doctors SET doctor_name = '{$name}', doctor_email = '{$email}', doctor_specialization = '{$specilization}', educational_qualifications = '{$eq}', work_experience = '{$we}', surgeries_completed = '{$sc}', count_of_satisfied_patients = '{$ss}', introduction = '{$intro}' WHERE id = '{$id}'");

            if ($UPDATE == true) {
                $msg = '<div class="alert alert-success" role="alert">
                                <strong>Data Updated Successfully!!!</strong>
                            </div>';
            } else {
                $msg = '<div class="alert alert-danger" role="alert">
                                <strong>Something went WRONG!!!</strong>
                            </div>';
            }
     } else {
        $msg = '<div class="alert alert-danger" role="alert">
                    <strong>All inputs are required.</strong>
                </div>';
    }


}
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Digimed365 - Doctor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
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
    <!-- custom Css 2 -->
    <link rel="stylesheet" href="assets/css/chat.css" />
    <!-- font awesome icon -->
    <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include_once "include/header.php"?>

        <?php include_once "include/sidebar.php"?>

        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>


        <!-- ============================================================== -->
        <!-- main content begins here -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <div class="position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg profile-setting-img">
                            <img src="assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="card mt-n5">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                            <img src="uploads/<?php echo $row['doctor_image']; ?>"
                                                class="rounded-circle avatar-xl img-thumbnail user-profile-image"
                                                alt="user-profile-image">
                                        </div>
                                        <h5 class="fs-17 mb-1">
                                            <?php echo($_SESSION['dname']) ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-5">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-0">Complete Your Profile</h5>
                                        </div>

                                    </div>
                                    <div class="progress animated-progress custom-progress progress-label">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            <div class="label">100%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-9">
                            <div class="card mt-xxl-n5">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0"
                                        role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails"
                                                role="tab" aria-selected="true">
                                                <i class="fas fa-home"></i>
                                                Personal Details
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab"
                                                aria-selected="false" tabindex="-1">
                                                <i class="far fa-user"></i>
                                                Change Password
                                            </a>
                                        </li>


                                    </ul>
                                </div>
                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                            <form action="settings.php" method="POST">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <?php echo($msg);?>
                                                            <label for="firstnameInput"
                                                                class="form-label">FullName</label>
                                                            <input type="text" name="fullname" class="form-control"
                                                                id="firstnameInput" placeholder="Enter your firstname"
                                                                value="<?php echo($row['doctor_name']);?>">
                                                            <input style="display: none;" type="text" name="userid"
                                                                class="form-control" id="firstnameInput"
                                                                placeholder="Enter your firstname"
                                                                value="<?php echo($row['id']);?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Email
                                                                Address</label>
                                                            <input type="email" name="email" class="form-control"
                                                                id="emailInput" placeholder="Enter your email"
                                                                value="<?php echo($row['doctor_email']);?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->


                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="designationInput" class="form-label">Doctor
                                                                Specilization</label>
                                                            <input type="text" name="spec" class="form-control"
                                                                id="designationInput"
                                                                placeholder="Enter a Specilization"
                                                                value="<?php echo($row['doctor_specialization']);?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="websiteInput1" class="form-label">Educational
                                                                Qualification</label>
                                                            <input type="text" name="edu" class="form-control"
                                                                id="websiteInput1"
                                                                placeholder="Enter a Educational Qualification"
                                                                value="<?php echo($row['educational_qualifications']);?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="cityInput" class="form-label">Work
                                                                Experience</label>
                                                            <input type="text" name="work" class="form-control"
                                                                id="cityInput" placeholder="Enter a work Experience"
                                                                value="<?php echo($row['work_experience']);?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="countryInput" class="form-label">Surgeries
                                                                Completed</label>
                                                            <input type="text" name="complete" class="form-control"
                                                                id="countryInput"
                                                                placeholder="Enter Completed Surgeries"
                                                                value="<?php echo($row['surgeries_completed']);?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="zipcodeInput" class="form-label">Satisfied
                                                                Surgeries</label>
                                                            <input type="text" name="satisfie" class="form-control"
                                                                id="zipcodeInput" placeholder="Enter Satisfied Patient"
                                                                value="<?php echo($row['count_of_satisfied_patients']);?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="mb-3 pb-2">
                                                            <label for="exampleFormControlTextarea"
                                                                class="form-label">Introduction</label>
                                                            <textarea class="form-control" name="about"
                                                                id="exampleFormControlTextarea"
                                                                placeholder="Enter your Introduction"
                                                                rows="3"><?php echo($row['introduction']);?></textarea>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <?php echo ($msg) ?>
                                                            <button type="submit" name="update"
                                                                class="btn btn-primary">Update Info</button>
                                                            <a href="profile.php">
                                                                <button type="button"
                                                                    class="btn btn-soft-success">Cancel</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                        <!--end tab-pane-->
                                        <div class="tab-pane" id="changePassword" role="tabpanel">
                                             <?php
                                            if (!empty($msg)) {
                                                echo $msg;
                                            }
                                            ?>
                                            <form action="settings.php" method="POST">
                                                <div class="row g-2">
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <label for="oldpasswordInput" class="form-label">Old Password</label>
                                                            <input type="password" class="form-control" name="oldPass" id="oldpasswordInput" placeholder="Enter current password">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <label for="newpasswordInput" class="form-label">New Password</label>
                                                            <input type="password" name="newpassword" class="form-control" id="newpasswordInput" placeholder="Enter new password">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <label for="confirmpasswordInput" class="form-label">Confirm Password</label>
                                                            <input type="password" name="confNewPass" class="form-control" id="confirmpasswordInput" placeholder="Confirm password">
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="text-end">
                                                            <button type="submit" name="passSub" class="btn btn-success">Change Password</button>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                        <!--end tab-pane-->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
        </div>
        <!-- main content ends here -->

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