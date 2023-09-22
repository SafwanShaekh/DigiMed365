<!-- header Start -->
<?php
session_start();
include('layout/header.php');
include('config.php');
?>
<?php
$fetch = "SELECT * FROM `doctors`";
$result = $conn->query($fetch);

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
          <h1 class="text-capitalize mb-5 text-lg">Specalized doctors</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">All Doctors</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>


<!-- portfolio -->
<section class="section doctors">
  <div class="container">
  	  <div class="row justify-content-center">
             <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Doctors</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Here at DigiMed365, we have the best HealthCare Professionals of the Industry to takecare of you 🏥</p>
                </div>
            </div>
        </div>

      <!-- ... -->
<div class="col-12 text-center  mb-5">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn active">
            <input type="radio" name="shuffle-filter" value="all" checked="checked">All
        </label>
        <?php
        // Fetch specializations from the specialization table
        $fetchSpecializations = "SELECT * FROM doctorspecilization";
        $resultSpecializations = $conn->query($fetchSpecializations);

        if ($resultSpecializations->num_rows > 0) {
            while ($rowSpecializations = $resultSpecializations->fetch_assoc()) {
                $specialization = $rowSpecializations['specilization'];
                ?>
                <label class="btn">
                    <input type="radio" name="shuffle-filter" value="<?php echo $specialization; ?>"><?php echo $specialization; ?>
                </label>
                <?php
            }
        }
        ?>
    </div>
</div>
<!-- ... -->


  <!-- ... -->
<div class="row shuffle-wrapper portfolio-gallery shuffle user-data" style="position: relative; overflow: hidden; height: 1113px; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1) 0s;">
<?php
while ($row = $result->fetch_assoc()) {
  $doctor_name = $row['doctor_name'];
  $doctor_specialization = $row['doctor_specialization'];
  $doctor_image = $row['doctor_image'];
  $doctor_id = $row['id'];
  ?>
  <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible" data-groups="[&quot;<?php echo $doctor_specialization; ?>&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
    <div class="position-relative doctor-inner-box">
      <div class="doctor-profile">
        <div class="doctor-img">
          <img src="doctors/uploads/<?php echo $doctor_image; ?>" alt="doctor-image" class="img-fluid w-100">
        </div>
      </div>
      <div class="content mt-3">
        <h4 class="mb-0"><a href="doctor-details.php?doctor-id=<?php echo $doctor_id;?>"><?php echo $doctor_name; ?></a></h4>
        <p><?php echo $doctor_specialization; ?></p>
      </div> 
    </div>
  </div>
  <?php
}
?>
</div>
<!-- ... -->


</section>
<!-- /portfolio -->
<section class="section cta-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="cta-content">
					<div class="divider mb-4"></div>
					<h2 class="mb-5 text-lg">We are pleased to offer you the <span class="title-color">chance to have the healthy</span></h2>
					<?php	
								if (isset($_SESSION['user_id'])) {
									?>
									<a href="appointments.php" class="btn btn-main btn-round-full">Get an appointment</a>
									<?php
								} else {
									?>
									<a href="login.php" class="btn btn-main btn-round-full">Get an appointment</a>
									<?php
								}
								
							?>				</div>
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