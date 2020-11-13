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
   $balance     = $_POST['balance'];
   $TotalPoints = $_POST['TotalPoints'];



   // mysql query to Update data
   //$query = "UPDATE `registration` SET `balance`= $balance
    //                                    WHERE `id` = $id";

  $query = "UPDATE `registration` SET `balance`= $balance, `TotalPoints`= $TotalPoints
                                       WHERE `id` = $id";
   
   $result = mysqli_query($connect, $query); 

   if($result) {
       echo '<center>The amount has been redeem to your account. Please <a href="passengersBalanceLogout.php">logout</a> for changes to take effect and then log back in for the result.</center>.';
   }

   else {
       echo '<center>Error :-(.</center>';
   }

   mysqli_close($connect);
}

?>

<?php
    

    extract($_REQUEST);
    $file=fopen("data-archives/redeemhistory.txt","a");

    fwrite($file,"Passenger ID :");
    fwrite($file, $id ."\n");

    fwrite($file,"RFID :");
    fwrite($file, $rfidno ."\n");


    fclose($file);

 ?>