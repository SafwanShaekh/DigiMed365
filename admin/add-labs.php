<?php session_start();
error_reporting(0);
include_once "include/config.php";
if(strlen($_SESSION['id']==0)) {
    header('location:logout.php');
} else {
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn, $_POST['labName']);
        $email = mysqli_real_escape_string($conn, $_POST['labEmail']);
        $phone = mysqli_real_escape_string($conn, $_POST['labPhone']);
        $address = mysqli_real_escape_string($conn, $_POST['labAddress']);
        $introduction = mysqli_real_escape_string($conn, $_POST['labIntro']);
        
        if(isset($_FILES['labAvatar'])){
            $img_name = $_FILES['labAvatar']['name'];
            $img_size = $_FILES['labAvatar']['size'];
            $tmp_name = $_FILES['labAvatar']['tmp_name'];

            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);

            $extensions = ['png', 'jpeg', 'jpg'];
            if(in_array($img_ext, $extensions) === true){
                if($img_size > 5242880){
                    $_SESSION['errmsg']="File size should be less than 5MB";
                } else {
                    $time = time();

                    $new_img_name = $time . $img_name;

                    $upload_path = '../uploads/' . $new_img_name;
                    if(move_uploaded_file($tmp_name, $upload_path)){
                        $sql = mysqli_query($conn, "INSERT INTO `laboritories`(`logo_image`, `lab_name`, `lab_email`, `lab_phone`, `lab_address`, `lab_Description`) VALUES ('{$new_img_name}','{$name}','{$email}','{$phone}','{$address}','{$introduction}')");

                        if($sql) {
                            $_SESSION['msg']="Data enter succesfully!!!";
                            echo "<script>window.location.href ='manage-labs.php'</script>";
                        } else {
                            $_SESSION['errmsg']="Something went wrong!!!";
                        }
                    }
                }
            }else{
                $_SESSION['errmsg']="Please select an Image file - jpeg, jpg, png";
            }
        }else{
            $_SESSION['errmsg']="Please select an Image file";
        }
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
                    <form action="add-labs.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="row g-4 mb-3 card-header">
                                            <div class="col-sm-auto">
                                                <div>
                                                    <h4 class="card-title mb-0">Add Laboritories</h4>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="d-flex justify-content-end">
                                                    <a class="btn btn-success add-btn" href="manage-labs.php"> View List</a>
                                                </div>
                                            </div>
                                        </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-2 mt-3" style="color: red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="doctor-name-input">Lab Name</label>
                                            <input type="hidden" class="form-control" id="formAction" name="formAction"
                                                value="add">
                                            <input type="text" class="form-control d-none" id="product-id-input">
                                            <input type="text" class="form-control" name="labName" id="doctor-name-input" value=""
                                                placeholder="Enter Lab name" required>
                                            <div class="invalid-feedback">Please Enter a doctor name.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="doctor-name-input">Lab Email</label>
                                            <input type="hidden" class="form-control" id="formAction" name="formAction"
                                                value="add">
                                            <input type="email" class="form-control d-none" id="product-id-input">
                                            <input type="email" class="form-control" name="labEmail" id="doctor-name-input" value=""
                                                placeholder="Enter Lab email" required>
                                            <div class="invalid-feedback">Please Enter a Lab email.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="doctor-name-input">Lab Contact</label>
                                            <input type="hidden" class="form-control" id="formAction" name="formAction"
                                                value="add">
                                            <input type="text" class="form-control d-none" id="product-id-input">
                                            <input type="text" class="form-control" name="labPhone"  id="doctor-name-input" value=""
                                                placeholder="Enter Lab Contact" required>
                                            <div class="invalid-feedback">Please Enter a Lab Contact.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label>Lab Address</label>

                                            <div id="ckeditor-classic">
                                                <textarea cols="30" rows="2" class="form-control" name="labAddress"
                                                    style="resize: none;"></textarea>
                                                <div class="invalid-feedback">Please Enter a Lab Address.</div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label>Lab Description</label>

                                            <div id="ckeditor-classic">
                                                <textarea cols="30" rows="10" class="form-control" name="labIntro"
                                                    style="resize: none;"></textarea>
                                                <div class="invalid-feedback">Please Enter a Lab Description.</div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="avatar">Lab Avatar</label>
                                            <input type="file" name="labAvatar" id="" value="AVATAR">
                                        </div>
                                        <div class="mt-5 mb-3">
                                            <button class="btn btn-success w-100" name="submit" type="submit">Add Labortory</button>
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