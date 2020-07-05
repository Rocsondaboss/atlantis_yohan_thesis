<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["firstName"]);
header("Location:balance.php");
?>