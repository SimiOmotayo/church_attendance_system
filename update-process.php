<?php
$host = "localhost";
$dbname = "register_db";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);
//if(isset($_GET['phone']))
//$filtervalues = $_GET['phone'];                       
$result = mysqli_query($conn,"SELECT * FROM register WHERE CONCAT(phone)");
//$query_run = mysqli_query($con, $query);
$row= mysqli_fetch_array($result);
if(count($_POST)>0) {
    $sql = "INSERT INTO register (fname, lname, gender, phone, email, address, state, lg) 
    VALUES (fname, lname, gender, phone ,email, address, state, lg, date, present)";
    echo "<script>
    alert('Attendance Submitted succesfully'); 
    window.history.go(-3);
</script>";
    }
?>
<html>
<head>
<link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
<title>Save Data</title>
</head>
<body>
<form name="attendance" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">

</div>
First Name: <br>
<input type="text"  disabled name="fname" class="txtField" value="<?php echo $row['fname']; ?>">
<br>
Last Name :<br>
<input type="text"  disabled name="lname" class="txtField" value="<?php echo $row['lname']; ?>">
<br>
Gender:<br>
<input type="text"  disabled name="gender" class="txtField" value="<?php echo $row['gender']; ?>">
<br>
Phone:<br>
<input type="text"  disabled name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
<br>
Email:<br>
<input type="text" disabled name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
State:<br>
<input type="text" disabled name="state" class="txtField" value="<?php echo $row['state']; ?>">
<br>
Area Council:<br>
<input type="text" disabled name="lg" class="txtField" value="<?php echo $row['lg']; ?>">
<br>
Date:<br>
<input type= "date" id = "date" name = "date" required>
Present: <br>
<input type= "checkbox" id = "dob" name = "dob" required></th>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>