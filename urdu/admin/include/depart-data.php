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
        <div class="flex-grow-1">
            <h5 class="fs-14 mb-1"><a href="#" class="link name text-dark">'.$row['dept_name'].'</a></h5>
        </div>
    </td>
    <td>'.$row['dept_description'].'</td>
    <td>
        <div class="d-flex gap-2">
            <div class="edit">
                <a href="edit-department.php?id='.$row['dept_id'].'" class="btn btn-sm btn-success edit-item-btn">Edit</a>
            </div>  
            <div class="remove">
                <a href="manage-departments.php?id='.$row['dept_id'].'&del=delete" onClick="return confirm("Are you sure you want to delete?")" class="btn btn-sm btn-danger remove-item-btn">Remove</a>
            </div>
        </div>
    </td>
</tr>
    ';

    $cnt=$cnt+1;
}
?>