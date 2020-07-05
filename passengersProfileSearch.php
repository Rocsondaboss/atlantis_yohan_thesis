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
    <h6 style="text-align: right;">Welcome <?php echo $_SESSION["adminUserName"]; ?>. <a href="logout.php" tite="Logout">Log out.</a></h6>





      <div class="jumbotron">
        <div class="col-sm-8 mx-auto">
          <h1>Search for passengers</h1>
          
          <?php
  $con = mysqli_connect("localhost", "root", "") or die("Could not connect");
  mysqli_select_db($con, 'test') or die("Could not database");

  $output = '';

  if(isset($_POST['search'])) {
      $searchq = $_POST['search'];
      $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

      $query = mysqli_query($con, "SELECT * FROM registration
                        WHERE firstName LIKE '%$searchq%'
                                           OR
                              lastName LIKE '%$searchq%'
                                           OR
                              id LIKE '%$searchq%'") or die("Could not search");

      $count = mysqli_num_rows($query);
      if($count == 0) {
        $output = '<div class="alert alert-danger">
    <strong>No results found!</strong> Try another keyword</a>.
  </div>';
  
      } else {
          while($row = mysqli_fetch_array($query)) {
            $fname = $row['firstName'];
            $lname = $row['lastName'];
            $id = $row['id'];
            $street = $row['street'];
            $municipality = $row['municipality'];
            $province = $row['province'];


            $output .= 
                  '<p><b>ID:</b> '.$id.'</p>
                  <p><b>Name:</b> '.$fname.' '.$lname.'</p>
                  <p><b>Address:</b> '.$street.', '.$municipality.', '.$province.'</p>
                  <p>---------</p>
                  ';
          }
      }

  }
?>

<form action="passengersProfileSearch.php" method="post">
        <input type="text" class="form-control" name="search" placeholder="Search for passengers..."/>

        <input type="submit" class="btn btn-primary" value="Search" /> <a class="btn btn-primary" href="passengersProfileSearch.php" role="button">Clear</a>

    </form>

    <?php print("$output");?> 





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