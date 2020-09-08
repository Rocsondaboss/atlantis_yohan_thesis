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



<?php include 'nav.php'; ?>

  <?php


if($_SESSION["adminUserName"]) {
?>
    <h6 style="text-align: right;">Welcome <?php echo $_SESSION["adminUserName"]; ?>. <a href="logoutPayFare.php" tite="Logout">Log out.</a></h6>





      <div class="jumbotron">
        <div class="col-sm-8 mx-auto">
          <h1>Fare payment</h1>
 
<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "test";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $id = $_POST['id'];
   $balance = $_POST['balance'];


           
   // mysql query to Update data
   $query = "UPDATE `registration` SET `balance`= $balance
                                        WHERE `id` = $id";

   
   $result = mysqli_query($connect, $query);
   
   if($balance > 0) {
       header('location: paymentSuccessful.php');
   }

   elseif($balance < 0) {
        echo 'Insufficient.';
   }

   else {
       echo 'Data Not Updated';
   }

   mysqli_close($connect);
}

?>


<form method="post">

<input type="text" name="rfidNoSearch" placeholder="Enter RFID #">
<input type="submit" name="submit">
  
</form>

</body>
</html>

<!--- for searching --->
<?php

$con = new PDO("mysql:host=localhost;dbname=test",'root','');


if (isset($_POST["submit"])) {
  $str = $_POST["rfidNoSearch"];
  $sth = $con->prepare("SELECT * FROM `registration` WHERE rfidno = '$str'");

  $sth->setFetchMode(PDO:: FETCH_OBJ);
  $sth -> execute();

  if($row = $sth->fetch())
  {
    ?>
    <br />
          <form action="passengersPayFareIndex.php" method="post">


            ID#:<br> <textarea type="text" name="id" readonly="true" required><?php echo $row->id; ?></textarea><br>

            First Name: <b><?php echo $row->firstName; ?></b><br>

            Last Name: <b><?php echo $row->lastName; ?></b><br>

            Current balance: <b>Php <?php echo $row->balance; ?></b><br>

            RFID #:<b><?php echo $row->rfidno; ?></b><br>

            <p style="color:red;"><b>P50 will be deducted from your account upon payment. To continue, click "Proceed to payment".</b></p>

            New balance:<br><textarea id="demo" type="number" name="balance" readonly="true" required><?php echo $row->balance; ?></textarea><br><br>

            <button style="background-color: #4CAF50;padding: 15px 32px;" type="submit" name="update">Proceed to payment</button>
          </form>


<p id="demo"></p>
<script>
var x = <?php echo $row->balance; ?> - 50;
document.getElementById("demo").innerHTML = x;
</script>
  
  <!--------- search ends here ------>


<?php 
    }
    else {
      echo "<b style='color:red;'>RFID # not found!</b>";
        }
    }

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


else echo "<h4>Please <a href='passengersPayFare.php'>login first</a> before viewing the passengers' record.</h4>";
?>

  


</body></html>