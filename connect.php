<?php
		$db = mysqli_connect("localhost", "root", "", "test");

				//declaring variables
				$userName = "";
				$firstName = "";
				$lastName = "";
				$password = "";
				$confirmPassword = "";
				$email = "";
				$street = "";
				$municipality = "";
				$province = "";
				$gender = "";
				$birthDate = "";



		if (isset($_POST['register']))
		{
				$userName = $_POST['userName'];
				$firstName = $_POST['firstName'];
				$lastName = $_POST['lastName'];
				$password = $_POST['password'];
				$confirmPassword = $_POST['confirmPassword'];
				$email = $_POST['email'];
				$street = $_POST['street'];
				$municipality = $_POST['municipality'];
				$province = $_POST['province'];
				$gender = $_POST['gender'];
				$birthDate = $_POST['birthDate'];


				// check if the user enters the same name as already registered name
				$sql_u = "SELECT * FROM registration WHERE userName = '$userName'";
				$res_u = mysqli_query($db, $sql_u) or die(mysqli_error($db));

				// for userName
				if (mysqli_num_rows($res_u) > 0) {
					$name_error = "Username already taken. Please use another name.";
				}

				//password confirmation
				if($password != $confirmPassword)
				{
					$name_error = "Password don't match";
				}



				else
				{
					$query = "INSERT INTO registration (userName, firstName, lastName, password, email, street, municipality, province, gender, birthDate)
							VALUES('$userName', '$firstName', '$lastName', '$password', '$email', '$street', '$municipality', '$province', '$gender', '$birthDate')";
					$result = mysqli_query($db, $query) or die(mysqli_error($db));

					header('location: successful.php'); //redirects to this page should the registration successful

					exit();
				}
		}

?>