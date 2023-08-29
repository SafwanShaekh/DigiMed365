<?php
$cnt = 1;
while($row = mysqli_fetch_assoc($sql)){
    $output .= '
    <tr>
    <td class="id" style="display:none;"><a
            href="javascript:void(0);"
            class="fw-medium link-primary">#VZ2101</a>
    </td>
    <td class="p-3">'.$cnt.'.</td>
    <td>
        <div style="display: block;position: relative;width: 60px;height: 60px;overflow: hidden;border-radius: 6px;">
            <img class="image avatar-sm rounded-circle" style="width: 85%;object-fit: cover;object-position: center;" alt="" src="../doctor_admin/uploads/' .$row['doctor_image'].'">
        </div>
    </td>
    <td>
        <div class="flex-grow-1">
            <h5 class="fs-14 mb-1"><a href="#" class="link name text-dark">'.$row['doctor_name'].'</a></h5>
            <p class="born timestamp text-muted mb-0" data-timestamp="12345">'.$row['doctor_email'].'</p>
        </div>
    </td>
    <td>'.$row['doctor_password'].'</td>
    <td>'.$row['doctor_specialization'].'</td>
    <td>'.$row['surgeries_completed'].'</td>
    <td>'.$row['count_of_satisfied_patients'].'</td>
    <td>
        <div class="d-flex gap-2">
            <div class="edit">
                <a href="edit-doctors.php?id='.$row['id'].'" class="btn btn-sm btn-success edit-item-btn">Edit</a>
            </div>  
            <div class="remove">
                <a href="manage-doctors.php?id='.$row['id'].'&del=delete" onClick="return confirm("Are you sure you want to delete?")" class="btn btn-sm btn-danger remove-item-btn">Remove</a>
            </div>
        </div>
    </td>
</tr>
    ';

    $cnt=$cnt+1;
}
?>