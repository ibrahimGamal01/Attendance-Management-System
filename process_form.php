<?php
// Connect to the database
$servername = "localhost";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdbname";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data and insert into SQL database
$name = $_POST["name"];
$id = $_POST["id"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO users (name, id, email, password) VALUES ('$name', '$id', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!--The SQL Code
 CREATE TABLE users (
  name VARCHAR(50),
  ID VARCHAR(10),
  email VARCHAR(100),
  password VARCHAR(50)
);
 -->