<?php
session_start();
$msg = "";
include_once "include/config.php";
use thiagoalessio\TesseractOCR\TesseractOCR;

require_once 'vendor/autoload.php';

// Check if a file was uploaded
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    // Get the uploaded file name
    $filename = basename($_FILES['image']['name']);

    // Define the destination folder
    $destinationFolder = 'uploads';

    // Create the uploads folder if it doesn't exist
    if (!is_dir($destinationFolder)) {
        mkdir($destinationFolder);
    }

    // Move the uploaded file to the destination folder
    $destinationPath = $destinationFolder . '/' . $filename;
    move_uploaded_file($_FILES['image']['tmp_name'], $destinationPath);

    // Use Tesseract OCR to read the text
    $ocr = new TesseractOCR($destinationPath);
    $text = $ocr->run();

    // Create the text-extracts folder if it doesn't exist
    $extractsFolder = 'text-extracts';
    if (!is_dir($extractsFolder)) {
        mkdir($extractsFolder);
    }

    // Generate a unique filename for the text file
    $txtFilename = $extractsFolder . '/' . uniqid() . '.txt';

    // Store the extracted text in a text file
    file_put_contents($txtFilename, $text);

    // Get the path of the current script
    $scriptPath = $_SERVER['SCRIPT_NAME'];

    // Get the base URL
    $baseUrl = dirname($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $scriptPath);

    // Create the link to open the text file
    $fileUrl = $baseUrl . '/' . $txtFilename;

    // Display a success message with the link to the text file
	$msg = '<div class="alert alert-success" role="alert">
	<strong>Text extracted and saved in: <a href= '.$fileUrl.' target="_blank">'.$txtFilename.'</strong>
</div>';
    // Delete the uploaded file
    unlink($destinationPath);
} else {
    $msg = '<div class="alert alert-info" role="alert">
	<strong>Select a picture to get started</strong>
</div>';
}
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
																		<?php  echo($msg);?>
																		<form action="ocr.php" method="POST" enctype="multipart/form-data">

																			<input class="form-control" name="image" accept="image/*" type="file" id="formFile">
																			<br>
																			<button type="submit" name="submit" class="btn btn-success"><i></i>
																				Upload File</button>

																		</form>
																	</div>
																	<!--end col-->
																	
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
											<div class="simplebar-scrollbar" style="height: 415px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
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