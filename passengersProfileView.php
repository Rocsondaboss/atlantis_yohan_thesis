<?php
session_start();

?>

<?php
  include_once 'passengersProfileViewDB.php';
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

    <title>View Records - Atlantis Yohan</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbars/">

    <!-- Bootstrap core CSS -->
    <link href="./Navbar Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./Navbar Template for Bootstrap_files/navbar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="mycustomstyle.css">
  </head>

  <body>



<?php include 'nav2.php'; ?>

  <?php


if($_SESSION["adminUserName"]) {
?>
    <h6 style="text-align: right;">Welcome <?php echo $_SESSION["adminUserName"]; ?>. <a href="logout.php" tite="Logout">Log out.</a></h6>





      <div>
        <div>
          <h1 style="text-align: center;">View records</h1>

          <!--- For styling tables --->
          <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;

              }

            td, th {
                  border: 1px solid black;
                  text-align: left;
                  padding: 8px;
                }

            tr:nth-child(even) {
                  background-color: #dddddd;
                }
          </style>



          <table>
    <tr>
      <th style="width:250px;"><center>Name</center></th>
      <th style="width:250px;"><center>First name</center></th>
      <th style="width:250px;"><center>Last name</center></th>
      <th style="width:160px;"><center>E-mail</center></th>
      <th style="width:160px;"><center>RFID #</center></th>
      <th style="width:160px;"><center>Balance</center></th>
    </tr>
   
    <?php
      $sql            = "SELECT * FROM registration;";
      $result         = mysqli_query($conn, $sql);
      $resultCheck    = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<td style='text-align: center;'>".$row['userName']."</td>";
            echo "<td style='text-align: center;'>".$row['firstName']."</td>";
            echo "<td style='text-align: center;'>".$row['lastName']."</td>";
            echo "<td style='text-align: center;'>".$row['email']."</td>";
            echo "<td style='text-align: center;'>".$row['rfidno']."</td>";
            echo "<td style='text-align: center;'>₱ ".$row['balance']."</td>";

            echo "</form></tr>";
        }
      }
          ?>
    </table>

      <h4 style="text-align: center;"><a style="text-decoration: none" href="passengersProfileUpdate.php">Update</a></h1>




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