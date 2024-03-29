<?php session_start();
include_once "include/config.php";
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Velzon - Admin & Dashboard Template</title>
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
    <link rel="stylesheet" href="assets/css/chat.css"/>
    <!-- font awesome icon -->
    <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

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
                                <h4 class="mb-sm-0">Contact with Patients</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Medical</a></li>
                                        <li class="breadcrumb-item active">your Patients</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="wrapper mb-5 mt-3">
                        <section class="users">
                            <header>
                                <?php
                                $sql = mysqli_query($conn, "SELECT * FROM doctors WHERE id = {$_SESSION['id']}");
                                if(mysqli_num_rows($sql) > 0){
                                    $row = mysqli_fetch_assoc($sql);
                                }
                                ?>
                                <div class="content">
                                    <img src="uploads/<?php echo $row['doctor_image']; ?>" alt="">
                                    <div class="details">
                                        <span><?php echo $row['doctor_name']; ?></span>
                                        <p>Doctor</p>
                                    </div>
                                </div>
                            </header>
                            <div class="search">
                                <span class="text">Select a user for chat</span>
                                <input type="text" placeholder="Enter name to search..."/>
                                <button><i class="fas fa-search"></i></button>
                            </div>
                            <div class="users-list">
                                
                            </div>
                        </section>
                    </div>
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

       <script>
        const searchBar = document.querySelector(".users .search input"),
            searchBtn = document.querySelector(".users .search button"),
            usersList = document.querySelector(".users .users-list");

            searchBtn.addEventListener('click', function(){
                searchBar.classList.toggle("active");
                searchBar.focus();
                searchBtn.classList.toggle("active");
            })

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
                xhr.open("POST", "include/search-chat.php", true);
                xhr.addEventListener('load', ()=>{
                    if(xhr.readyState === XMLHttpRequest.DONE){
                        if(xhr.status === 200){
                            let data = xhr.response;
                            usersList.innerHTML = data;
                        }
                    }
                })
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.send("searchTerm=" + searchTerm); // sending user search term to php file with ajax
            })

            setInterval(() =>{
                // let start Ajax
                let xhr = new XMLHttpRequest(); // creating XML object
                xhr.open("GET", "include/patients.php", true);
                xhr.addEventListener('load', ()=>{
                    if(xhr.readyState === XMLHttpRequest.DONE){
                        if(xhr.status === 200){
                            let data = xhr.response;
                            if(!searchBar.classList.contains("active")){ // if active not contains in search bar then add this data 
                                usersList.innerHTML = data;
                            }
                        }
                    }
                })
                xhr.send();
            }, 500); // this function will run frequently after 500ms
       </script>
</body>

</html>