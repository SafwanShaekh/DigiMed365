<?php
$msg = "";
include('config.php');

if(isset($_POST['submit'])){
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$msg = "Invalid email format";
	} else {
		$password = $_POST['password'];
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password

		$phone = $_POST['phone'];
		$cnic = $_POST['cnic'];

		$usercheck = "SELECT `email` FROM `users` WHERE `email` = '$email'";
		$usercheck_result = $conn->query($usercheck);

		if ($usercheck_result->num_rows > 0) {
			$msg = '<div class="alert alert-danger" role="alert">
				<strong> USER ALREADY EXISTS!!! ' . $email . '</strong>
			</div>';
		} else {
			$signup = "INSERT INTO `users`(`fullname`, `email`, `password`, `phone`, `cnic`) VALUES ('$fullname','$email','$hashedPassword','$phone', '$cnic')";
			$signup_result = $conn->query($signup);

			if ($signup_result == true) {
				$msg = '<div class="alert alert-success" role="alert">
				<strong> Signup Successful</strong> 
			</div>';
				header("location:login.php");
			} else {
				$msg = '<div class="alert alert-danger" role="alert">
				<strong> Oops! Something went wrong! Please try again. </strong>
			</div>';
			}
		}
	}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>DigiMed365 | Signup</title>

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Health Care Medical Html5 Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="DigiMed365">
	<meta name="generator" content="DigiMed365 Novena HTML Template v1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.php" />

	<!-- 
  Essential stylesheets
  =====================================-->
	<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="plugins/icofont/icofont.min.css">
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

</head>

<body id="top">

	<header>
		<div class="header-top-bar">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<ul class="top-bar-info list-inline-item pl-0 mb-0">
							<li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>support@digimed365.com</a></li>
							<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Karachi, Pakistan </li>
						</ul>
					</div>
					<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                            <a href="../index.php">

                                <span class="h4">DigiMed365 in English</span>
                            </a>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navigation" id="navbar">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="images\logo.jpg" alt="" class="img-fluid">
				</a>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icofont-navigation-menu"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarmain">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class=" nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="disabled nav-link" href="about.php">About</a></li>
						<li class="nav-item dropdown">
							<a class="disabled nav-link dropdown-toggle" href="department.php" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department </a>

						</li>

						<li class="nav-item dropdown">
							<a class="disabled nav-link dropdown-toggle" href="doctor.php" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors</a>
						</li>

						<li class="nav-item dropdown">
							<a class="disabled nav-link dropdown-toggle" href="blog-sidebar.php" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog </a>

						</li>
						<li class="nav-item active"><a class="nav-link" href="doctor-demo.php">Are You a Doctor?</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- header ends -->
	<!-- begin main content -->


	<section class="contact-form-wrap section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title text-center">
						<h2 class="text-md mb-2">سائن اپ</h2>
						<div class="divider mx-auto my-4"></div>
						<p class="mb-5">کی تمام خصوصیات تک رسائی کے لیے براہ کرم سائن اپ کریں۔ DigiMed365 </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
				<?php echo($msg);?>
					<form id="contact-form" class="contact__form " method="POST" action="signup.php">
						<!-- form message -->
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<input name="fullname" id="fullname" type="text" class="form-control" placeholder="Your Full Name">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<input name="email" id="email" type="email" class="form-control" placeholder="Your Email Address" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input name="password" id="password" type="password" class="form-control" placeholder="Set a strong password" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input name="phone" id="phone" type="text" class="form-control" placeholder="Your Phone Number" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input name="cnic" id="cnic" type="text" class="form-control" placeholder="Your CNIC Number" required>
								</div>
							</div>
						</div>

						<div style="text-align: center;">
							<input class="btn btn-main btn-round-full" name="submit" type="submit" value="سائن اپ"></input>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- end main content -->
	<!-- footer Start -->
	<footer class="footer section gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 mr-auto col-sm-6">
					<div class="widget mb-5 mb-lg-0">
						<div class="logo mb-4">
							<img src="images\logo.jpg" alt="" class="img-fluid">
						</div>
						<p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

						<ul class="list-inline footer-socials mt-4">
							<li class="list-inline-item">
								<a href="https://www.facebook.com/DigiMed365"><i class="icofont-facebook"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="https://twitter.com/DigiMed365"><i class="icofont-twitter"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="https://www.pinterest.com/DigiMed365/"><i class="icofont-linkedin"></i></a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="widget mb-5 mb-lg-0">
						<h4 class="text-capitalize mb-3">Department</h4>
						<div class="divider mb-4"></div>

						<ul class="list-unstyled footer-menu lh-35">
							<li><a href="#!">Surgery </a></li>
							<li><a href="#!">Wome's Health</a></li>
							<li><a href="#!">Radiology</a></li>
							<li><a href="#!">Cardioc</a></li>
							<li><a href="#!">Medicine</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="widget mb-5 mb-lg-0">
						<h4 class="text-capitalize mb-3">Support</h4>
						<div class="divider mb-4"></div>

						<ul class="list-unstyled footer-menu lh-35">
							<li><a href="privacy-policy.php">Terms & Conditions</a></li>
							<li><a href="privacy-policy.php">Privacy Policy</a></li>
							<li><a href="contact.php">Company Support </a></li>
							<li><a href="faq.php">FAQs</a></li>
							<li><a href="#!"></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="widget widget-contact mb-5 mb-lg-0">
						<h4 class="text-capitalize mb-3">Get in Touch</h4>
						<div class="divider mb-4"></div>

						<div class="footer-contact-block mb-4">
							<div class="icon d-flex align-items-center">
								<i class="icofont-email mr-3"></i>
								<span class="h6 mb-0">Support Available for 24/7</span>
							</div>
							<h4 class="mt-2"><a href="mailto:support@digimed365.com">support@digimed365.com</a></h4>
						</div>

						<div class="footer-contact-block">
							<div class="icon d-flex align-items-center">
								<i class="icofont-support mr-3"></i>
								<span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
							</div>
							<h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-btm py-4 mt-5">
				<div class="row align-items-center justify-content-between">
					<div class="col-lg-6">
						<div class="copyright">
							Copyright &copy; 2021, Designed &amp; Developed by <a href="https://DigiMed365.com/">DigiMed365</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="subscribe-form text-lg-right mt-5 mt-lg-0">
							<form action="#" class="subscribe">
								<input type="text" class="form-control" placeholder="Your Email address" required>
								<button type="submit" class="btn btn-main-2 btn-round-full">Subscribe</button>
							</form>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<a class="backtop scroll-top-to" href="#top">
							<i class="icofont-long-arrow-up"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- 
    Essential Scripts
    =====================================-->
	<script src="plugins/jquery/jquery.js"></script>
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<script src="plugins/slick-carousel/slick/slick.min.js"></script>
	<script src="plugins/shuffle/shuffle.min.js"></script>

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA"></script>
	<script src="plugins/google-map/gmap.js"></script>

	<script src="js/script.js"></script>

</body>

</html>