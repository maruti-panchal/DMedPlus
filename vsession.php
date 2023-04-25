<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("Location: volunteer_log.php");
    }

?>