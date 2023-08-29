<!-- header Start -->
<?php
session_start();
include('layout/header.php');
?>
<!-- header ends -->
<!-- begin main content -->
<section class="section confirmation">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
          <div class="confirmation-content text-center">
            <i class="icofont-check-circled text-lg text-color-2"></i>
              <h2 class="mt-3 mb-4">Thank you for your appointment</h2>
              <p>We will contact with you soon.</p>
              <?php	
								if (isset($_SESSION['user_id'])) {
									?>
									<a href="user-dashboard/dashboard.php" class="btn btn-main btn-round-full">Check Your Appointment Details</a>
									<?php
								} else {
									?>
									<a href="login.php" class="btn btn-main btn-round-full">Check Your Appointment Details</a>
									<?php
								}
								
							?>
          </div>
      </div>
    </div>
  </div>
</section>
<!-- end main content -->
<!-- footer Start -->
<?php
include('layout/footer.php');
?>
<!-- footer ends -->