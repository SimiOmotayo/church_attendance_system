<?php

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$oname = $_POST["oname"];
$gender = filter_input(INPUT_POST, "gender", FILTER_VALIDATE_INT);
$designation = $_POST["designation"];
$department = $_POST["department"];
$dependent = $_POST["dependent"];
$phone= $_POST["phone"];
$email = $_POST["email"];
$address = $_POST["address"];
$state = $_POST["state"];
$lg = $_POST["lg"];
  


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

    $sql = "INSERT INTO register (fname, lname, oname, gender, designation, department, dependent, phone, email, address, state, lg)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssissssssss",
                       $fname,
                       $lname,
                       $oname,
                       $gender,
                       $designation,
                       $department,
                       $dependent,
                       $phone,
                       $email,
                       $address,
                       $state,
                       $lg);

mysqli_stmt_execute($stmt);

echo "<script>
             alert('message sent succesfully'); 
             window.history.go(-2);
     </script>";

//var_dump($fname, $lname, $gender, $phone, $email, $address, $state, $lg);
//print_r($_POST);