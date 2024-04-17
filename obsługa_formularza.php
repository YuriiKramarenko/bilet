<?php
// Sprawdź, czy formularz został wysłany
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobierz dane z formularza
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    
    // Tutaj możesz umieścić kod weryfikujący poprawność danych, np. czy hasła się zgadzają, czy email jest w poprawnym formacie itp.
    
    // Jeśli wszystkie dane są poprawne, możesz wykonać odpowiednie działania, np. zapis do bazy danych
    
    // Przykład zapisu danych do pliku tekstowego
    $file = fopen("dane.txt", "a"); // Otwórz plik dane.txt w trybie dopisywania
    fwrite($file, "Imię: " . $firstname . ", Nazwisko: " . $lastname . ", Email: " . $email . "\n"); // Zapisz dane do pliku
    fclose($file); // Zamknij plik
    
    // Przykład przekierowania po udanej rejestracji
    header("Location: sukces.php");
    exit(); // Zakończ działanie skryptu
}
?>
