<?php
while($row = mysqli_fetch_assoc($sql)){
    $output .= '<a href="chat.php?user_id='.$row['user_id'].'">
                    <div class="content">
                        <div class="details">
                            <span>'. $row['fullname'].'</span>
                        </div>
                    </div>
                </a>';
}
?>