<!-- header Start -->
<?php
session_start();
include('layout/header.php');
include('config.php');
?>
<?php
if (isset($_GET['id'])) {
    $dept_id = $_GET['id'];
    $fetch = "SELECT * FROM `laboritories` WHERE `lab_id` = '$dept_id'";
    $result = $conn->query($fetch);
    $row = $result->fetch_assoc(); 
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
          <span class="text-white">Department Details</span>
          <h1 class="text-capitalize mb-5 text-lg"><?php echo ($row['lab_name']);	?></h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Department Details</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section department-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="department-img">
					<img src="uploads/<?php echo $row['logo_image']; ?>" alt="" class="img-fluid">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="department-content mt-5">
					<h3 class="text-md"><?php echo ($row['lab_name']);	?></h3>
					<div class="divider my-4"></div>
                    <h4>INTRO:</h4>
					<p><?php echo ($row['lab_Description']);	?></p>
                    <h4>Address:</h4>
					<p><?php echo ($row['lab_address']);	?></p>
                    <h4>Email:</h4>
					<p><?php echo ($row['lab_email']);	?></p>
                    <h4>Contact:</h4>
					<p><?php echo ($row['lab_phone']);	?></p>

					<!-- <h3 class="mt-5 mb-4">Services features at DigiMed365</h3>
					<div class="divider my-4"></div>
					<ul class="list-unstyled department-service">
						<li><i class="icofont-check mr-2"></i>International Drug Database</li>
						<li><i class="icofont-check mr-2"></i>Stretchers and Stretcher Accessories</li>
						<li><i class="icofont-check mr-2"></i>Cushions and Mattresses</li>
						<li><i class="icofont-check mr-2"></i>Cholesterol and lipid tests</li>
						<li><i class="icofont-check mr-2"></i>Critical Care Medicine Specialists</li>
						<li><i class="icofont-check mr-2"></i>Emergency Assistance</li>
					</ul> -->
					<?php	
								if (isset($_SESSION['user_id'])) {
									?>
									<a href="appointments.php" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Make
								appointment <i class="icofont-simple-right ml-2  "></i></a>
									<?php
								} else {
									?>
									<a href="login.php" class="btn btn-main-2 btn-icon btn-round-full">Make
								appointment <i class="icofont-simple-right ml-2  "></i></a>
									<?php
								}
								
							?>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="sidebar-widget schedule-widget mt-5">
					<h5 class="mb-4">Time Schedule</h5>

					<ul class="list-unstyled">
					  <li class="d-flex justify-content-between align-items-center">
					    <span>Monday - Friday</span>
					    <span>9:00 - 17:00</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <span>Saturday</span>
					    <span>9:00 - 16:00</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <span>Sunday</span>
					    <span>Closed</span>
					  </li>
					</ul>

					<div class="sidebar-contatct-info mt-4">
						<p class="mb-0">Need Urgent Help?</p>
						<h3>+92 3152288535</h3>
					</div>
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