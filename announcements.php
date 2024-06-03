<?php
require_once "connect.php";

// Tworzenie połączenia z bazą danych
$conn = @new mysqli($servername, $username, $dbpassword, $dbname);

// Obsługa błędów połączenia
if ($conn->connect_errno != 0) {
    die("Error: " . $conn->connect_error);
}

// Przygotowanie zapytania SQL
$sql = "SELECT tekst FROM ogloszenia";
$stmt = $conn->prepare($sql);

// Wykonanie zapytania
$stmt->execute();

// Pobranie wyników z zapytania
$result = $stmt->get_result();

// Wyświetlanie ogłoszeń
while ($row = $result->fetch_assoc()){
    echo '<p id="textElement">' . htmlspecialchars($row["tekst"]) . '</p>'; // Unikanie ataków XSS poprzez kodowanie treści
}

// Zamykanie zasobów
$stmt->close();
$conn->close();
?>
