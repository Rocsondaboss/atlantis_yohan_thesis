          <?php
          		include_once('passengersProfileConnection.php');
          		$query="select * from registration";
          		$result=mysql_query($query);	
          ?>

             <table>
          	<tr>
          			<th><h2>Passengers' record</h2></th>
          			<th>First Name</th>
          			<th>Last Name</th>
          			<th>Email</th>
          			<th>Gender</th>
          		</tr>
          	</table>