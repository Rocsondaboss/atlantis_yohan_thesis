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

    <title>Update - Atlantis Yohan</title>
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





      <div>
        <div>
          <h1><center>Update</center></h1>
          <p>

      <?php
      $con = mysqli_connect('127.0.0.1', 'root', '');

      mysqli_select_db($con,'test');
      $sql = "SELECT * FROM registration";

      $records = mysqli_query($con, $sql);


  ?>

  <table>
    <tr>
      <th><center>Name</center></th>
      <th><center>Age</center></th>
      <th><center>E-mail</center></th>
      <th><center>Gender</center></th>
      <th><center>Balance</center></th>
      <th><center>RFID No.</center></th>
      <th><center>Action</center></th>
    </tr>

    <?php 
      while($row = mysqli_fetch_array($records))
      {
        echo "<tr><form action=passengersProfileUpdateCode.php method=post>";

        echo "<td><input class=form-control type=text name=firstName value='".$row['firstName']."'></td>";

        echo "<td><input class=form-control type=text name=lastName value='".$row['lastName']."'></td>";

        echo "<td><input class=form-control type=text name=email style='width:300px' value='".$row['email']."'></td>";

        echo "<td><select id=gender name=gender class=form-control>
                      <option value= >".$row['gender']."</option>
                      <option value=Male>Male</option>
                      <option value=Female>Female</option>
                    </select></td>";

        echo "<td><input class=form-control type=number style='width:79px' name=balance value='".$row['balance']."'></td>";

        echo "<td><input class=form-control type=number style='width:160px' name=rfidno value='".$row['rfidno']."'></td>";


        echo "<input type=hidden name=id value='".$row['id']."'>";
        echo "<td><input class=btn btn-primary type=submit value=Update>";
        echo "</form></tr>";
      }
    ?>

  </table>


          </p>





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