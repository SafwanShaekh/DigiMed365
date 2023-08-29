<!-- header Start -->
<?php
session_start();
include('layout/header.php');
include('config.php');
$msg = "";
$user_id = $_SESSION['user_id'];
if (isset($_POST['submit'])) {
  $dept_name = mysqli_real_escape_string($conn, $_POST['dept']);
  $doc_name = mysqli_real_escape_string($conn, $_POST['doc']);
  $date = mysqli_real_escape_string($conn, $_POST['date']);
  $time = mysqli_real_escape_string($conn, $_POST['time']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);
  $user_id = mysqli_real_escape_string($conn, $user_id);


  if (!empty($dept_name) && !empty($doc_name) && !empty($date) && !empty($time) && !empty($name) && !empty($phone) && !empty($message) && !empty($user_id)) {
    
    $query = "INSERT INTO `appointments`(`dept`, `doctor`, `appointment_date`, `appointment_time`, `fullname`, `phone`, `message`, `user_id`) 
          VALUES ('$dept_name', '$doc_name', '$date', '$time', '$name', '$phone', '$message', '$user_id')";


    $result = $conn->query($query);

    if ($result == true) {
      ?>
      <script>
        window.location.href = 'form-success.php';
      </script>
      <?php
    }else {
      $msg = '<div class="alert alert-danger" role="alert">
                    <strong> Something went WRONG!!! </strong>
                </div>';
                header('location: appointments.php');
    }

  } else {
    $msg = '<div class="alert alert-danger" role="alert">
              <strong> All inputs are required </strong>
            </div>';
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
          <h1 class="text-capitalize mb-5 text-lg">appointment</h1>


          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="appointment section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="mt-3">
          <div class="feature-icon mb-3">
            <i class="icofont-support text-lg"></i>
          </div>
          <span class="h3">Call for an Emergency Service!</span>
          <h2 class="text-color mt-3">+92 3152288535</h2>
        </div>
      </div>

      <div class="col-lg-8">
        <div class="appointment-wrap mt-5 mt-lg-0 pl-lg-5">
          <h2 class="mb-2 title-color">Book an appointment</h2>
          <p class="mb-4">Experienced healthcare professionals at your service just a click away</p>
         <?php echo ($msg); ?>
          <form id="#" class="appointment-form" method="POST" action="appointments.php">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">

                  <select class="form-control" id="exampleFormControlSelect1" name="dept">
                    <option>Choose a Department</option>
                    <?php
                    $fetch_dept = "SELECT dept_name FROM `departments`";
                    $result = $conn->query($fetch_dept);
                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {

                    ?>
                        <option><?php echo ($row['dept_name']); ?></option>
                    <?php

                      }
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect2" name="doc">
                    <option>Choose a Doctor</option>
                    <?php
                    $fetch_dept = "SELECT doctor_name FROM `doctors`";
                    $result = $conn->query($fetch_dept);
                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {

                    ?>
                        <option><?php echo ($row['doctor_name']); ?></option>
                    <?php

                      }
                    }
                    ?>
                  </select>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <input name="date" id="date" type="date" class="form-control" placeholder="dd/mm/yyyy">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <input name="time" id="time" type="time" class="form-control" placeholder="Time">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input name="name" id="name" type="text" class="form-control" placeholder="Full Name">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <input name="phone" id="phone" type="Number" class="form-control" placeholder="Phone Number">
                </div>
              </div>
            </div>
            <div class="form-group-2 mb-4">
              <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
            </div>
            <input type="submit" class="btn btn-main btn-round-full" name="submit" value="Book Appointment">
          </form>
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