<?php
session_start();
unset($_SESSION["mat_num"]);
unset($_SESSION["first"]);
header("Location:login.php");
?>