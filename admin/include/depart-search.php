<?php
include_once "config.php";
$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
$output = "";
$sql = mysqli_query($conn, "SELECT * FROM departments WHERE dept_name LIKE '%{$searchTerm }%'");
if(mysqli_num_rows($sql) > 0){
    include "depart-data.php";
}else{
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
    ';;
}

echo $output;

?>