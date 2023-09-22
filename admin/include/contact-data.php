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
            <h5 class="fs-14 mb-1"><a href="#" class="link name text-dark">'.$row['fullname'].'</a></h5>
        </div>
    </td>
    <td>
        <div class="flex-grow-1">
            <h5 class="fs-14 mb-1"><a href="#" class="link name text-dark">'.$row['email'].'</a></h5>
        </div>
    </td>
    <td>'.$row['topic'].'</td>
    <td>'.$row['phone'].'</td>
    <td>'.$row['message'].'</td>
    <td>
        <div class="d-flex gap-2">
            <div class="remove">
                <a href="contact.php?id='.$row['id'].'&del=delete" onClick="return confirm("Are you sure you want to delete?")" class="btn btn-sm btn-danger remove-item-btn">Remove</a>
            </div>
        </div>
    </td>
</tr>
    ';

    $cnt=$cnt+1;
}
?>