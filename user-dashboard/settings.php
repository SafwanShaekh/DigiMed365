<?php
include('layout/header.php');
include('../config.php');
$msg="";
$fullname = $_SESSION['user_name'];
$fetch = "select * from users where `fullname`='$fullname'";

$result = $conn->query($fetch);
$row = $result->fetch_assoc();

$pass = $row['password'];
if (isset($_POST['passSub'])) {
    $op = $_POST['oldPass'];
    $np = $_POST['newpassword'];
    $ncp = $_POST['confNewPass'];

    if (!empty($op) && !empty($np) && !empty($ncp)) {
        if ($op == $pass) {
            if ($np === $ncp) {
                $updatePass = mysqli_query($conn, "UPDATE users SET password = '{$np}' WHERE fullname = '{$fullname}'");
                if ($updatePass == true) {
                    $msg = '<div class="alert alert-success" role="alert">
                                                <strong> Updated Successfully!!!</strong> 
                                            </div>';
                                            header('location: setting.php');
                } else {
                    $msg = '<div class="alert alert-danger" role="alert">
                    <strong> Something went WRONG!!! </strong>
                </div>';
                header('location: setting.php');
                }
            } else {
                $msg = '<div class="alert alert-danger" role="alert">
                            <strong> Confirm Password not match to New Password!!! Please Try again </strong>
                        </div>';
                header('location: setting.php');
            }
        } else {
            $msg = '<div class="alert alert-danger" role="alert">
                        <strong> Please write a correct OLD PASSWORD!!! </strong>
                    </div>';
                    header('location: setting.php');
        }
    } else {
        $msg = '<div class="alert alert-danger" role="alert">
                        <strong> All inputs are required </strong>
                    </div>';
                    header('location: setting.php');
    }

    
}

?>
<!-- main content begins here -->
<div class="main-content">
<div class="page-content">
                <div class="container-fluid">

                    <div class="position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg profile-setting-img">
                            <img src="assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="card mt-n5">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                            <img src="assets/images/users/user-dummy.jpg" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                                        </div>
                                        <h5 class="fs-17 mb-1"><?php echo($_SESSION['user_name']) ?></h5>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-5">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-0">Complete Your Profile</h5>
                                        </div>
                                        
                                    </div>
                                    <div class="progress animated-progress custom-progress progress-label">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            <div class="label">100%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    </div>
                        <!--end col-->
                        <div class="col-xxl-9">
                            <div class="card mt-xxl-n5">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="true">
                                                <i class="fas fa-home"></i>
                                                Personal Details
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab" aria-selected="false" tabindex="-1">
                                                <i class="far fa-user"></i>
                                                Change Password
                                            </a>
                                        </li>
                                        
                                        
                                    </ul>
                                </div>
                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                            <form action="" method="POST">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <?php echo($msg);?>
                                                            <label for="firstnameInput" class="form-label">FullName</label>
                                                            <input type="text" name="fullname" class="form-control" id="firstnameInput" placeholder="Enter your firstname" value="<?php echo($row['fullname']);?>">
                                                            <input style="display: none;" type="text" name="userid" class="form-control"  id="firstnameInput" placeholder="Enter your firstname" value="<?php echo($row['user_id']);?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="phonenumberInput" class="form-label">Phone
                                                                Number</label>
                                                            <input type="text" name="phone" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="<?php echo($row['phone']);?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Email
                                                                Address</label>
                                                            <input type="email" name="email" class="form-control" id="emailInput" placeholder="Enter your email" value="<?php echo($row['email']);?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                   
                                                    
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="designationInput" class="form-label">CNIC No</label>
                                                            <input type="text" name="cnic" class="form-control" id="designationInput" placeholder="Designation" value="<?php echo($row['cnic']);?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="websiteInput1" class="form-label">Town</label>
                                                            <input type="text" name="town" class="form-control" id="websiteInput1" placeholder="Jamshed Town" value="<?php echo($row['town']);?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="cityInput" class="form-label">City</label>
                                                            <input type="text" name="city" class="form-control" id="cityInput" placeholder="City" value="<?php echo($row['city']);?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="countryInput" class="form-label">Country</label>
                                                            <input type="text" name="country" class="form-control" id="countryInput" placeholder="Country" value="<?php echo($row['country']);?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="zipcodeInput" class="form-label">Zip
                                                                Code</label>
                                                            <input type="text" name="zipcode" class="form-control" minlength="5" maxlength="6" id="zipcodeInput" placeholder="Enter zipcode" value="<?php echo($row['zipcode']);?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="mb-3 pb-2">
                                                            <label for="exampleFormControlTextarea" class="form-label">Describe Your Medical Issue</label>
                                                            <textarea class="form-control" name="about" id="exampleFormControlTextarea" placeholder="Enter your Medical Issue" rows="3"><?php echo($row['about']);?></textarea>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                        <?php echo ($msg) ?>
                                                            <button type="submit" name="update"class="btn btn-primary">Update Info</button>
                                                            <a href="profile.php">
                                                                <button type="button" class="btn btn-soft-success">Cancel</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                        <!--end tab-pane-->
                                        <div class="tab-pane" id="changePassword" role="tabpanel">
                                            <?php echo $msg;?>
                                            <form action="" method="POST">
                                                <div class="row g-2">
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <label for="oldpasswordInput" class="form-label">Old
                                                                Password*</label>
                                                            <input type="password" class="form-control" name="oldPass" id="oldpasswordInput" placeholder="Enter current password">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <label for="newpasswordInput" class="form-label">New
                                                                Password*</label>
                                                            <input type="password" name="newpassword" class="form-control" id="newpasswordInput" placeholder="Enter new password">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <label for="confirmpasswordInput" class="form-label">Confirm
                                                                Password*</label>
                                                            <input type="password" name="confNewPass" class="form-control" id="confirmpasswordInput" placeholder="Confirm password">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="text-end">
                                                            <button type="submit" name="passSub" class="btn btn-success">Change
                                                                Password</button>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                        <!--end tab-pane-->
                                        
                                                                          </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
