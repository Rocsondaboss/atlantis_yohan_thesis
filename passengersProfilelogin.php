<?php
session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('127.0.0.1:3306','root','','test') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM admin WHERE
              adminUser='" . $_POST["adminUser"] . "'
              and adminPassword = '". $_POST["adminPassword"]."'");

$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["adminID"] = $row['adminID'];
$_SESSION["adminUserName"] = $row['adminUserName'];

} else {
$message = "<h6 id='loginErrorMsg' style='background-color:red; color:white;'>Invalid username or password.</h6>";
}
}
if(isset($_SESSION["adminID"])) {
header("Location:passengersProfileIndex.php");
}
?>


<!DOCTYPE html>
<!-- saved from url=(0051)https://v4-alpha.getbootstrap.com/examples/navbars/ -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <link rel="icon" href="img/atlantis_yohan_logo.png">

    <title>Admin Log In - Atlantis Yohan</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbars/">

    <!-- Bootstrap core CSS -->
    <link href="./Navbar Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./Navbar Template for Bootstrap_files/navbar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="mycustomstyle.css">
  </head>

  <body>

  <?php include 'navSignUp.php'; ?>

  

      <div class="jumbotron">
        <div class="col-sm-8 mx-auto">
          <h1>Pleae login to check the passengers' profile</h1>
          <h6><i>Note: Only the administrator can access this site.</i></h6>
          
         <form id="reg2" name="frmUser" method="post" action="" align="center">

<div id="reg2" class="message"><?php if($message!="") { echo $message; } ?></div>

 Admin username<br>
 <input type="text" class="form-control" name="adminUser">
 <br>
 Password<br>
<input type="password" class="form-control" name="adminPassword">
<br><br>
<input type="submit" class="btn btn-primary" name="submit" value="Login">
<input class="btn btn-primary" type="reset">
</form>

        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Navbar Template for Bootstrap_files/jquery-3.1.1.slim.min.js.download" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./Navbar Template for Bootstrap_files/tether.min.js.download" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="./Navbar Template for Bootstrap_files/bootstrap.min.js.download"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Navbar Template for Bootstrap_files/ie10-viewport-bug-workaround.js.download"></script>
  

</body></html>