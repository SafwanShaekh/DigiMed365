<?php session_start();
error_reporting(0);
include_once "include/config.php";
if(strlen($_SESSION['id']==0)) {
    header('location:logout.php');
} else {
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn, $_POST['doctorname']);
        $email = mysqli_real_escape_string($conn, $_POST['doctoremail']);
        $password = mysqli_real_escape_string($conn, $_POST['doctorpassword']);
        $specilization = mysqli_real_escape_string($conn, $_POST['doctorspecilization']);
        $educational = mysqli_real_escape_string($conn, $_POST['doctoreducation']);
        $experience = mysqli_real_escape_string($conn, $_POST['doctorexperience']);
        $surgeries = mysqli_real_escape_string($conn, $_POST['doctorsurgeries']);
        $satisfied = mysqli_real_escape_string($conn, $_POST['patientsatisied']);
        $introduction = mysqli_real_escape_string($conn, $_POST['doctorintro']);
        
        if(isset($_FILES['doctoravatar'])){
            $img_name = $_FILES['doctoravatar']['name'];
            $img_size = $_FILES['doctoravatar']['size'];
            $tmp_name = $_FILES['doctoravatar']['tmp_name'];

            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);

            $extensions = ['png', 'jpeg', 'jpg'];
            if(in_array($img_ext, $extensions) === true){
                if($img_size > 5242880){
                    $_SESSION['errmsg']="File size should be less than 5MB";
                } else {
                    $time = time();

                    $new_img_name = $time . $img_name;

                    $upload_path = '../doctors/uploads/' . $new_img_name;
                    if(move_uploaded_file($tmp_name, $upload_path)){
                        $hash = password_hash($password,PASSWORD_DEFAULT);
                        $sql = mysqli_query($conn, "INSERT INTO doctors (doctor_image, doctor_name, doctor_email, doctor_password, doctor_specialization, introduction, educational_qualifications, work_experience, surgeries_completed, count_of_satisfied_patients)
                                                    VALUES ('{$new_img_name}', '{$name}', '{$email}', '{$hash}', '{$specilization}', '{$introduction}', '{$educational}', '{$experience}', '{$surgeries}', '{$satisfied}')");

                        if($sql) {
                            $_SESSION['msg']="Data enter succesfully!!!";
                            echo "<script>window.location.href ='manage-doctors.php'</script>";
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
                    <form action="add-doctors.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="row g-4 mb-3 card-header">
                                            <div class="col-sm-auto">
                                                <div>
                                                    <h4 class="card-title mb-0">Add Doctors</h4>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="d-flex justify-content-end">
                                                    <a class="btn btn-success add-btn" href="manage-doctors.php"> View List</a>
                                                </div>
                                            </div>
                                        </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-2 mt-3" style="color: red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="doctor-name-input">Doctor Name</label>
                                            <input type="hidden" class="form-control" id="formAction" name="formAction"
                                                value="add">
                                            <input type="text" class="form-control d-none" id="product-id-input">
                                            <input type="text" class="form-control" name="doctorname" id="doctor-name-input" value=""
                                                placeholder="Enter doctor name" required>
                                            <div class="invalid-feedback">Please Enter a doctor name.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="doctor-name-input">Doctor Email</label>
                                            <input type="hidden" class="form-control" id="formAction" name="formAction"
                                                value="add">
                                            <input type="email" class="form-control d-none" id="product-id-input">
                                            <input type="email" class="form-control" name="doctoremail" id="doctor-name-input" value=""
                                                placeholder="Enter doctor email" required>
                                            <div class="invalid-feedback">Please Enter a doctor email.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" name="doctorpassword" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                            <div class="invalid-feedback">Please Enter a doctor password.</div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <label class="form-label" for="doctor-name-input">Doctor Specilization</label>
                                                    <select name="doctorspecilization" class="form-control select-flag-templating">
                                                        <optgroup label="Doctor Specilization">
                                                            <?php $sql=mysqli_query($conn,"SELECT * FROM doctorspecilization");
                                                            while($row=mysqli_fetch_assoc($sql))
                                                            {
                                                            ?>
                                                            <option value="<?php echo $row['specilization'];?>">
																	<?php echo $row['specilization'];?>
																</option>
                                                            <?php } ?>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="doctor-name-input">Educational
                                                Qualifications</label>
                                            <input type="hidden" class="form-control" id="formAction" name="formAction"
                                                value="add">
                                            <input type="text" class="form-control d-none" id="product-id-input">
                                            <input type="text" class="form-control" name="doctoreducation"  id="doctor-name-input" value=""
                                                placeholder="Enter educational qualifications" required>
                                            <div class="invalid-feedback">Please Enter an educational qualifications.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="doctor-name-input">Work Experience</label>
                                            <input type="hidden" class="form-control" id="formAction" name="formAction"
                                                value="add">
                                            <input type="text" class="form-control d-none" id="product-id-input">
                                            <input type="text" class="form-control" name="doctorexperience" id="doctor-name-input" value=""
                                                placeholder="Enter work experience" required>
                                            <div class="invalid-feedback">Please Enter an work experience.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="doctor-name-input">Surgeries
                                                Completed</label>
                                            <input type="hidden" class="form-control" id="formAction" name="formAction"
                                                value="add">
                                            <input type="text" class="form-control d-none" id="product-id-input">
                                            <input type="text" class="form-control" name="doctorsurgeries"  id="doctor-name-input" value=""
                                                placeholder="Enter surgeries completed" required>
                                            <div class="invalid-feedback">Please Enter a surgeries completed.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="doctor-name-input">Satisfied Patients</label>
                                            <input type="hidden" class="form-control" id="formAction" name="formAction"
                                                value="add">
                                            <input type="text" class="form-control d-none" id="product-id-input">
                                            <input type="text" class="form-control" name="patientsatisied" id="doctor-name-input" value=""
                                                placeholder="Enter satisfied patients" required>
                                            <div class="invalid-feedback">Please Enter a satisfied patients.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label>Doctor Introduction</label>

                                            <div id="ckeditor-classic">
                                                <textarea cols="30" rows="10" class="form-control" name="doctorintro"
                                                    style="resize: none;"></textarea>
                                                <div class="invalid-feedback">Please Enter a doctor introduction.</div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="avatar">Doctor Image</label>
                                            <input type="file" name="doctoravatar" id="" value="AVATAR">
                                        </div>
                                        <div class="mt-5 mb-3">
                                            <button class="btn btn-success w-100" name="submit" type="submit">Add Doctor</button>
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