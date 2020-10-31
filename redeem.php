<?php
session_start();
?>



<!DOCTYPE html>
<!-- saved from url=(0051)https://v4-alpha.getbootstrap.com/examples/navbars/ -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://v4-alpha.getbootstrap.com/favicon.ico">

    <title>Navbar Template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbars/">

    <!-- Bootstrap core CSS -->
    <link href="./Navbar Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./Navbar Template for Bootstrap_files/navbar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="mycustomstyle.css">
  </head>

  <body>

    <?php include 'navSignUp.php'; ?>

  <?php


if($_SESSION["firstName"]) {
?>


<style>
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}

.avatar {
  vertical-align: middle;
  width: 100px;
  height: 100px;
  border-radius: 50%;
}

#currentBalance {
  background-color: lightgrey;
  width: 200px;
  padding: 8px;
  font-size: 45px;
  text-align: center;
}

div#infologin {
  text-align: right;
  margin-right: 14px;

}

ul {
  list-style-type: none;
}

li#infologin {
  float: right;
  margin-left: 4px;
  background-color: yellow;
  padding-left: 7px;
  padding-right: 7px;
  border-radius: 7px;
}

.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>

<!---

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
---->
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
         <h2>Redeem</h2>
         <p><b><?php echo $_SESSION["firstName"]; ?> <?php echo $_SESSION["lastName"]; ?></b><br/>
         Current points: <b><?php echo $_SESSION["TotalPoints"]; ?></b></p>


<p>
         <button class="button button2" type="button"
onclick="document.getElementById('demo').innerHTML = '50'">
Php 50</button>

<button class="button button2" type="button"
onclick="document.getElementById('demo').innerHTML = '100'">
Php 100</button>

<br />
<textarea type="text" id="demo" readonly></textarea>
</p>

<form>
  ID<br /><input type="text" name="id" readonly value='<?php echo $_SESSION["id"]; ?>'><br /><br />

  RFID<br /> <input type="text" name="passengerName" readonly value='<?php echo $_SESSION["rfidno"]; ?>'><br /><br />

  <!--- RFID<br /><p style="font-size: 25px;"><?php echo $row->rfidno; ?></p> --->
  </form>

</div>

<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 4px;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
</style>
</head>
<body>

<?php
}


//else echo "<h4>Please <a href='balance.php'>login first</a> before viewing the passengers' record.</h4>";

 else
    echo"<script language='javascript' type='text/javascript'>location.href='balance.php'</script>";
?>

  


</body></html>   
