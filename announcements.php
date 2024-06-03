<?php
require_once "connect.php";

// Tworzenie połączenia z bazą danych
$conn = new mysqli($servername, $username, $dbpassword, $dbname);

// Obsługa błędów połączenia
if ($conn->connect_errno) {
    die("Error: " . $conn->connect_error);
}

// Przygotowanie zapytania SQL
$sql = "SELECT id, tekst FROM ogloszenia";
$stmt = $conn->prepare($sql);

// Wykonanie zapytania
$stmt->execute();

// Pobranie wyników z zapytania
$result = $stmt->get_result();

// Wyświetlanie ogłoszeń
while ($row = $result->fetch_assoc()) {
    $tekst = htmlspecialchars($row["tekst"]);
    $words = explode(" ", $tekst);
    
    if (count($words) > 15) {
        $visible_text = implode(" ", array_slice($words, 0, 15));
        $hidden_text = implode(" ", array_slice($words, 15));
        echo '<div class="announcement">';
        echo '<p class="visible-text">' . $visible_text . '...<span class="more-content" style="display: none;">' . $hidden_text . '</span></p>';
        echo '<button class="toggleButton">Więcej</button>';
        echo '</div>';
    } else {
        echo '<div class="announcement">';
        echo '<p>' . $tekst . '</p>';
        echo '</div>';
    }
}

// Zamykanie zasobów
$stmt->close();
$conn->close();
?>
