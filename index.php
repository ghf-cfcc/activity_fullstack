<?php
$conn = new mysqli("localhost:3307", "root", "", "mysql");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connection successful!";
}
$conn->close();
?>