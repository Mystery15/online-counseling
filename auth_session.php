<?php
session_start();
if (!isset($_SESSION["mat_num"])) {
    header("location:login.php");
    exit();
}
?>