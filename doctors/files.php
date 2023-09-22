<?php
session_start();
include_once "include/config.php";
$doctor = $_SESSION['dname'];

$fetch = "SELECT * FROM qr_code WHERE doctor_name = '{$doctor}'";
$result = mysqli_query($conn, $fetch);
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover" data-sidebar-image="none" data-preloader="disable">

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
    <link rel="stylesheet" href="assets/css/chat.css" />
    <!-- font awesome icon -->
    <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include_once "include/header.php" ?>

        <?php include_once "include/sidebar.php" ?>

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
                        <div class="col-12">
                            <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                                <div class="file-manager-sidebar">
                                    <div class="p-3 d-flex flex-column h-100">
                                        <div class="mb-3">
                                            <h5 class="mb-0 fw-semibold fs-16">My Drive</h5>
                                        </div>
                                        <div class="search-box">
                                            <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                                            <i class="ri-search-2-line search-icon"></i>
                                        </div>
                                        <div class="mt-3 mx-n4 px-4 file-menu-sidebar-scroll" data-simplebar="init">
                                            <div class="simplebar-wrapper" style="margin: 0px -24px;">
                                                <div class="simplebar-height-auto-observer-wrapper">
                                                    <div class="simplebar-height-auto-observer"></div>
                                                </div>
                                                <div class="simplebar-mask">
                                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                        <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden;">
                                                            <div class="simplebar-content" style="padding: 0px 24px;">
                                                                <ul class="list-unstyled file-manager-menu">
                                                                    <li>
                                                                        <a href="files.php">
                                                                            <i class="ri-qr-code-line align-bottom me-2"></i> <span class="file-list-link">Shared With Me</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="ocr.php">
                                                                            <i class="ri-character-recognition-line align-bottom me-2"></i> <span class="file-list-link">Image to Text Extraction</span>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="simplebar-placeholder" style="width: auto; height: 398px;"></div>
                                            </div>
                                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                            </div>
                                            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                                <div class="simplebar-scrollbar" style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- main content begins here -->
                                <div class="file-manager-content w-100 p-3 py-0">
                                    <div class="mx-n3 pt-4 px-4 file-manager-content-scroll" data-simplebar="init">
                                        <div class="simplebar-wrapper" style="margin: -24px -24px 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                                        <div class="simplebar-content" style="padding: 24px 24px 0px;">
                                                            <div id="folder-list" class="mb-2">


                                                                <!-- end page title -->



                                                                <div class="page-content" style="padding:0;">
                                                                    <div class="container-fluid">
                                                                        <!-- start page title -->
                                                                        <div id="folder-list" class="mb-2">
                                                                            <div class="row justify-content-beetwen g-2 mb-3">

                                                                                <div class="col">
                                                                                    <div class="d-flex align-items-center mb-4">
                                                                                        <h5 class="card-title flex-grow-1 mb-0">Scan the QR Code to Open the Image
                                                                                        </h5>
                                                                                        <div class="flex-shrink-0">


                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end col-->

                                                                            </div>
                                                                            <!-- end page title -->

                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="card">
                                                                                        <div class="card-header border-0">
                                                                                            <div class="card-body p-4">
                                                                                                <div class="tab-content text-muted">
                                                                                                    <div class="tab-pane active show" id="images" role="tabpanel" aria-labelledby="#images-tab">

                                                                                                        <div class="gallery-light">
                                                                                                            <div class="row">
                                                                                                                <?php
                                                                                                                if ($result->num_rows > 0) {
                                                                                                                    while ($row = $result->fetch_assoc()) {

                                                                                                                ?>
                                                                                                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                                                                                                            <div class="card" style="box-shadow: none;">
                                                                                                                                <div class="gallery-container">
                                                                                                                                
                                                                                                                                    <a class="image-popup" href="../user-dashboard/<?php echo ($row['upload_dir']); ?>" title="">
                                                                                                                                        <img style="width:150px;" class="gallery img-fluid mx-auto" src="../user-dashboard/<?php echo ($row['qr_dir']); ?>" alt="">
                                                                                                                                        <div class="gallery-overlay">
                                                                                                                                            <h5 class="overlay-caption">
                                                                                                                                                <?php echo ($row['doctor_name']); ?>
                                                                                                                                            </h5>

                                                                                                                                        </div>
                                                                                                                                    </a>
                                                                                                                                </div>
                                                                                                                                <div class="dropdown">
                                                                                                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink15" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                                                        <i class="ri-equalizer-fill"></i>
                                                                                                                                    </a>
                                                                                                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink15" style="">
                                                                                                                                        <li><a class="dropdown-item" href="../user-dashboard/<?php echo ($row['upload_dir']); ?>" target="_blank"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                                                                                        </li>
                                                                                                                                        <li><a class="dropdown-item" href="../user-dashboard/<?php echo ($row['upload_dir']); ?>" download=""><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                                                                                        </li>

                                                                                                                                        <li class="dropdown-divider">
                                                                                                                                        </li>
                                                                                                                                        <li><a class="dropdown-item" href="removed-files.php?id=<?php echo ($row['qr_id']); ?>"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                                                                                        </li>
                                                                                                                                    </ul>
                                                                                                                                </div>
                                                                                                                                
                                                                                                                                
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                <?php }
                                                                                                                } ?>
                                                                                                                <!--end col-->


                                                                                                            </div>
                                                                                                            <!--end row-->
                                                                                                            <div class="mt-4">
                                                                                                                <ul class="pagination pagination-separated justify-content-center mb-0">
                                                                                                                    <li class="page-item disabled">
                                                                                                                        <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                                                                                    </li>
                                                                                                                    <li class="page-item active">
                                                                                                                        <a href="javascript:void(0);" class="page-link">1</a>
                                                                                                                    </li>
                                                                                                                    <li class="page-item">
                                                                                                                        <a href="javascript:void(0);" class="page-link">2</a>
                                                                                                                    </li>
                                                                                                                    <li class="page-item">
                                                                                                                        <a href="javascript:void(0);" class="page-link">3</a>
                                                                                                                    </li>
                                                                                                                    <li class="page-item">
                                                                                                                        <a href="javascript:void(0);" class="page-link">4</a>
                                                                                                                    </li>
                                                                                                                    <li class="page-item">
                                                                                                                        <a href="javascript:void(0);" class="page-link">5</a>
                                                                                                                    </li>
                                                                                                                    <li class="page-item">
                                                                                                                        <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end tab-pane-->
                                                                                                    <div class="tab-pane" id="news" role="tabpanel">
                                                                                                        <div class="row">
                                                                                                            <div class="col-lg-6">
                                                                                                                <div class="card border">
                                                                                                                    <div class="card-body">
                                                                                                                        <div class="d-sm-flex">
                                                                                                                            <div class="flex-shrink-0">
                                                                                                                                <img src="assets/images/small/img-1.jpg" alt="" width="115" class="rounded-1">
                                                                                                                            </div>
                                                                                                                            <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                                                                                                                <ul class="list-inline mb-2">
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <span class="badge badge-soft-secondary fs-12">Business</span>
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                                <h5><a href="javascript:void(0);">A
                                                                                                                                        mix
                                                                                                                                        of
                                                                                                                                        friends
                                                                                                                                        and
                                                                                                                                        strangers
                                                                                                                                        heading
                                                                                                                                        off
                                                                                                                                        to
                                                                                                                                        find
                                                                                                                                        an
                                                                                                                                        adventure</a>
                                                                                                                                </h5>
                                                                                                                                <ul class="list-inline mb-0">
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <i class="ri-user-3-fill text-success align-middle me-1"></i>
                                                                                                                                        James
                                                                                                                                        Ballard
                                                                                                                                    </li>
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <i class="ri-calendar-2-fill text-success align-middle me-1"></i>
                                                                                                                                        23
                                                                                                                                        Nov,
                                                                                                                                        2021
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!--end card-->
                                                                                                            </div>
                                                                                                            <!--end col-->

                                                                                                            <div class="col-lg-6">
                                                                                                                <div class="card border">
                                                                                                                    <div class="card-body">
                                                                                                                        <div class="d-sm-flex">
                                                                                                                            <div class="flex-shrink-0">
                                                                                                                                <img src="assets/images/small/img-2.jpg" alt="" width="115" class="rounded-1">
                                                                                                                            </div>
                                                                                                                            <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                                                                                                                <ul class="list-inline mb-2">
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <span class="badge badge-soft-warning fs-12">Development</span>
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                                <h5><a href="javascript:void(0);">How
                                                                                                                                        to
                                                                                                                                        get
                                                                                                                                        creative
                                                                                                                                        in
                                                                                                                                        your
                                                                                                                                        work
                                                                                                                                        ?</a>
                                                                                                                                </h5>
                                                                                                                                <ul class="list-inline mb-0">
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <i class="ri-user-3-fill text-success align-middle me-1"></i>
                                                                                                                                        Ruby
                                                                                                                                        Griffin
                                                                                                                                    </li>
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <i class="ri-calendar-2-fill text-success align-middle me-1"></i>
                                                                                                                                        23
                                                                                                                                        Nov,
                                                                                                                                        2021
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!--end card-->
                                                                                                            </div>
                                                                                                            <!--end col-->

                                                                                                            <div class="col-lg-6">
                                                                                                                <div class="card border">
                                                                                                                    <div class="card-body">
                                                                                                                        <div class="d-sm-flex">
                                                                                                                            <div class="flex-shrink-0">
                                                                                                                                <img src="assets/images/small/img-3.jpg" alt="" width="115" class="rounded-1">
                                                                                                                            </div>
                                                                                                                            <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                                                                                                                <ul class="list-inline mb-2">
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <span class="badge badge-soft-info fs-12">Fashion</span>
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                                <h5><a href="javascript:void(0);">How
                                                                                                                                        to
                                                                                                                                        become
                                                                                                                                        a
                                                                                                                                        best
                                                                                                                                        sale
                                                                                                                                        marketer
                                                                                                                                        in
                                                                                                                                        a
                                                                                                                                        year!</a>
                                                                                                                                </h5>
                                                                                                                                <ul class="list-inline mb-0">
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <i class="ri-user-3-fill text-success align-middle me-1"></i>
                                                                                                                                        Elwood
                                                                                                                                        Arter
                                                                                                                                    </li>
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <i class="ri-calendar-2-fill text-success align-middle me-1"></i>
                                                                                                                                        23
                                                                                                                                        Nov,
                                                                                                                                        2021
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!--end card-->
                                                                                                            </div>
                                                                                                            <!--end col-->

                                                                                                            <div class="col-lg-6">
                                                                                                                <div class="card border">
                                                                                                                    <div class="card-body">
                                                                                                                        <div class="d-sm-flex">
                                                                                                                            <div class="flex-shrink-0">
                                                                                                                                <img src="assets/images/small/img-4.jpg" alt="" width="115" class="rounded-1">
                                                                                                                            </div>
                                                                                                                            <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                                                                                                                <ul class="list-inline mb-2">
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <span class="badge badge-soft-primary fs-12">Product</span>
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                                <h5><a href="javascript:void(0);">Manage
                                                                                                                                        white
                                                                                                                                        space
                                                                                                                                        in
                                                                                                                                        responsive
                                                                                                                                        layouts
                                                                                                                                        ?</a>
                                                                                                                                </h5>
                                                                                                                                <ul class="list-inline mb-0">
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <i class="ri-user-3-fill text-success align-middle me-1"></i>
                                                                                                                                        Nancy
                                                                                                                                        Martino
                                                                                                                                    </li>
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <i class="ri-calendar-2-fill text-success align-middle me-1"></i>
                                                                                                                                        23
                                                                                                                                        Nov,
                                                                                                                                        2021
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!--end card-->
                                                                                                            </div>
                                                                                                            <!--end col-->

                                                                                                            <div class="col-lg-6">
                                                                                                                <div class="card border">
                                                                                                                    <div class="card-body">
                                                                                                                        <div class="d-sm-flex">
                                                                                                                            <div class="flex-shrink-0">
                                                                                                                                <img src="assets/images/small/img-5.jpg" alt="" width="115" class="rounded-1">
                                                                                                                            </div>
                                                                                                                            <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                                                                                                                <ul class="list-inline mb-2">
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <span class="badge badge-soft-secondary fs-12">Business</span>
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                                <h5><a href="javascript:void(0);">Stack
                                                                                                                                        designer
                                                                                                                                        Olivia
                                                                                                                                        Murphy
                                                                                                                                        offers
                                                                                                                                        freelancing
                                                                                                                                        advice</a>
                                                                                                                                </h5>
                                                                                                                                <ul class="list-inline mb-0">
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <i class="ri-user-3-fill text-success align-middle me-1"></i>
                                                                                                                                        Erica
                                                                                                                                        Kernan
                                                                                                                                    </li>
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <i class="ri-calendar-2-fill text-success align-middle me-1"></i>
                                                                                                                                        11
                                                                                                                                        Nov,
                                                                                                                                        2021
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!--end card-->
                                                                                                            </div>
                                                                                                            <!--end col-->

                                                                                                            <div class="col-lg-6">
                                                                                                                <div class="card border">
                                                                                                                    <div class="card-body">
                                                                                                                        <div class="d-sm-flex">
                                                                                                                            <div class="flex-shrink-0">
                                                                                                                                <img src="assets/images/small/img-6.jpg" alt="" width="115" class="rounded-1">
                                                                                                                            </div>
                                                                                                                            <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                                                                                                                <ul class="list-inline mb-2">
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <span class="badge badge-soft-danger fs-12">Design</span>
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                                <h5><a href="javascript:void(0);">A
                                                                                                                                        day
                                                                                                                                        in
                                                                                                                                        the
                                                                                                                                        of
                                                                                                                                        a
                                                                                                                                        professional
                                                                                                                                        fashion
                                                                                                                                        designer</a>
                                                                                                                                </h5>
                                                                                                                                <ul class="list-inline mb-0">
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <i class="ri-user-3-fill text-success align-middle me-1"></i>
                                                                                                                                        Jason
                                                                                                                                        McQuaid
                                                                                                                                    </li>
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <i class="ri-calendar-2-fill text-success align-middle me-1"></i>
                                                                                                                                        14
                                                                                                                                        Nov,
                                                                                                                                        2021
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!--end card-->
                                                                                                            </div>
                                                                                                            <!--end col-->

                                                                                                            <div class="col-lg-6">
                                                                                                                <div class="card border">
                                                                                                                    <div class="card-body">
                                                                                                                        <div class="d-sm-flex">
                                                                                                                            <div class="flex-shrink-0">
                                                                                                                                <img src="assets/images/small/img-7.jpg" alt="" width="115" class="rounded-1">
                                                                                                                            </div>
                                                                                                                            <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                                                                                                                <ul class="list-inline mb-2">
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <span class="badge badge-soft-danger fs-12">Design</span>
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                                <h5><a href="javascript:void(0);">Design
                                                                                                                                        your
                                                                                                                                        apps
                                                                                                                                        in
                                                                                                                                        your
                                                                                                                                        own
                                                                                                                                        way</a>
                                                                                                                                </h5>
                                                                                                                                <ul class="list-inline mb-0">
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <i class="ri-user-3-fill text-success align-middle me-1"></i>
                                                                                                                                        Henry
                                                                                                                                        Baird
                                                                                                                                    </li>
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <i class="ri-calendar-2-fill text-success align-middle me-1"></i>
                                                                                                                                        19
                                                                                                                                        Nov,
                                                                                                                                        2021
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!--end card-->
                                                                                                            </div>
                                                                                                            <!--end col-->

                                                                                                            <div class="col-lg-6">
                                                                                                                <div class="card border">
                                                                                                                    <div class="card-body">
                                                                                                                        <div class="d-sm-flex">
                                                                                                                            <div class="flex-shrink-0">
                                                                                                                                <img src="assets/images/small/img-8.jpg" alt="" width="115" class="rounded-1">
                                                                                                                            </div>
                                                                                                                            <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                                                                                                                <ul class="list-inline mb-2">
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <span class="badge badge-soft-warning fs-12">Development</span>
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                                <h5><a href="javascript:void(0);">How
                                                                                                                                        apps
                                                                                                                                        is
                                                                                                                                        changing
                                                                                                                                        the
                                                                                                                                        IT
                                                                                                                                        world</a>
                                                                                                                                </h5>
                                                                                                                                <ul class="list-inline mb-0">
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <i class="ri-user-3-fill text-success align-middle me-1"></i>
                                                                                                                                        Elwood
                                                                                                                                        Arter
                                                                                                                                    </li>
                                                                                                                                    <li class="list-inline-item">
                                                                                                                                        <i class="ri-calendar-2-fill text-success align-middle me-1"></i>
                                                                                                                                        10
                                                                                                                                        Aug,
                                                                                                                                        2021
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!--end card-->
                                                                                                            </div>
                                                                                                            <!--end col-->
                                                                                                        </div>
                                                                                                        <!--end row-->

                                                                                                        <div class="mt-4">
                                                                                                            <ul class="pagination pagination-separated justify-content-center mb-0">
                                                                                                                <li class="page-item disabled">
                                                                                                                    <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                                                                                </li>
                                                                                                                <li class="page-item active">
                                                                                                                    <a href="javascript:void(0);" class="page-link">1</a>
                                                                                                                </li>
                                                                                                                <li class="page-item">
                                                                                                                    <a href="javascript:void(0);" class="page-link">2</a>
                                                                                                                </li>
                                                                                                                <li class="page-item">
                                                                                                                    <a href="javascript:void(0);" class="page-link">3</a>
                                                                                                                </li>
                                                                                                                <li class="page-item">
                                                                                                                    <a href="javascript:void(0);" class="page-link">4</a>
                                                                                                                </li>
                                                                                                                <li class="page-item">
                                                                                                                    <a href="javascript:void(0);" class="page-link">5</a>
                                                                                                                </li>
                                                                                                                <li class="page-item">
                                                                                                                    <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end tab-pane-->
                                                                                                    <div class="tab-pane" id="video" role="tabpanel">
                                                                                                        <div class="row">
                                                                                                            <div class="col-lg-12 video-list">
                                                                                                                <div class="list-element">
                                                                                                                    <h5 class="fs-16 mb-1">
                                                                                                                        <a href="javascript:void(0);">Admin
                                                                                                                            dashboard
                                                                                                                            templates -
                                                                                                                            Material
                                                                                                                            Design for
                                                                                                                            Velzon</a>
                                                                                                                    </h5>
                                                                                                                    <p class="text-success">
                                                                                                                        https://themesbrand.com/velzon/dashboard.php
                                                                                                                    </p>
                                                                                                                    <div class="d-flex flex-column flex-sm-row">
                                                                                                                        <div class="flex-shrink-0">
                                                                                                                            <iframe src="https://www.youtube.com/embed/GfSZtaoc5bw" title="YouTube video" allowfullscreen="" class="rounded"></iframe>
                                                                                                                        </div>
                                                                                                                        <div class="flex-grow-1 ms-sm-3 mt-2 mt-sm-0">
                                                                                                                            <p class="text-muted mb-0">
                                                                                                                                Velzon
                                                                                                                                admin is
                                                                                                                                super
                                                                                                                                flexible,
                                                                                                                                powerful,
                                                                                                                                clean,
                                                                                                                                modern
                                                                                                                                &amp;
                                                                                                                                responsive
                                                                                                                                admin
                                                                                                                                template
                                                                                                                                based on
                                                                                                                                <b>bootstrap
                                                                                                                                    5</b>
                                                                                                                                stable
                                                                                                                                with
                                                                                                                                unlimited
                                                                                                                                possibilities.
                                                                                                                                You can
                                                                                                                                simply
                                                                                                                                change
                                                                                                                                to any
                                                                                                                                layout
                                                                                                                                or mode
                                                                                                                                by
                                                                                                                                changing
                                                                                                                                a couple
                                                                                                                                of lines
                                                                                                                                of code.
                                                                                                                                You can
                                                                                                                                start
                                                                                                                                small
                                                                                                                                and
                                                                                                                                large
                                                                                                                                projects
                                                                                                                                or
                                                                                                                                update
                                                                                                                                design
                                                                                                                                in your
                                                                                                                                existing
                                                                                                                                project
                                                                                                                                using
                                                                                                                                Velzon
                                                                                                                                it is
                                                                                                                                very
                                                                                                                                quick
                                                                                                                                and easy
                                                                                                                                as it is
                                                                                                                                beautiful,
                                                                                                                                adroit,
                                                                                                                                and
                                                                                                                                delivers
                                                                                                                                the
                                                                                                                                ultimate
                                                                                                                                user
                                                                                                                                experience.
                                                                                                                            </p>
                                                                                                                            <div class="border border-dashed mb-1 mt-3">
                                                                                                                            </div>
                                                                                                                            <ul class="list-inline d-flex align-items-center g-3 text-muted fs-14 mb-0">
                                                                                                                                <li class="list-inline-item me-3">
                                                                                                                                    <i class="ri-thumb-up-line align-middle me-1"></i>335
                                                                                                                                </li>
                                                                                                                                <li class="list-inline-item me-3">
                                                                                                                                    <i class="ri-question-answer-line align-middle me-1"></i>102
                                                                                                                                </li>
                                                                                                                                <li class="list-inline-item">
                                                                                                                                    <div class="d-flex align-items-center">
                                                                                                                                        <div class="flex-shrink-0">
                                                                                                                                            <i class="ri-user-line"></i>
                                                                                                                                        </div>
                                                                                                                                        <div class="flex-grow-1 fs-13 ms-1">
                                                                                                                                            <span class="fw-medium">Themesbrand</span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </li>
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!--end list-element-->

                                                                                                                <div class="list-element mt-4">
                                                                                                                    <h5 class="fs-16 mb-1">
                                                                                                                        <a href="javascript:void(0);">Create
                                                                                                                            Responsive
                                                                                                                            Admin
                                                                                                                            Dashboard
                                                                                                                            using Html
                                                                                                                            CSS</a>
                                                                                                                    </h5>
                                                                                                                    <p class="text-success">
                                                                                                                        https://themesbrand.com/velzon/dashboard.php
                                                                                                                    </p>
                                                                                                                    <div class="d-flex flex-column flex-sm-row">
                                                                                                                        <div class="flex-shrink-0">
                                                                                                                            <iframe src="https://www.youtube.com/embed/Z-fV2lGKnnU" title="YouTube video" allowfullscreen="" class="rounded"></iframe>
                                                                                                                        </div>
                                                                                                                        <div class="flex-grow-1 ms-sm-3 mt-2 mt-sm-0">
                                                                                                                            <p class="text-muted mb-0">
                                                                                                                                Velzon
                                                                                                                                admin is
                                                                                                                                super
                                                                                                                                flexible,
                                                                                                                                powerful,
                                                                                                                                clean,
                                                                                                                                modern
                                                                                                                                &amp;
                                                                                                                                responsive
                                                                                                                                admin
                                                                                                                                template
                                                                                                                                based on
                                                                                                                                <b>bootstrap
                                                                                                                                    5</b>
                                                                                                                                stable
                                                                                                                                with
                                                                                                                                unlimited
                                                                                                                                possibilities.
                                                                                                                                You can
                                                                                                                                simply
                                                                                                                                change
                                                                                                                                to any
                                                                                                                                layout
                                                                                                                                or mode
                                                                                                                                by
                                                                                                                                changing
                                                                                                                                a couple
                                                                                                                                of lines
                                                                                                                                of code.
                                                                                                                                You can
                                                                                                                                start
                                                                                                                                small
                                                                                                                                and
                                                                                                                                large
                                                                                                                                projects
                                                                                                                                or
                                                                                                                                update
                                                                                                                                design
                                                                                                                                in your
                                                                                                                                existing
                                                                                                                                project
                                                                                                                                using
                                                                                                                                Velzon
                                                                                                                                it is
                                                                                                                                very
                                                                                                                                quick
                                                                                                                                and easy
                                                                                                                                as it is
                                                                                                                                beautiful,
                                                                                                                                adroit,
                                                                                                                                and
                                                                                                                                delivers
                                                                                                                                the
                                                                                                                                ultimate
                                                                                                                                user
                                                                                                                                experience.
                                                                                                                            </p>
                                                                                                                            <div class="border border-dashed mb-1 mt-3">
                                                                                                                            </div>
                                                                                                                            <ul class="list-inline d-flex align-items-center g-3 text-muted fs-14 mb-0">
                                                                                                                                <li class="list-inline-item me-3">
                                                                                                                                    <i class="ri-thumb-up-line align-middle me-1"></i>485
                                                                                                                                </li>
                                                                                                                                <li class="list-inline-item me-3">
                                                                                                                                    <i class="ri-question-answer-line align-middle me-1"></i>167
                                                                                                                                </li>
                                                                                                                                <li class="list-inline-item">
                                                                                                                                    <div class="d-flex align-items-center">
                                                                                                                                        <div class="flex-shrink-0">
                                                                                                                                            <i class="ri-user-line"></i>
                                                                                                                                        </div>
                                                                                                                                        <div class="flex-grow-1 fs-13 ms-1">
                                                                                                                                            <span class="fw-medium">Themesbrand</span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </li>
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!--end list-element-->

                                                                                                                <div class="list-element mt-4">
                                                                                                                    <h5 class="fs-16 mb-1">
                                                                                                                        <a href="javascript:void(0);">Velzon
                                                                                                                            - The Most
                                                                                                                            Popular
                                                                                                                            Bootstrap 5
                                                                                                                            HTML,
                                                                                                                            Angular
                                                                                                                            &amp; React
                                                                                                                            Js Admin</a>
                                                                                                                    </h5>
                                                                                                                    <p class="text-success">
                                                                                                                        https://themesbrand.com/velzon/dashboard.php
                                                                                                                    </p>
                                                                                                                    <div class="d-flex flex-column flex-sm-row">
                                                                                                                        <div class="flex-shrink-0">
                                                                                                                            <iframe src="https://www.youtube.com/embed/2RZQN_ko0iU" title="YouTube video" allowfullscreen="" class="rounded"></iframe>
                                                                                                                        </div>
                                                                                                                        <div class="flex-grow-1 ms-sm-3 mt-2 mt-sm-0">
                                                                                                                            <p class="text-muted mb-0">
                                                                                                                                Velzon
                                                                                                                                admin is
                                                                                                                                super
                                                                                                                                flexible,
                                                                                                                                powerful,
                                                                                                                                clean,
                                                                                                                                modern
                                                                                                                                &amp;
                                                                                                                                responsive
                                                                                                                                admin
                                                                                                                                template
                                                                                                                                based on
                                                                                                                                <b>bootstrap
                                                                                                                                    5</b>
                                                                                                                                stable
                                                                                                                                with
                                                                                                                                unlimited
                                                                                                                                possibilities.
                                                                                                                                You can
                                                                                                                                simply
                                                                                                                                change
                                                                                                                                to any
                                                                                                                                layout
                                                                                                                                or mode
                                                                                                                                by
                                                                                                                                changing
                                                                                                                                a couple
                                                                                                                                of lines
                                                                                                                                of code.
                                                                                                                                You can
                                                                                                                                start
                                                                                                                                small
                                                                                                                                and
                                                                                                                                large
                                                                                                                                projects
                                                                                                                                or
                                                                                                                                update
                                                                                                                                design
                                                                                                                                in your
                                                                                                                                existing
                                                                                                                                project
                                                                                                                                using
                                                                                                                                Velzon
                                                                                                                                it is
                                                                                                                                very
                                                                                                                                quick
                                                                                                                                and easy
                                                                                                                                as it is
                                                                                                                                beautiful,
                                                                                                                                adroit,
                                                                                                                                and
                                                                                                                                delivers
                                                                                                                                the
                                                                                                                                ultimate
                                                                                                                                user
                                                                                                                                experience.
                                                                                                                            </p>
                                                                                                                            <div class="border border-dashed mb-1 mt-3">
                                                                                                                            </div>
                                                                                                                            <ul class="list-inline d-flex align-items-center g-3 text-muted fs-14 mb-0">
                                                                                                                                <li class="list-inline-item me-3">
                                                                                                                                    <i class="ri-thumb-up-line align-middle me-1"></i>122
                                                                                                                                </li>
                                                                                                                                <li class="list-inline-item me-3">
                                                                                                                                    <i class="ri-question-answer-line align-middle me-1"></i>51
                                                                                                                                </li>
                                                                                                                                <li class="list-inline-item">
                                                                                                                                    <div class="d-flex align-items-center">
                                                                                                                                        <div class="flex-shrink-0">
                                                                                                                                            <i class="ri-user-line"></i>
                                                                                                                                        </div>
                                                                                                                                        <div class="flex-grow-1 fs-13 ms-1">
                                                                                                                                            <span class="fw-medium">Themesbrand</span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </li>
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!--end list-element-->

                                                                                                                <div class="list-element mt-4">
                                                                                                                    <h5 class="fs-16 mb-1">
                                                                                                                        <a href="javascript:void(0);">Velzon
                                                                                                                            Admin
                                                                                                                            Dashboard
                                                                                                                            (website
                                                                                                                            analytics)
                                                                                                                            with
                                                                                                                            Bootstrap
                                                                                                                            5</a>
                                                                                                                    </h5>
                                                                                                                    <p class="text-success">
                                                                                                                        https://themesbrand.com/velzon/dashboard.php
                                                                                                                    </p>
                                                                                                                    <div class="d-flex flex-column flex-sm-row">
                                                                                                                        <div class="flex-shrink-0">
                                                                                                                            <iframe src="https://www.youtube.com/embed/Z-fV2lGKnnU" title="YouTube video" allowfullscreen="" class="rounded"></iframe>
                                                                                                                        </div>
                                                                                                                        <div class="flex-grow-1 ms-sm-3 mt-2 mt-sm-0">
                                                                                                                            <p class="text-muted mb-0">
                                                                                                                                Velzon
                                                                                                                                admin is
                                                                                                                                super
                                                                                                                                flexible,
                                                                                                                                powerful,
                                                                                                                                clean,
                                                                                                                                modern
                                                                                                                                &amp;
                                                                                                                                responsive
                                                                                                                                admin
                                                                                                                                template
                                                                                                                                based on
                                                                                                                                <b>bootstrap
                                                                                                                                    5</b>
                                                                                                                                stable
                                                                                                                                with
                                                                                                                                unlimited
                                                                                                                                possibilities.
                                                                                                                                You can
                                                                                                                                simply
                                                                                                                                change
                                                                                                                                to any
                                                                                                                                layout
                                                                                                                                or mode
                                                                                                                                by
                                                                                                                                changing
                                                                                                                                a couple
                                                                                                                                of lines
                                                                                                                                of code.
                                                                                                                                You can
                                                                                                                                start
                                                                                                                                small
                                                                                                                                and
                                                                                                                                large
                                                                                                                                projects
                                                                                                                                or
                                                                                                                                update
                                                                                                                                design
                                                                                                                                in your
                                                                                                                                existing
                                                                                                                                project
                                                                                                                                using
                                                                                                                                Velzon
                                                                                                                                it is
                                                                                                                                very
                                                                                                                                quick
                                                                                                                                and easy
                                                                                                                                as it is
                                                                                                                                beautiful,
                                                                                                                                adroit,
                                                                                                                                and
                                                                                                                                delivers
                                                                                                                                the
                                                                                                                                ultimate
                                                                                                                                user
                                                                                                                                experience.
                                                                                                                            </p>
                                                                                                                            <div class="border border-dashed mb-1 mt-3">
                                                                                                                            </div>
                                                                                                                            <ul class="list-inline d-flex align-items-center g-3 text-muted fs-14 mb-0">
                                                                                                                                <li class="list-inline-item me-3">
                                                                                                                                    <i class="ri-thumb-up-line align-middle me-1"></i>485
                                                                                                                                </li>
                                                                                                                                <li class="list-inline-item me-3">
                                                                                                                                    <i class="ri-question-answer-line align-middle me-1"></i>69
                                                                                                                                </li>
                                                                                                                                <li class="list-inline-item">
                                                                                                                                    <div class="d-flex align-items-center">
                                                                                                                                        <div class="flex-shrink-0">
                                                                                                                                            <i class="ri-user-line"></i>
                                                                                                                                        </div>
                                                                                                                                        <div class="flex-grow-1 fs-13 ms-1">
                                                                                                                                            <span class="fw-medium">Themesbrand</span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </li>
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!--end list-element-->

                                                                                                                <div class="list-element mt-4">
                                                                                                                    <h5 class="fs-16 mb-1">
                                                                                                                        <a href="javascript:void(0);">Dashboard
                                                                                                                            Admin Basics
                                                                                                                            -
                                                                                                                            YouTube</a>
                                                                                                                    </h5>
                                                                                                                    <p class="text-success">
                                                                                                                        https://themesbrand.com/velzon/dashboard.php
                                                                                                                    </p>
                                                                                                                    <div class="d-flex flex-column flex-sm-row">
                                                                                                                        <div class="flex-shrink-0">
                                                                                                                            <iframe src="https://www.youtube.com/embed/1y_kfWUCFDQ" title="YouTube video" allowfullscreen="" class="rounded"></iframe>
                                                                                                                        </div>
                                                                                                                        <div class="flex-grow-1 ms-sm-3 mt-2 mt-sm-0">
                                                                                                                            <p class="text-muted mb-0">
                                                                                                                                Velzon
                                                                                                                                admin is
                                                                                                                                super
                                                                                                                                flexible,
                                                                                                                                powerful,
                                                                                                                                clean,
                                                                                                                                modern
                                                                                                                                &amp;
                                                                                                                                responsive
                                                                                                                                admin
                                                                                                                                template
                                                                                                                                based on
                                                                                                                                <b>bootstrap
                                                                                                                                    5</b>
                                                                                                                                stable
                                                                                                                                with
                                                                                                                                unlimited
                                                                                                                                possibilities.
                                                                                                                                You can
                                                                                                                                simply
                                                                                                                                change
                                                                                                                                to any
                                                                                                                                layout
                                                                                                                                or mode
                                                                                                                                by
                                                                                                                                changing
                                                                                                                                a couple
                                                                                                                                of lines
                                                                                                                                of code.
                                                                                                                                You can
                                                                                                                                start
                                                                                                                                small
                                                                                                                                and
                                                                                                                                large
                                                                                                                                projects
                                                                                                                                or
                                                                                                                                update
                                                                                                                                design
                                                                                                                                in your
                                                                                                                                existing
                                                                                                                                project
                                                                                                                                using
                                                                                                                                Velzon
                                                                                                                                it is
                                                                                                                                very
                                                                                                                                quick
                                                                                                                                and easy
                                                                                                                                as it is
                                                                                                                                beautiful,
                                                                                                                                adroit,
                                                                                                                                and
                                                                                                                                delivers
                                                                                                                                the
                                                                                                                                ultimate
                                                                                                                                user
                                                                                                                                experience.
                                                                                                                            </p>
                                                                                                                            <div class="border border-dashed mb-1 mt-3">
                                                                                                                            </div>
                                                                                                                            <ul class="list-inline d-flex align-items-center g-3 text-muted fs-14 mb-0">
                                                                                                                                <li class="list-inline-item me-3">
                                                                                                                                    <i class="ri-thumb-up-line align-middle me-1"></i>58
                                                                                                                                </li>
                                                                                                                                <li class="list-inline-item me-3">
                                                                                                                                    <i class="ri-question-answer-line align-middle me-1"></i>24
                                                                                                                                </li>
                                                                                                                                <li class="list-inline-item">
                                                                                                                                    <div class="d-flex align-items-center">
                                                                                                                                        <div class="flex-shrink-0">
                                                                                                                                            <i class="ri-user-line"></i>
                                                                                                                                        </div>
                                                                                                                                        <div class="flex-grow-1 fs-13 ms-1">
                                                                                                                                            <span class="fw-medium">Themesbrand</span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </li>
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!--end list-element-->

                                                                                                            </div>
                                                                                                            <!--end col-->
                                                                                                            <div class="text-center">
                                                                                                                <button id="loadmore" class="btn btn-link text-success mt-2"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i>
                                                                                                                    Load more </button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!--end row-->
                                                                                                    </div>
                                                                                                    <!--end tab-pane-->
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--end row-->

                                                                        </div>
                                                                        <!-- container-fluid -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="simplebar-placeholder" style="width: auto; height: 686px;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                                    <div class="simplebar-scrollbar" style="height: 415px; transform: translate3d(0px, 0px, 0px); display: block;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="file-manager-detail-content p-3 py-0">
                                            <div class="mx-n3 pt-3 px-3 file-detail-content-scroll" data-simplebar="init">
                                                <div class="simplebar-wrapper" style="margin: -16px -16px 0px;">
                                                    <div class="simplebar-height-auto-observer-wrapper">
                                                        <div class="simplebar-height-auto-observer"></div>
                                                    </div>
                                                    <div class="simplebar-mask">
                                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                                                <div class="simplebar-content" style="padding: 16px 16px 0px;">
                                                                    <div id="folder-overview">
                                                                        <div class="d-flex align-items-center pb-3 border-bottom border-bottom-dashed">
                                                                            <h5 class="flex-grow-1 fw-semibold mb-0">Overview</h5>
                                                                            <div>
                                                                                <button type="button" class="btn btn-soft-danger btn-icon btn-sm fs-16 close-btn-overview">
                                                                                    <i class="ri-close-fill align-bottom"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div id="simple_dount_chart" data-colors="[&quot;--vz-info&quot;, &quot;--vz-danger&quot;, &quot;--vz-primary&quot;, &quot;--vz-success&quot;]" class="apex-charts mt-3" dir="ltr" style="min-height: 330px;">
                                                                            <div id="apexchartswyqq6tma" class="apexcharts-canvas apexchartswyqq6tma" style="width: 0px; height: 330px;"><svg id="SvgjsSvg1034" width="0" height="330" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                                                    <g id="SvgjsG1037" class="apexcharts-annotations">
                                                                                    </g>
                                                                                    <g id="SvgjsG1036" class="apexcharts-inner apexcharts-graphical">
                                                                                        <defs id="SvgjsDefs1035"></defs>
                                                                                    </g>
                                                                                </svg>
                                                                                <div class="apexcharts-legend"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-4">
                                                                            <ul class="list-unstyled vstack gap-4">
                                                                                <li>
                                                                                    <div class="d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div class="avatar-xs">
                                                                                                <div class="avatar-title rounded bg-soft-secondary text-secondary">
                                                                                                    <i class="ri-file-text-line fs-17"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h5 class="mb-1 fs-15">Documents</h5>
                                                                                            <p class="mb-0 fs-12 text-muted">2348 files
                                                                                            </p>
                                                                                        </div>
                                                                                        <b>27.01 GB</b>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div class="avatar-xs">
                                                                                                <div class="avatar-title rounded bg-soft-success text-success">
                                                                                                    <i class="ri-gallery-line fs-17"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h5 class="mb-1 fs-15">Media</h5>
                                                                                            <p class="mb-0 fs-12 text-muted">12480 files
                                                                                            </p>
                                                                                        </div>
                                                                                        <b>20.87 GB</b>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div class="avatar-xs">
                                                                                                <div class="avatar-title rounded bg-soft-warning text-warning">
                                                                                                    <i class="ri-folder-2-line fs-17"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h5 class="mb-1 fs-15">Projects</h5>
                                                                                            <p class="mb-0 fs-12 text-muted">349 files
                                                                                            </p>
                                                                                        </div>
                                                                                        <b>4.10 GB</b>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="d-flex align-items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <div class="avatar-xs">
                                                                                                <div class="avatar-title rounded bg-soft-primary text-primary">
                                                                                                    <i class="ri-error-warning-line fs-17"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-3">
                                                                                            <h5 class="mb-1 fs-15">Others</h5>
                                                                                            <p class="mb-0 fs-12 text-muted">9873 files
                                                                                            </p>
                                                                                        </div>
                                                                                        <b>33.54 GB</b>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="pb-3 mt-auto">
                                                                            <div class="alert alert-danger d-flex align-items-center mb-0">
                                                                                <div class="flex-shrink-0">
                                                                                    <i class="ri-cloud-line text-danger align-bottom display-5"></i>
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h5 class="text-danger fs-14">Upgrade to Pro</h5>
                                                                                    <p class="text-muted mb-2">Get more space for
                                                                                        your...</p>
                                                                                    <button class="btn btn-sm btn-danger"><i class="ri-upload-cloud-line align-bottom"></i>
                                                                                        Upgrade Now</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="file-overview" class="h-100">
                                                                        <div class="d-flex h-100 flex-column">
                                                                            <div class="d-flex align-items-center pb-3 border-bottom border-bottom-dashed mb-3 gap-2">
                                                                                <h5 class="flex-grow-1 fw-semibold mb-0">File Preview
                                                                                </h5>
                                                                                <div>
                                                                                    <button type="button" class="btn btn-ghost-primary btn-icon btn-sm fs-16 favourite-btn">
                                                                                        <i class="ri-star-fill align-bottom"></i>
                                                                                    </button>
                                                                                    <button type="button" class="btn btn-soft-danger btn-icon btn-sm fs-16 close-btn-overview">
                                                                                        <i class="ri-close-fill align-bottom"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>

                                                                            <div class="pb-3 border-bottom border-bottom-dashed mb-3">
                                                                                <div class="file-details-box bg-light p-3 text-center rounded-3 border border-light mb-3">
                                                                                    <div class="display-4 file-icon">
                                                                                        <i class="ri-file-text-fill text-secondary"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <button type="button" class="btn btn-icon btn-sm btn-ghost-success float-end fs-16"><i class="ri-share-forward-line"></i></button>
                                                                                <h5 class="fs-16 mb-1 file-name">html.docx</h5>
                                                                                <p class="text-muted mb-0 fs-12"><span class="file-size">0.3 KB</span>, <span class="create-date">19 Apr, 2022</span></p>
                                                                            </div>
                                                                            <div>
                                                                                <h5 class="fs-12 text-uppercase text-muted mb-3">File
                                                                                    Description :</h5>

                                                                                <div class="table-responsive">
                                                                                    <table class="table table-borderless table-nowrap table-sm">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <th scope="row" style="width: 35%;">File
                                                                                                    Name :</th>
                                                                                                <td class="file-name">html.docx</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">File Type :</th>
                                                                                                <td class="file-type">Documents</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Size :</th>
                                                                                                <td class="file-size">0.3 KB</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Created :</th>
                                                                                                <td class="create-date">19 Apr, 2022
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">Path :</th>
                                                                                                <td class="file-path">
                                                                                                    <div class="user-select-all text-truncate">
                                                                                                        *:\projects\src\assets\images
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>

                                                                                <div>
                                                                                    <h5 class="fs-12 text-uppercase text-muted mb-3">
                                                                                        Share Information:</h5>
                                                                                    <div class="table-responsive">
                                                                                        <table class="table table-borderless table-nowrap table-sm">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <th scope="row" style="width: 35%;">
                                                                                                        Share Name :</th>
                                                                                                    <td class="share-name">\\*\Projects
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <th scope="row">Share Path :</th>
                                                                                                    <td class="share-path">
                                                                                                        velzon:\Documents\</td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="mt-auto border-top border-top-dashed py-3">
                                                                                <div class="hstack gap-2">
                                                                                    <button type="button" class="btn btn-soft-primary w-100"><i class="ri-download-2-line align-bottom me-1"></i>
                                                                                        Download</button>
                                                                                    <button type="button" class="btn btn-soft-danger w-100 remove-file-overview" data-remove-id="" data-bs-toggle="modal" data-bs-target="#removeFileItemModal"><i class="ri-close-fill align-bottom me-1"></i>
                                                                                        Delete</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- container-fluid -->
                            </div>
                        </div>
                    </div>
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