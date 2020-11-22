<?php
$servername = "localhost";
$username = "root";
$password = "20202020";
$dbname = "mensaje";

// Create connection
$conn = new mysqli($localhost, $username, "20202020", "mensaje");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (nombre, email, mensaje)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>