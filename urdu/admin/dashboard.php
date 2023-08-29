<?php session_start();?>
<?php
include_once 'include/config.php';
// Query to select data from the appointments table
$sqlappointment = mysqli_query($conn, "SELECT COUNT(id) AS total_appointments FROM appointments");

// Query to select data from the doctors table
$sqldoctor = mysqli_query($conn, "SELECT COUNT(id) AS total_doctors FROM doctors");

if ($sqlappointment && $sqldoctor) {
    $rowAppointments = mysqli_fetch_assoc($sqlappointment);
    $rowDoctors = mysqli_fetch_assoc($sqldoctor);

    $totalAppointments = $rowAppointments['total_appointments'];
    $totalDoctors = $rowDoctors['total_doctors'];
}
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>DigiMed365 | Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
                        <div class="col">

                            <div class="h-100">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">سلام،!!!, <?php  echo $row['fullname'];?>!!!</h4>
                                            </div>
                                            <div class="mt-3 mt-lg-0">
                                                <form action="javascript:void(0);">
                                                    <div class="row g-3 mb-0 align-items-center">
                                                        <!--end col-->
                                                        <div class="col-auto">
                                                            <a class="btn btn-soft-success" href="add-doctors.php"><i
                                                                    class="ri-add-circle-line align-middle me-1"></i>
                                                                    ڈاکٹروں کو شامل کریں۔</a>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </form>
                                            </div>
                                        </div><!-- end card header -->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                
                                <div class="row">
                                    <div class="col-xl-6 col-md-8">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">تقرریاں</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <?php
                                                        function abbreviateNumber($number)
                                                        {
                                                            $abbreviations = array(
                                                                12 => 'T',
                                                                9 => 'B',
                                                                6 => 'M',
                                                                3 => 'K',
                                                            );

                                                            foreach ($abbreviations as $exponent => $abbreviation) {
                                                                if ($number >= pow(10, $exponent)) {
                                                                    $displayNumber = $number / pow(10, $exponent);
                                                                    $formattedNumber = number_format($displayNumber, 1) . $abbreviation;
                                                                    return $formattedNumber;
                                                                }
                                                            }

                                                            return $number;
                                                        }

                                                        $abbreviatedAppointments = abbreviateNumber($totalAppointments);
                                                        ?>

                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                            <span class="counter-value" data-target="<?php echo $totalAppointments; ?>">0</span>
                                                        </h4>
                                                        <a href="appointment-history.php" class="text-decoration-underline text-muted">تمام ملاقاتیں دیکھیں</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-success rounded fs-3">
                                                            <i class="bx bx-shopping-bag text-primary"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->



                                    <div class="col-xl-6 col-md-8">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">ڈاکٹر</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <?php
                                                        $abbreviatedDoctors = abbreviateNumber($totalDoctors);
                                                        ?>

                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                            <span class="counter-value" data-target="<?php echo $totalDoctors; ?>">0</span>
                                                        </h4>
                                                        <a href="manage-doctors.php" class="text-decoration-underline text-muted">تمام ڈاکٹروں کو دیکھیں</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-info rounded fs-3">
                                                            <i class="bx bx-user text-info"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->



                                </div> <!-- end row-->

                                <div class="row">
                                    
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">ڈاکٹر کی حالیہ درخواستیں۔</h4>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-3">
                                                        <thead class="text-muted table-light">
                                                            <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">City</th>
                                                                <th scope="col">Specialization</th>
                                                                <th scope="col">Phone</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $recordsPerPage = 10; // Number of records to display per page

                                                            // Get the current page number from the request
                                                            $page = isset($_GET['page']) ? $_GET['page'] : 1;

                                                            // Calculate the offset for the SQL query
                                                            $offset = ($page - 1) * $recordsPerPage;

                                                            // Query to get the total number of records
                                                            $totalRecordsQuery = mysqli_query($conn, "SELECT COUNT(*) AS total FROM demo_request");
                                                            $totalRecords = mysqli_fetch_assoc($totalRecordsQuery)['total'];

                                                            $sqldemo = mysqli_query($conn, "SELECT * FROM demo_request ORDER BY id DESC LIMIT $offset, $recordsPerPage");
                                                            $cnt = ($page - 1) * $recordsPerPage + 1;

                                                            while ($demorow = mysqli_fetch_assoc($sqldemo)) {
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <a href="demo-requests.php" class="fw-medium link-primary"><?php echo $cnt; ?></a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex-grow-1"><?php echo $demorow['fullname']; ?></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="flex-grow-1"><?php echo $demorow['email']; ?></div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-danger">
                                                                            <div class="flex-grow-1"><?php echo $demorow['city']; ?></div>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="flex-grow-1"><?php echo $demorow['specialization']; ?></div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-success">
                                                                            <div class="flex-grow-1"><?php echo $demorow['phone']; ?></div>
                                                                        </span>
                                                                    </td>
                                                                </tr><!-- end tr -->
                                                                <?php
                                                                $cnt = $cnt + 1;
                                                            }
                                                            ?>
                                                        </tbody><!-- end tbody -->
                                                    </table><!-- end table -->

                                                    <div class="d-flex justify-content-end mt-4 mb-4 mx-5">
                                                        <div class="pagination-wrap hstack gap-2">
                                                            <?php
                                                            // Display previous page link
                                                            if ($page > 1) {
                                                                echo '<a class="page-item pagination-prev" href="?page=' . ($page - 1) . '">Previous</a>';
                                                            } else {
                                                                echo '<span class="page-item pagination-prev disabled">Previous</span>';
                                                            }

                                                            // Display next page link
                                                            $nextPage = $page + 1;
                                                            if (($offset + $recordsPerPage) < $totalRecords) {
                                                                echo '<a class="page-item pagination-next" href="?page=' . $nextPage . '">Next</a>';
                                                            } else {
                                                                echo '<span class="page-item pagination-next disabled">Next</span>';
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>



                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- .card-->
                                    </div> <!-- .col-->
                                </div> <!-- end row-->

                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->

                    </div>  
                        
                </div>    
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

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
</body>


<!-- Mirrored from Safwan Shaekh.com/DigiMed365/html/modern/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2023 17:15:32 GMT -->

</html>