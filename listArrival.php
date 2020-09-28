


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
          <h1>Fare payment</h1>
 


<?php include 'farePaymentNavBar.php' ?>

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

<header>Arrival log</header>
<table>
<tr>
	<th>Arrival<br />ID</th>
	<th>Passenger<br />ID</th>
	<th>First<br />name</th>
	<th>Last<br />name</th>
	<th>RFID</th>
	<th>Arrival time</th>
</tr>

<?php
	$conn = mysqli_connect("localhost", "root", "", "test");
	if ($conn-> connect_error) {
		die("Connect failed:". $conn->connect_error);
	}

	$sql = "SELECT arrivalID, passengerID, name, name2, rfidno, timeArrive from arrival";
	$result = $conn-> query($sql);

	if ($result-> num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
			echo "<tr>      
							<td>".$row["arrivalID"] ."</td>
							<td>".$row["passengerID"] ."</td>
							<td>".$row["name"] ."</td>
							<td>".$row["name2"] ."</td>
							<td>".$row["rfidno"] ."</td>
							<td>".$row["timeArrive"] ."</td>
				<tr>";
		}
		echo "</table>";
	}
	else {
		echo "No result";
	}

	$conn-> close();
	?>


















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