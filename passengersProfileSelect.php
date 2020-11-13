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
    <link rel="icon" href="img/atlantis_yohan_logo.png">

    <title>Select the Record - Atlantis Yohan</title>
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


if($_SESSION["adminUserName"]) {
?>
    <?php include 'user_session.php' ?>





      <div class="jumbotron">
        <div class="col-sm-8 mx-auto">
          <h1>Select the record</h1>
            <p style="background-color:#7eaaf2; color:white; text-align: center; border-radius: 4px; text-decoration: none;font-size: 34px;"><a style="color: white" href="passengersProfileView.php">User's registration</a></p>
            <p style="font-size: 34px;background-color:#9849f2; color:white; text-align: center; border-radius: 4px;"> <a style="color: white" href="passengersReloadingHistoryView.php">Reloading history</a></p>

            <p style="font-size: 34px;background-color:#9849f2; color:white; text-align: center; border-radius: 4px;"><a style="color: white" href="listDeparture.php">Departure list</a></p>

            <p style="font-size: 34px;background-color:#9849f2; color:white; text-align: center; border-radius: 4px;"><a style="color: white" href="listArrival.php">Arrival list</a></p>





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
  

<!--- Meanwhile, this line indicates that if the user did not login, the passengers' record will not appeared unless the user logs in --->
<?php
}


else echo "<h4>Please <a href='passengersProfilelogin.php'>login first</a> before viewing the passengers' record.</h4>";
?>

  


</body></html>