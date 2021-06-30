<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "db1";
$motor1 = $_POST['motovalue1'];
$motor2 = $_POST['motovalue2'];
$motor3 = $_POST['motovalue3'];
$motor4 = $_POST['motovalue4'];
$motor5 = $_POST['motovalue5'];
$motor6 = $_POST['motovalue6'];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO robot_arm (motor1, motor2, motor3,motor4 ,motor5, motor6)
VALUES ('$motor1','$motor2','$motor3','$motor4','$motor5','$motor6')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
