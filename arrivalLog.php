<?php
        //declaring variables

        $passengerID = $_POST['passengerID'];
        $name = $_POST['name'];
        $name2 = $_POST['name2'];
        $timeArrive = $_POST['timeArrive'];

        $rfidno = $_POST['rfidno'];

        $conn = new mysqli("localhost", "root", "", "test");
        if($conn->connect_error) {
          die('Connection Failed : '.$conn->connect_error);
        }
        else {
            $stmt = $conn->prepare("insert into arrival(passengerID, name, name2, timeArrive, rfidno)
              VALUES(?, ?, ?, ?, ?)");
            $stmt->bind_param("isssi", $passengerID, $name, $name2, $timeArrive, $rfidno);
            $stmt->execute();
            header('location: arrivelog_gui.php');

            $stmt->close();
            $conn->close();
        }


?>