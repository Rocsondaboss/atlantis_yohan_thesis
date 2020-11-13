


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

    <title>Reload - Atlantis Yohan</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbars/">

    <!-- Bootstrap core CSS -->
    <link href="./Navbar Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./Navbar Template for Bootstrap_files/navbar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="mycustomstyle.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
  </head>

  <body>



<?php include 'navSignUp.php'; ?>

<style>
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>
<body style="text-align:center;">

  <?php


if($_SESSION["adminUserName"]) {
?>
    <?php include 'user_session.php' ?>

      <div class="jumbotron">
        <div class="col-sm-12 mx-auto">
          <h1 style="text-align: center;">Reload</h1>
<!------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------->





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
<form name="myForm" action="passengerReloadConnect.php" onsubmit="return validateForm()" method="post">
	Passenger ID
	<br /><input type="text" name="id" readonly value='<?php echo $row->id; ?>'><br /><br />

	<!--- Name<br /><p style="font-size: 25px;"><?php echo $row->firstName; ?> <?php echo $row->lastName; ?></p> -->

  Name<br /> <input type="text" name="passengerName" readonly value='<?php echo $row->firstName; ?> <?php echo $row->lastName; ?>'><br /><br />

  Reload time<br /> <input type="text" name="reloadDate" readonly value='<?php echo "" . date("Y-m-d") . ""; ?> <?php date_default_timezone_set("Asia/Manila"); echo "" . date("h:i:sa"); ?>'><br /><br />

	<!--- RFID<br /><p style="font-size: 25px;"><?php echo $row->rfidno; ?></p> --->

  RFID<br /> <input type="text" name="rfidno" readonly value='<?php echo $row->rfidno; ?>'><br /><br />

  Reference number<br /> <textarea type="text" name="refnum" id="refnum" readonly></textarea><br /><br />

	Current balance<br /> <input type="text" name="cbalance" readonly value='<?php echo $row->balance; ?>'><br /><br />

  Current total points earned<br /> <input type="text" name="CurrentTotalPoints" readonly value='<?php echo $row->TotalPoints; ?>'><br /><br />


  Point value (<a style="text-decoration: none;"href="#" data-toggle="tooltip" data-placement="top" title="The current point value is being multiplied by the amount the user entered. The resulting points is added to the passenger's current total points earned.">?</a>)<br /> <input type="text" name="pointValue" readonly value="0.02"><br /><br />

	<div id="boxindex" style="background-color: #03fc98;margin-left: 450px;margin-right:450px;">
	Enter amount<br /> <input type="number" name="amount"><br /><br />

	  <input type="button" class="btn btn-primary" name="" value="ADD" onclick="add()"><br/>

	New balance<br /> <input type="text" name="balance" readonly><br /><br />


  Points <br /> <input type="text" name="points" readonly><br /><br />

  New total points <br /> <input type="text" name="TotalPoints" readonly><br /><br />
  </div>

<button id="mySelect" class="btn btn-primary" type="submit" name="update">Reload</button>
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








function add() {
   
    var x = document.forms["myForm"]["amount"].value;
    // Check if the user enters amount with negative value
    if (x < 0)
      {
      alert("The amount cannot be negative.");
       return false;
      }

    // Check if the user enters between 0 and 9.
    else if (x < 10)
      {
      alert("At least P10 will be loaded to their account.");
       return false;
      }

    // Otherwise
    else {
        cbalance=parseFloat(myForm.cbalance.value);
        amount=parseFloat(myForm.amount.value);
        pointValue=parseFloat(myForm.pointValue.value);
        CurrentTotalPoints=parseFloat(myForm.CurrentTotalPoints.value);

        balance=cbalance+amount;
        points=pointValue*amount;
        TotalPoints=CurrentTotalPoints+points


        myForm.balance.value=balance;
        myForm.points.value=points;
        myForm.TotalPoints.value=TotalPoints;
    }


				}

  // FOR REFERENCE NUMBER //
    var dd = new Date();
    var nn = dd.getTime();
    document.getElementById("refnum").innerHTML = nn;

    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });

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


else 
  //echo "<h4>Please <a href='passengersPayFare.php'>login first</a> before viewing the passengers' record.</h4>";

  echo"<script language='javascript' type='text/javascript'>location.href='passengersPayFare.php'</script>";
?>

  


</body></html>