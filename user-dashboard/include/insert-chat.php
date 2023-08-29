<?php
session_start();
include_once "config.php";

// Insert Message
if (isset($_SESSION['user_id'])) {
    $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if (!empty($message)) {
        $sql = mysqli_query($conn, "INSERT INTO messages (outgoing_msg_id, incoming_msg_id, msg)
                                    VALUES ({$outgoing_id}, {$incoming_id}, '{$message}')");
        
        if ($sql) {
            echo "Message sent successfully.";
        } else {
            echo "Error sending message: " . mysqli_error($conn);
        }
    }
}
?>
