<?php session_start();
include_once "include/config.php";
//code for delete
if(isset($_GET['del'])){
    $did=$_GET['id'];
    $sqli = mysqli_query($conn,"DELETE FROM users WHERE user_id = '$did'");
    
    if($sqli) {
        $_SESSION['successmsg'] = "user remove successfully !!";
        header("location:login-users.php");
    } else {
        $_SESSION['errormsg'] = "Error: Something went wrong" . mysqli_error($conn);
        header("location:login-users.php");
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
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Manage Doctors</h4>

                                <h4 class="mb-sm-0">Manage Users</h4>


                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Medical</a></li>
                                        <li class="breadcrumb-item active">List of Doctors</li>
                                        <li class="breadcrumb-item active">List of Login-Users</li>
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
                                    <h4 class="card-title mb-0">Add, Edit & Remove</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="listjs-table" id="customerList">
                                        <div class="row g-4 mb-3">
                                            <div class="col-sm-auto">
                                                <div>
                                                    <a class="btn btn-success add-btn" href="add-doctors.php"><i
                                                        class="ri-add-line align-bottom me-1"></i> Add Doctors </a>
                                                </div>
                                            </div>
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
                                                        <th class="p-3">#</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Password</th>
                                                        <th>Phone</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list doctor-list">
                                                <tbody class="list user-list">
                                                    
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

       <script>
            const searchBar = document.querySelector(".search-box input");
            const doctorsList = document.querySelector(".user-list");


            searchBar.addEventListener('keyup', ()=>{
                let searchTerm = searchBar.value;
                if(searchTerm != ""){
                    searchBar.classList.add("active");
                }else{
                    searchBar.classList.remove("active");
                    searchBar.value = "";
                }
                // let start Ajax
                let xhr = new XMLHttpRequest(); // creating XML object
                xhr.open("POST", "include/user-search.php", true);
                xhr.addEventListener('load', ()=>{
                    if(xhr.readyState === XMLHttpRequest.DONE){
                        if(xhr.status === 200){
                            let data = xhr.response;
                            console.log(data);
                            doctorsList.innerHTML = data;
                        }
                    }
                })
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.send("searchTerm=" + searchTerm); // sending user search term to php file with ajax
            });


            // let start Ajax
            let xhr = new XMLHttpRequest(); // creating XML object
            xhr.open("GET", "include/user.php", true);
            xhr.addEventListener('load', ()=>{
                if(xhr.readyState === XMLHttpRequest.DONE){
                    if(xhr.status === 200){
                        let data = xhr.response;
                        if(!searchBar.classList.contains("active")){ // if active not contains in search bar then add this data 
                            console.log(data);
                            doctorsList.innerHTML = data;
                        }
                    }
                }
            })
            xhr.send();

        </script>
</body>

</html>