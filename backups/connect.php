<?php
	
	$userName 		= $_POST['userName'];
	$firstName 		= $_POST['firstName'];
	$lastName 		= $_POST['lastName'];
	$email 			= $_POST['email'];
	$gender 		= $_POST['gender'];
	$birthDate	 	= $_POST['birthDate'];
	$street 		= $_POST['street'];
	$municipality 	= $_POST['municipality'];
	$province 		= $_POST['province'];
	$password		= $_POST['password'];

	//Database connection

	$conn = new mysqli('localhost','root','','test'); //"test" is the name of your database
	if($conn->connect_error){
		die('Connection Failed	:	'.$conn->connect_error);

	}else{
				// This code is to insert the data into the "registration" table
		$stmt = $conn->prepare("insert into registration(userName, firstName, lastName, email, gender, birthDate, street, municipality, province, password)
			values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); //the "?" specifies how many tables did you use
		$stmt->bind_param("ssssssssss", $userName, $firstName, $lastName, $email, $gender, $birthDate, $street, $municipality, $province, $password);




		$stmt->execute();

		header('location: successful.php'); //redirects to this page should the registration successful
		$stmt->close();
		$conn->close();
	}
	

?>