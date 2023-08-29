<?php
session_start();
include_once "config.php";
$user_id = $_SESSION['user_id'];
$sql = mysqli_query($conn, "SELECT * FROM appointments WHERE user_id = '{$user_id}'");
$cnt = 1;
$output = '';
if(mysqli_num_rows($sql) == 0){
    $output .= '
    <div class="noresult">
        <div class="text-center">
            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
            </lord-icon>
            <h5 class="mt-2">معذرت! کوئی نتیجہ نہیں ملا</h5>
            <p class="text-muted mb-0">ہم نے آپ کے لئے کوئی ڈاکٹر نہیں تلا</p>
        </div>
    </div>
    ';
}elseif(mysqli_num_rows($sql) > 0){
    include 'chat-data.php';
}
echo $output ;
?>