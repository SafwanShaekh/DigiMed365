<!-- header Start -->
<?php
session_start();    
include('config.php');
include('layout/header.php');
$fetch = "SELECT * FROM `appointments`";
$result = $conn->query($fetch);
?>
<!-- header ends -->
<!-- begin main content -->
<div class="container">
    <div class="spacer">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Department</th>
              <th scope="col">Doctor</th>
              <th scope="col">Date</th>
              <th scope="col">Time</th>
            </tr>
          </thead>
          <tbody>
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {

        ?>
            <tr>
              <td><?php echo $row['id'] ?></td>
              <td><?php echo $row['dept'] ?></td>
              <td><?php echo $row['doctor'] ?></td>
              <td><?php echo $row['appointment_date'] ?></td>
              <td><?php echo $row['appointment_time'] ?></td>
              
            </tr>
        <?php

          }
        }
        ?>
      </tbody>
        </table>
    </div>
</div>
<!-- end main content -->
<!-- footer Start -->
<?php
include('layout/footer.php');
?>
<!-- footer ends -->