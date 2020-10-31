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

    <?php include 'navSignUp.php'; ?>

  <?php


if($_SESSION["firstName"]) {
?>


<style>
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}

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

.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}

div#reloadinghistory {
  background-color: #dbdbdb;
  border-radius: 4px;
  margin-top: 12px;
  padding: 7px;
}
</style>

<!---

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
---->
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="img/unknown-person-icon-27.png" alt=""/>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h4>
                                        <?php echo $_SESSION["firstName"]; ?> <?php echo $_SESSION["lastName"]; ?>
                                    </h4>
                                    <!--- Caption -----
                                    <h6>
                                        Web Developer and Designer
                                    </h6>
                                    --->
                                   
                                    <!----  <p class="proile-rating">RANKINGS : <span>8/10</span></p> --->

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="passengersBalanceIndex.php" role="tab" aria-controls="profile" aria-selected="false">About</a>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-primary" href="passengersBalanceLogout.php">Log out</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">


                            <?php include 'userProfileLeftNav.php' ?>


      
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <center><h5>Arrival and departure history</h5></center>

                                        <?php
  
  $rfidno = $_SESSION["rfidno"];

  $conn = mysqli_connect("localhost", "root", "", "test");
  if ($conn-> connect_error) {
    die("Connect failed:". $conn->connect_error);
  }

  $sql = "SELECT paymentDate, paymentTime from receipt where rfidno='$rfidno' order by paymentTime ASC";
  $result = $conn-> query($sql);

  if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
      echo "<div id='reloadinghistory'>";
      echo "You made transaction for departure from Iloilo on <b>".$row["paymentDate"]."</b> at <b>".$row["paymentTime"]."</b>.";
      echo "</div>";
    }

  }

  else {
    echo "You don't have any arrival and departure history.";
  }

  $conn-> close();
  ?>






                                        
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>       

<!--- Meanwhile, this line indicates that if the user did not login, the passengers' record will not appeared unless the user logs in --->
<?php
}


else echo "<h4>Please <a href='balance.php'>login first</a> before viewing the passengers' record.</h4>";
?>

  


</body></html>