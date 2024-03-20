<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bilet_1k";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die ("Połączenie nieudane: " . $conn->connect_error);
}
$sql = "SELECT * FROM PRZEPISY";
$result = $conn->query($sql);
echo "<ol>";
while ($row = $result->fetch_assoc()) {

  echo "<li>" . $row["tytuł"] . "</li>";
}
echo "</ol>";
$conn->close();
?>