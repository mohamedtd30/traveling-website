<?php
    session_start();
    session_destroy();
    header("Location: http://localhost/try/login/index.php");
    exit();
?>