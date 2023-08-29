<?php
session_start();
include_once "include/config.php";
$msg = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $fetch = "SELECT * FROM qr_code WHERE qr_id = '$id'";
    $result = mysqli_query($conn, $fetch);
    $row = mysqli_fetch_array($result);

    if (isset($row['file_name'])) {
        $file_name = $row['file_name'];
        $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
        $delete_date = date('Y-m-d');
        $deleted_items = "INSERT INTO `dr_deleted_items`(`item_name`, `item_type`, `deletion_date`) VALUES ('$file_name','$file_extension','$delete_date')";
        $deleted_items_result = $conn->query($deleted_items);

        // Delete the file from the file system
        $file_path = 'deleted_files/' . $file_name; // Replace with the actual file path
        if (file_exists($file_path)) {
            unlink($file_path);

            // Delete the record from the database
            $delete = "DELETE FROM qr_code WHERE qr_id = '$id'";
            $result = $conn->query($delete);
        }
    }
}

$fetch = "SELECT * FROM `dr_deleted_items`";
$result = $conn->query($fetch);
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
                                <h4 class="mb-sm-0">Files</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Medical</a></li>
                                        <li class="breadcrumb-item active">your Files</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
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
                                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                            aria-label="scrollable content" style="height: 100%; overflow: hidden;">
                                            <div class="simplebar-content" style="padding: 0px 24px;">
                                                <ul class="list-unstyled file-manager-menu">
                                                    <li>
                                                        <a href="files.php"
                                                            role="button" >
                                                            <i class="ri-qr-code-line align-bottom me-2"></i> <span
                                                                class="file-list-link">Qr-Code</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="removed-files.php"><i
                                                                class="ri-delete-bin-line align-bottom me-2"></i> <span
                                                                class="file-list-link">Deleted</span></a>
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
                                <div class="simplebar-scrollbar"
                                    style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
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
                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                        aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 24px 24px 0px;">
                                            <div id="folder-list" class="mb-2">
                                                <div class="row justify-content-beetwen g-2 mb-3">

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-4">
                                                            <h5 class="card-title flex-grow-1 mb-0">My Drive</h5>
                                                            <div class="flex-shrink-0">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div>
                                                        <?php echo ($msg) ?>
                                                        <form action="delete.php" method="post">                                                            
                                                            <button type="submit" name="submit" class="btn btn-danger">Delete All Forever</button>

                                                        </form>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="tab-pane fade active show" id="documents"
                                                        role="tabpanel">
                                                        <div class="card" style="box-shadow:none;">
                                                            <div class="card-body" style="padding:20px 0px;">

                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="table-responsive">
                                                                            <table
                                                                                class="table table-borderless align-middle mb-0">
                                                                                <thead class="table-light">
                                                                                    <tr>
                                                                                        <th scope="col">Name</th>
                                                                                        <th scope="col">Type</th>
                                                                                        <th scope="col">Upload Date</th>
                                                                                        <th scope="col">Action</th>
                                                                                    </tr>
                                                                                </thead>

                                                                                <tbody>
                                                                                    <?php
                                                                                    if ($result->num_rows > 0) {
                                                                                        while ($row = $result->fetch_assoc()) {

                                                                                            ?>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="d-flex align-items-center">
                                                                                                        <div class="avatar-sm">
                                                                                                            <div
                                                                                                                class="avatar-title bg-soft-primary text-primary rounded fs-20">
                                                                                                                <i class="ri-folder-line"></i>                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="ms-3 flex-grow-1">
                                                                                                            <h6
                                                                                                                class="fs-15 mb-0">
                                                                                                                <a
                                                                                                                    href="javascript:void(0)">
                                                                                                                    <?php echo ($row['item_name']); ?>
                                                                                                                </a>
                                                                                                            </h6>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <?php
                                                                                                    $filename = $row['item_name'];
                                                                                                    $extension = pathinfo($filename, PATHINFO_EXTENSION);
                                                                                                    echo ($extension);
                                                                                                    ?>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <?php echo($row['deletion_date']);?>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="dropdown">
                                                                                                        <a href="javascript:void(0);"
                                                                                                            class="btn btn-light btn-icon"
                                                                                                            id="dropdownMenuLink15"
                                                                                                            data-bs-toggle="dropdown"
                                                                                                            aria-expanded="true">
                                                                                                            <i
                                                                                                                class="ri-equalizer-fill"></i>
                                                                                                        </a>
                                                                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                                                                            aria-labelledby="dropdownMenuLink15">
                                                                                                           
                                                                                                                                <li><a class="dropdown-item" href="delete.php?id=<?php echo ($row['item_id']); ?>"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                                                                                </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        <?php }
                                                                                    } ?>


                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="text-center mt-3">
                                                                            <a href="javascript:void(0);"
                                                                                class="text-success "><i
                                                                                    class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i>
                                                                                Load more </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end row-->

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
                            <div class="simplebar-scrollbar"
                                style="height: 415px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                        </div>
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
                    </div>
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
</body>

</html>