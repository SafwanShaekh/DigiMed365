<?php
while ($row = mysqli_fetch_assoc($sql)) {
        $output .= '
        <tr>
            <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
            <td class="p-3">'.$cnt.'.</td>
            <td>
                <div class="flex-grow-1">
                    <h5 class="fs-14 mb-1"><a href="#" class="link name text-dark">'.$row['fullname'].'</a></h5>
                </div>
            </td>
            <td>
                <div class="flex-grow-1">
                    <h5 class="fs-14 mb-1"><a href="#" class="link name text-dark">'.$row['dept'].'</a></h5>
                </div>
            </td>
            <td>
                <div class="flex-grow-1">
                    <h5 class="fs-14 mb-1"><a href="#" class="link name text-dark">'.$row['appointment_date'].'</a></h5>
                </div>
            </td>
            <td>
                <div class="flex-grow-1">
                    <h5 class="fs-14 mb-1"><a href="#" class="link name text-dark">'.$row['appointment_time'].'</a></h5>
                </div>
            </td>
            <td>'.$row['phone'].'</td>
            <td>
                <div class="flex-grow-1">
                    <h5 class="fs-14 mb-1"><a href="#" class="link name text-dark">'.$row['message'].'</a></h5>
                </div>
            </td>
            <td>
                <div class="d-flex gap-2">
                    <div class="remove">
                        <a href="manage-patients.php?del='.$row['id'].'" onClick="return confirm(\'Are you sure you want to delete?\')" class="btn btn-sm btn-danger remove-item-btn">Remove</a>
                    </div>
                </div>
            </td>
        </tr>
        ';

        $cnt = $cnt + 1;
    }
?>