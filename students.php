<?php
$conn = new mysqli("localhost:3307", "root", "", "classdb");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT name, grade FROM students ORDER BY grade DESC");

echo "<h1>Students</h1><ul>";
while ($row = $result->fetch_assoc()) {
  echo "<li>" . htmlspecialchars($row["name"]) . ": " . $row["grade"] . "</li>";
}
echo "</ul>";

$conn->close();
?>