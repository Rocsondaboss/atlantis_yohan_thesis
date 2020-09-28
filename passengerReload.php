


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
        <div class="col-sm-12 mx-auto">
          <h1 style="text-align: center;">Reload</h1>
<!------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------->

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

   if($result) {
       echo '<center>The amount has been loaded to your account.</center>';
   }

   else {
       echo 'Reloading error.';
   }

   mysqli_close($connect);
}

?>
<center>
	<p>Enter RFID no. to continue.</p>
<form name="myForm4" onsubmit="return validRFID()" method="post">

<input type="text" name="rfidNoSearch" placeholder="Enter RFID #">
<input type="submit" class="btn btn-primary" name="submit" value="Search">
<input type="reset" class="btn btn-danger" value="Reset">
</form>
</center>

<script>
	function validRFID()
{
	var a = document.forms["myForm4"]["rfidNoSearch"].value;
  	if (a == "" || a == null)
   	 	{
    	alert("Please enter valid RFID no.");
   		 return false;
    	}
}

	</script>

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



<center>
<form name="myForm" action="passengerReload.php" onsubmit="return validateForm()" method="post">
	Passenger ID
	<br /><input type="text" name="id" readonly value='<?php echo $row->id; ?>'><br /><br />

	Name<br /><p style="font-size: 25px;"><?php echo $row->firstName; ?> <?php echo $row->lastName; ?></p>

	RFID<br /><p style="font-size: 25px;"><?php echo $row->rfidno; ?></p>

	Current balance<br /> <input type="text" name="cbalance" readonly value='<?php echo $row->balance; ?>'><br /><br />

	<div id="boxindex" style="background-color: #03fc98;margin-left: 450px;margin-right:450px;">
	Enter amount<br /> <input type="text" name="amount"><br /><br />

	  <input type="button" class="btn btn-primary" name="" value="ADD" onclick="add()"><br/>

	New balance<br /> <input type="text" name="balance" readonly><br /><br />
	</div>

<button id="mySelect" class="btn btn-primary" type="submit" name="update">Proceed to payment</button>
</form>
</center>

<script>

function validateForm()
  	{
  	var x = document.forms["myForm"]["amount"].value;
  	if (x == "" || x == null)
   	 	{
    	alert("Enter the amount first.");
   		 return false;
    	}

    var y = document.forms["myForm"]["balance"].value;
  	if (y == "" || y == null)
   	 	{
    	alert("Enter the resulting balance.");
   		 return false;
    	}

	}

function add(){
    cbalance=parseInt(myForm.cbalance.value);
    amount=parseInt(myForm.amount.value);
    balance=cbalance+amount;
    myForm.balance.value=balance;
				}
</script>





<?php 
    }
    else {
      echo "<p style='color:red;'><b>RFID no. not found or invalid RFID!</b></p>";
        }
    }

?>
 



<!------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------->












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