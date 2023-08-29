<?php
session_start();
include_once "config.php";
$sql = mysqli_query($conn, "SELECT * FROM departments");
$cnt = 1;
$output = '';
if(mysqli_num_rows($sql) == 0){
    $output .= '
    <div class="noresult" style="display: none">
        <div class="text-center">
            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
            </lord-icon>
            <h5 class="mt-2">Sorry! No Result Found</h5>
            <p class="text-muted mb-0">We did not find any
                doctors for you.</p>
        </div>
    </div>
    ';
}elseif(mysqli_num_rows($sql) > 0){
    include 'depart-data.php';
}
echo $output ;
?>