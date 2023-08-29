<!-- header Start -->
<?php
session_start();
include('layout/header.php');
include('config.php');
?>
<?php
if (isset($_POST['submit'])) {
	$fullname = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$contact = "INSERT INTO `contact`( `fullname`, `email`, `topic`, `phone`, `message`) VALUES ('$fullname','$email','$subject','$phone','$message')";
	$result = $conn->query($contact);

	if ($result == true) {
		?>
		<script>
			window.alert("Thankyou! Your Message has been successfully sent")
			window.location.assign('contact.php');
		</script>
		<?php
	} else {
		?>
		<script>
			window.alert("Oops! something went wrong, please try again");
		</script>
		<?php
	}
	
	
}

?>
<!-- header ends -->
<!-- begin main content -->
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">DigiMed365</span>
          <h1 class="text-capitalize mb-5 text-lg"> رابطہ کریں۔</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->

	<section class="section contact-info pb-0">
	<div class="container">
		<div class="row">
		<div class="col-lg-4 col-md-6">
			<div class="contact-block mb-4 mb-lg-0">
			<i class="icofont-live-support"></i>
			<h5>کال</h5>
			+92 3152288535
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="contact-block mb-4 mb-lg-0">
			<i class="icofont-support-faq"></i>
			<h5>ای میل</h5>
			support@digimed365.com
			</div>
		</div>
		<div class="col-lg-4 col-md-12">
			<div class="contact-block mb-4 mb-lg-0">
			<i class="icofont-location-pin"></i>
			<h5>پتہ</h5>
			Karachi,Pakistan
			</div>
		</div>
		</div>
	</div>
	</section>

	<section class="contact-form-wrap section">
	<div class="container">
		<div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="section-title text-center">
			<h2 class="text-md mb-2">رابطہ کریں</h2>
			<div class="divider mx-auto my-4"></div>
			<p class="mb-5">سوالات ہیں یا مدد کی ضرورت ہے؟ فوری اور قابل اعتماد مدد اور معلومات کے لیے آج ہی ہم سے رابطہ کریں۔</p>
			</div>
		</div>
		</div>
		<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<form id="contact-form" class="contact__form " method="POST" action="contact.php">
			<!-- form message -->

			<div class="row">
				<div class="col-lg-6">
				<div class="form-group">
					<input name="name" id="name" type="text" class="form-control" placeholder="Your Full Name">
				</div>
				</div>

				<div class="col-lg-6">
				<div class="form-group">
					<input name="email" id="email" type="email" class="form-control" placeholder="Your Email Address" required>
				</div>
				</div>
				<div class="col-lg-6">
				<div class="form-group">
					<input name="subject" id="subject" type="text" class="form-control" placeholder="Your Topic" required>
				</div>
				</div>
				<div class="col-lg-6">
				<div class="form-group">
					<input name="phone" id="phone" type="text" class="form-control" placeholder="Your Phone Number" required>
				</div>
				</div>
			</div>

			<div class="form-group-2 mb-4">
				<textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message" required></textarea>
			</div>

			<div>
				<input class="btn btn-main btn-round-full" name="submit" type="submit" value="پیغام بھیجیں"></input>
			</div>
			</form>
		</div>
		</div>
	</div>
	</section>


	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14486.035382164167!2d67.1171288!3d24.8122664!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33b7680aed395%3A0x21d3c8026afe14ce!2sInstitute%20of%20Business%20Management!5e0!3m2!1sen!2s!4v1687552261331!5m2!1sen!2s" width="1920" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<!-- end main content -->
<!-- footer Start -->
<?php
include('layout/footer.php');
?>
<!-- footer ends -->