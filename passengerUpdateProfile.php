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
   $id          = $_POST['id'];
   $firstName          = $_POST['firstName'];
   $lastName           = $_POST['lastName'];
   $email           = $_POST['email'];
   $street           = $_POST['street'];
   $municipality           = $_POST['municipality'];
   $province           = $_POST['province'];
   $gender           = $_POST['gender'];




   // mysql query to Update data
   //$query = "UPDATE `registration` SET `balance`= $balance
    //                                    WHERE `id` = $id";

  $query = "UPDATE `registration` SET `firstName`= '$firstName',
                                      `lastName`  = '$lastName',
                                      `email`     = '$email',
                                      `street`     = '$street',
                                      `municipality`     = '$municipality',
                                      `province`     = '$province',
                                      `gender`     = '$gender'
                                       WHERE `id` = $id";
   
   $result = mysqli_query($connect, $query); 

   if($result) {
      // echo '<center>The amount has been redeem to your account. Please <a href="passengersBalanceLogout.php">logout</a> for changes to take effect and then log back in for the result.</center>.';

       $name_error = "Successfully updated.";
   }

   else {
       echo '<center>Error :-(.</center>';
   }

   mysqli_close($connect);
}

?>