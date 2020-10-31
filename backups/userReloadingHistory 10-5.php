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

.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
</style>



<?php include 'navSignUp.php'; ?>

  <?php


if($_SESSION["firstName"]) {
?>

<?php include 'userProfileHeader.php'; ?>

      <div class="jumbotron">
        <div class="col-sm-8 mx-auto">

          
          <h1>Your reloading history</h1>

          <img src="img/unknown-person-icon-27.png" alt="Avatar" class="avatar">
          <p>Passenger ID: <b><?php echo $_SESSION["id"]; ?></b></p>
          <p>RFID no.: <b><?php echo $_SESSION["rfidno"]; ?></b></p>

          <?php
            include_once 'passengersProfileViewDB.php';
          ?>

<style>
  table {
    border-collapse: collapse;
    width: 100%;
    color: #588c7e;
    font-family: monospace;
    font-size: 18px;
    text-align: left;
  }
  th {
    background-color: #588c7e;
    color: white;
  }
  tr:nth-child(even) {background-color: #f2f2f2}

  header {
    text-align: center;
    font-size: 39px;

  }
</style>

<table>
<tr>
  <th>History<br />ID</th>
  <th>Name</th>
  <th>Amount</th>
  <th>Reload date</th>
  <th>Ref. num.</th>
</tr>

<?php
  
  $rfidno = $_SESSION["rfidno"];

  $conn = mysqli_connect("localhost", "root", "", "test");
  if ($conn-> connect_error) {
    die("Connect failed:". $conn->connect_error);
  }

  $sql = "SELECT historyID, passengerID, passengerName, rfidno, amount, reloadDate, refnum from reloadinghistory where rfidno='$rfidno'";
  $result = $conn-> query($sql);

  if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
      echo "<tr>      
                <td>".$row["historyID"] ."</td>
                <td>".$row["passengerName"] ."</td>
                <td>Php ".$row["amount"] ."</td>
                <td>".$row["reloadDate"] ."</td>
                <td>".$row["refnum"] ."</td>
          <tr>";
    }
    echo "</table>";
  }
  else {
    echo "No result";
  }

  $conn-> close();
  ?>









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