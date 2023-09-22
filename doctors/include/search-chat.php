<?php
session_start();
include_once "config.php";
$doctor_name = $_SESSION['dname'];
if (isset($_POST['searchTerm'])) {
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $sql = mysqli_query($conn, "SELECT * FROM appointments WHERE doctor = '{$doctor_name}' AND fullname LIKE '%{$searchTerm}%'");
} else {
    $sql = mysqli_query($conn, "SELECT * FROM appointments WHERE doctor = '{$doctor_name}'");
}

$cnt = 1;
$output = '';

if (mysqli_num_rows($sql) == 0) {
    $output .= '
    <div class="noresult">
        <div class="text-center">
            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
            </lord-icon>
            <h5 class="mt-2">Sorry! No Result Found</h5>
            <p class="text-muted mb-0">We did not find any patients for you according to your alphabets.</p>
        </div>
    </div>
    ';
} elseif (mysqli_num_rows($sql) > 0) {
    include 'chat-data.php';
}

echo $output;
?>