</div>
<!-- main content ends here -->
<?php
include('layout/footer.php');
if (isset($_POST['update'])) {
    $userid = $_POST['userid'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $cnic = $_POST['cnic'];
    $town = $_POST['town'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $zipcode = $_POST['zipcode'];
    $about = $_POST['about'];    

    $update = "UPDATE `users` SET `user_id`='$userid',`fullname`='$fullname',`email`='$email',`phone`='$phone',`cnic`='$cnic',`town`='$town',`city`='$city',`country`='$country',`zipcode`='$zipcode',`about`='$about' WHERE `user_id`='$userid'";
    $update_result = $conn->query($update);

    if ($update_result==true) {
        $msg = '<div class="alert alert-success" role="alert">
                                                <strong> Info Updated Successfully!!!</strong> 
                                            </div>';
    } else {
        $msg = '<div class="alert alert-danger" role="alert">
                                                <strong> Oops! Something went wrong! Please  try again. </strong>
                                            </div>';
    }
    
}

if (isset($_POST['password'])) {
   $password = $_POST['newpassword'];
   $confirmpassword = $_POST['newpasswordconfirm'];
   if (!empty($password) && !empty($confirmpassword) && $password == $confirmpassword) {
    $update = "UPDATE `users` SET `password`='$password' WHERE `user_id`='$userid'";
    $update_result = $conn->query($update);

    if ($update_result==true) {
        $msg = '<div class="alert alert-success" role="alert">
                                                <strong> Password Updated Successfully!!!</strong> 
                                            </div>';
    } else {
        $msg = '<div class="alert alert-danger" role="alert">
                                                <strong> Oops! Something went wrong! Please  try again. </strong>
                                            </div>';
    }
   } else {
    $msg = '<div class="alert alert-danger" role="alert">
                                            <strong> Oops! Something went wrong! Please  try again. </strong>
                                        </div>';
}
   
}
?>