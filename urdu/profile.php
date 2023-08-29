<!-- header Start -->
<?php
session_start();
include('layout/header.php');
include('config.php');
$loggedin_user = $_SESSION['user_id'];
$fetch = "SELECT * FROM `users` WHERE `user_id` = '$loggedin_user'";
$result = $conn->query($fetch);
$data = $result->fetch_assoc();
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
          <h1 class="text-capitalize mb-5 text-lg">User Profile Info</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">All Department</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-form-wrap section">
		<div class="container">			
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">

					<form id="contact-form" class="contact__form " method="POST" action="">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
                                    <label for="fullname">FullName</label>
									<input name="fullname" id="fullname" type="text" class="form-control" value="<?php echo($data['fullname']); ?>">
									<input name="id" id="fullname" type="hidden" class="form-control" value="<?php echo($data['user_id']); ?>">

								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
								<label for="email">Email</label>
									<input name="email" id="email" type="email" class="form-control" value="<?php echo($data['email']); ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="password">Password</label>
									<input name="password" id="password" type="text" class="form-control" value="<?php echo($data['password']); ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="phone">Phone</label>
									<input name="phone" id="phone" type="text" class="form-control" value="<?php echo($data['phone']); ?>">
								</div>
							</div>
						</div>

						<div style="text-align: center;">
							<input class="btn btn-main btn-round-full" name="update" type="submit" value="Update My Profile"></input>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
<?php
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];

	$update = "UPDATE `users` SET `user_id`='$id',`fullname`='$fullname',`email`='$email',`password`='$password',`phone`='$phone' WHERE `user_id`='$id' ";
	$update_result = $conn->query($update);

	if ($update_result) {
		?>
		<script>
			window.alert("Your Profile has been Updated");
		</script>
		<?php
	} else {
		?>
		<script>
			window.alert("Oops! An Error Occured, Please Try Again.");
		</script>
		<?php
	}
	
}

?>
<!-- end main content -->
<!-- footer Start -->
<?php
include('layout/footer.php');
?>
<!-- footer ends -->    