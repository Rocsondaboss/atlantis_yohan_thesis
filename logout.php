<?php
session_start();
unset($_SESSION["adminID"]);
unset($_SESSION["adminUserName"]);
header("Location:passengersProfilelogin.php");
?>