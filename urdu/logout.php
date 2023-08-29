<?php
session_start();
if(isset($_SESSION['user_id'])) {
    session_unset();
    session_destroy();
    ?>
    <script>
        window.location.assign('login.php');
    </script>
    <?php
}
?>