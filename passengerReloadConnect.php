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
       echo '<center>The amount has been loaded to your account. <a href="passengerReload.php">Return</a></center>.';
   }

   else {
       echo '<center>Reloading error. It is because you have entered wrong character instead of number. <a href="passengerReload.php">Return</a></center>.';
   }

   mysqli_close($connect);
}

?>

<?php
        //declaring variables
        $passengerID = $_POST['id']; // At passengersPayFareIndex.php, the "id" is the name of the specified input while the "$passengerID" is the name of the column in "receipt" database
        $passengerName = $_POST['passengerName'];
        $reloadDate = $_POST['reloadDate'];
        $amount = $_POST['amount'];
        $rfidno = $_POST['rfidno'];
        $refnum = $_POST['refnum'];



        $conn = new mysqli("localhost", "root", "", "test");
        if($conn->connect_error) {
          die('Connection Failed : '.$conn->connect_error);
        }
        else {
            $stmt = $conn->prepare("insert into reloadinghistory(passengerID, passengerName, reloadDate, amount, rfidno, refnum)
              VALUES(?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("issiis", $passengerID, $passengerName, $reloadDate, $amount, $rfidno, $refnum);
            $stmt->execute();
            // header('location: update.php');

            $stmt->close();
            $conn->close();
        }


?>