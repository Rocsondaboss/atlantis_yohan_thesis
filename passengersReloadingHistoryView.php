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
<link rel="icon" href="img/atlantis_yohan_logo.png">




    <title>Reloading history - Atlantis Yohan</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbars/">

    <!-- Bootstrap core CSS -->
    <link href="./Navbar Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./Navbar Template for Bootstrap_files/navbar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="mycustomstyle.css">
  </head>

  <body style="background-color: #d7f9fa">



<?php include 'nav2.php'; ?>

  <?php


if($_SESSION["adminUserName"]) {
?>
     <?php include 'user_session.php' ?>





      <div>
        <div>
          <h1 style="text-align: center;">Reloading history</h1>

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
      <th style="width:250px;"><center>Reload ID</center></th>
      <th style="width:250px;"><center>Passenger ID</center></th>
      <th style="width:250px;"><center>Name</center></th>
      <th style="width:250px;"><center>RFID</center></th>
      <th style="width:250px;"><center>Amount loaded</center></th>
      <th id="reload" style="width:250px;"><center>Reload time</center></th>
      <th style="width:250px;"><center>Reference number</center></th>

    </tr>


<?php
// connect to database
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'test');

// define how many results you want per page
$results_per_page = 10;

// find out the number of results stored in database
$sql='SELECT * FROM reloadinghistory';
$result = mysqli_query($con, $sql);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

// retrieve selected results from database and display them on page
$sql='SELECT * FROM reloadinghistory LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($con, $sql);

if ($number_of_results > 0) {
while($row = mysqli_fetch_array($result)) {
  //echo $row['id'] . ' ';
  // echo $row['alphabet']. '<br />';
  echo "<td style='text-align: center;'>".$row['historyID']."</td>";
  echo "<td style='text-align: center;'>".$row['passengerName']."</td>";
  echo "<td style='text-align: center;'>".$row['passengerID']."</td>";
  echo "<td style='text-align: center;'>".$row['rfidno']."</td>";
  echo "<td style='text-align: right;'><b>P ".$row['amount']."</b></td>";
  echo "<td style='text-align: center;'>".$row['reloadDate']."</td>";
  echo "<td style='text-align: center;'>".$row['refnum']."</td>";

  echo "</tr>";

}
    }

for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<a class="btn btn-primary" href="passengersReloadingHistoryView.php?page=' . $page . '">' . $page . '</a> ';
}

?>
    </table>

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