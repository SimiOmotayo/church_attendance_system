<!DOCTYPE html>
<html>

<head>
	<title>Form Processor</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "register_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$oname = $_REQUEST['oname'];
		$gender = $_REQUEST['gender'];
		$designation = $_REQUEST['designation'];
		$department = $_REQUEST['department'];
        $dependent = $_REQUEST['dependent'];
		$phone= $_REQUEST['phone'];
        $email = $_REQUEST['email'];
		$address = $_REQUEST['address'];
		$state = $_REQUEST['state'];
        $lg = $_REQUEST['lg'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO register VALUES ('$fname','$lname','$oname','$gender','$designation','$department','$dependent',
											'$phone','$email','$address','$state','$lg', NULL, NULL)";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
