<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
include_once "include/config.php";

if (empty($_SESSION['id'])) {
    header('location:logout.php');
    exit();
} else {
    $did = mysqli_real_escape_string($conn, $_GET['id']);

    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['labName']);
        $email = mysqli_real_escape_string($conn, $_POST['labEmail']);
        $phone = mysqli_real_escape_string($conn, $_POST['labPhone']);
        $address = mysqli_real_escape_string($conn, $_POST['labAddress']);
        $introduction = mysqli_real_escape_string($conn, $_POST['labIntro']);

        $img_name = '';
        if (isset($_FILES['doctoravatar']) && $_FILES['doctoravatar']['size'] > 0) {
            $img_name = $_FILES['doctoravatar']['name'];
            $img_size = $_FILES['doctoravatar']['size'];
            $tmp_name = $_FILES['doctoravatar']['tmp_name'];

            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);

            $extensions = ['png', 'jpeg', 'jpg'];
            if (in_array($img_ext, $extensions)) {
                if ($img_size > 5242880) {
                    $_SESSION['errmsg'] = "File size should be less than 5MB";
                } else {
                    $time = time();

                    $new_img_name = $time . $img_name;

                    $upload_path = '../uploads/' . $new_img_name;
                    if (move_uploaded_file($tmp_name, $upload_path)) {
                        // delete the previous image if a new image is uploaded
                        $sql = mysqli_query($conn, "SELECT logo_image FROM laboritories WHERE lab_id = '{$did}'");
                        $row = mysqli_fetch_assoc($sql);
                        if (!empty($row['logo_image'])) {
                            unlink('../uploads/' . $row['logo_image']);
                        }

                        $update_query = "UPDATE laboritories SET lab_name='{$name}', lab_email='{$email}', lab_phone='{$phone}', lab_address='{$address}', lab_Description='{$introduction}', logo_image='{$new_img_name}' WHERE lab_id = '{$did}'";
                        $sql = mysqli_query($conn, $update_query);

                        if ($sql) {
                            $_SESSION['msg'] = "Data updated successfully!";
                            header('Location: manage-labs.php');
                            exit();
                        } else {
                            $_SESSION['errmsg'] = "Something went wrong!!!";
                        }
                    }
                }
            } else {
                $_SESSION['errmsg'] = "Please select an Image file - jpeg, jpg, png";
            }
        } else {
            $update_query = "UPDATE laboritories SET lab_name='{$name}', lab_email='{$email}', lab_phone='{$phone}', lab_address='{$address}', lab_Description='{$introduction}' WHERE id = '{$did}'";
            $sql = mysqli_query($conn, $update_query);

            if ($sql) {
                $_SESSION['msg'] = "Data updated successfully!";
                header('Location: manage-labs.php');
                exit();
            } else {
                $_SESSION['errmsg'] = "Something went wrong!!!";
            }
        }
    }
}
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover"
    data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="OpenAI" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        crossorigin="anonymous" />

    <title>Edit Lab</title>
</head>

<body>
    <div class="container mt-5">
        <?php
        if (isset($_SESSION['errmsg'])) {
            echo '<div class="alert alert-danger">' . $_SESSION['errmsg'] . '</div>';
            unset($_SESSION['errmsg']);
        }
        ?>
        <form action="edit-lab.php?id=<?php echo $did; ?>" method="post" enctype="multipart/form-data">
            <?php
            $select_query = "SELECT * FROM laboritories WHERE lab_id = '{$did}'";
            $sql = mysqli_query($conn, $select_query);
            $row = mysqli_fetch_assoc($sql);
            ?>
            <div class="form-group">
                <label for="labName">Lab Name</label>
                <input type="text" class="form-control" id="labName" name="labName" value="<?php echo $row['lab_name']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="labEmail">Email address</label>
                <input type="email" class="form-control" id="labEmail" name="labEmail" value="<?php echo $row['lab_email']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="labPhone">Phone Number</label>
                <input type="text" class="form-control" id="labPhone" name="labPhone" value="<?php echo $row['lab_phone']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="labAddress">Address</label>
                <textarea class="form-control" id="labAddress" name="labAddress" rows="3"
                    required><?php echo $row['lab_address']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="labIntro">Introduction</label>
                <textarea class="form-control" id="labIntro" name="labIntro" rows="3"
                    required><?php echo $row['lab_Description']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="labAvatar">Upload Logo</label>
                <input type="file" class="form-control-file" id="labAvatar" name="doctoravatar">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</body>

</html>
