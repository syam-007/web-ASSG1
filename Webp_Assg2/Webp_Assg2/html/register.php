<?php
$servername = "localhost";
$username = "root";
$password = "Naveen@9267";
$dbname = "coursera";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$txtUsername = $_POST['txtUsername'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtPassword = $_POST['txtPassword'];


$sql = "INSERT INTO `users` (`fldUsername`, `fldEmail`, `fldPhone`, `fldPassword`) VALUES ('$txtUsername', '$txtEmail', '$txtPhone', '$txtPassword')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>