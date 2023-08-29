<?php
while($row = mysqli_fetch_assoc($sql)){
    $output .= '<a href="chat.php?doctor_name='.$row['doctor'].'">
                    <div class="content">
                        <div class="details">
                            <span>'. $row['doctor'].'</span>
                        </div>
                    </div>
                </a>';
}
?>