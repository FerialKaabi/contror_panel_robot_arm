 <?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "db1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, motor1, motor2 ,motor3 ,motor4 ,motor5 ,motor6 FROM robot_arm";
................
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	.......................
  }
  
} else {
  echo "0 results";
}
$conn->close();
?> 
