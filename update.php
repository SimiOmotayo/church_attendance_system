<?php

$host = "localhost";
$dbname = "register_db";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);

 if (mysqli_connect_errno()) {
                    die("Connection error: " . mysqli_connect_error());
    } 
    //if(isset($_GET['search'])) 
    $filtervalues = $_GET['search'];
    $result = mysqli_query($conn,"SELECT * FROM register WHERE CONCAT(phone) LIKE '%$filtervalues%' ");
?>
<!DOCTYPE html>
<html>
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <title>Church Members Attendance System</title>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Search Members </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Phone Number">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Gender</td>
        <td>Phone</td>
		<td>Email</td>
        <td>Address</td>
        <td>State</td>
        <td>Area Council</td>
		<td>Attendance</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
		<td><?php echo $row["fname"]; ?></td>
		<td><?php echo $row["lname"]; ?></td>
		<td><?php echo $row["gender"]; ?></td>
        <td><?php echo $row["phone"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["address"]; ?></td>
        <td><?php echo $row["state"]; ?></td>
        <td><?php echo $row["lg"]; ?></td>
		<td><a href="update-process.php?id=<?php echo $row["id"]; ?>">Take Attendance</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
<div>
<input type = "submit" name = "search" value="BACK" href="index.html" onclick="history.back()">
</div>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>