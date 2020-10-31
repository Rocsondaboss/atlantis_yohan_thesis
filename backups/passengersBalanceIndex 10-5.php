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

<style>
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
</style>



<?php include 'navSignUp.php'; ?>

  <?php


if($_SESSION["firstName"]) {
?>

  <?php include 'userProfileHeader.php'; ?>

      <div class="jumbotron">
        <div class="col-sm-8 mx-auto">

          <h1>Information</h1>

          <img src="img/unknown-person-icon-27.png" alt="Avatar" class="avatar">
          <p>Passenger ID: <b><?php echo $_SESSION["id"]; ?></b></p>
          <p>Name: <b><?php echo $_SESSION["firstName"]; ?> <?php echo $_SESSION["lastName"]; ?></b></p>
          <p>RFID: <b><?php echo $_SESSION["rfidno"]; ?></b></p>
          <p>Birth date: <b><?php echo $_SESSION["birthDate"]; ?></b></p>
          <p>Your balance:
            <div id="currentBalance">₱ <?php echo $_SESSION["balance"]; ?></div></p>

            <p>Your total points:
            <div id="currentBalance"><?php echo $_SESSION["TotalPoints"]; ?></div></p>






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


else echo "<h4>Please <a href='balance.php'>login first</a> before viewing the passengers' record.</h4>";
?>

  


</body></html>