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
       header('location: passengersPayFareIndex.php');
   }

   else {
       echo 'Data Not Updated';
   }

   mysqli_close($connect);
}

?>


<?php
        //declaring variables
        $passengerID = $_POST['id']; // At passengersPayFareIndex.php, the "id" is the name of the specified input while the "$passengerID" is the name of the column in "receipt" database
        $name = $_POST['name'];
        $name2 = $_POST['name2'];
        $rfidno = $_POST['rfidno'];
        $paymentDate = $_POST['paymentDate'];
        $paymentTime = $_POST['paymentTime'];

        $conn = new mysqli("localhost", "root", "", "test");
        if($conn->connect_error) {
          die('Connection Failed : '.$conn->connect_error);
        }
        else {
            $stmt = $conn->prepare("insert into receipt(passengerID, name, name2, rfidno, paymentDate,  paymentTime)
              VALUES(?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssiss", $passengerID, $name, $name2, $rfidno, $paymentDate, $paymentTime);
            $stmt->execute();
            // header('location: update.php');

            $stmt->close();
            $conn->close();
        }


?>


