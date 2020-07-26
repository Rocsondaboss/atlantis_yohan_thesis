<?php
			$con = mysqli_connect('127.0.0.1', 'root', '');	

			mysqli_select_db($con, 'test');

			$sql = "UPDATE registration
						SET firstName	= '$_POST[firstName]',
							gender  	= '$_POST[gender]',
							lastName 	= '$_POST[lastName]',
							email 		= '$_POST[email]',
							balance		= '$_POST[balance]',
							rfidno		= '$_POST[rfidno]'

									WHERE id='$_POST[id]'";
			




										 
			if(mysqli_query($con, $sql))
				header("refresh:1; url=passengersProfileUpdate.php");
			else
				echo "Not updated";


	?>