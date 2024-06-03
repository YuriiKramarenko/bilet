<?php
session_start();

if ((!isset($_POST['login'])) || (!isset($_POST['password']))) {
    header('Location: index.php');
    exit();
}

require_once "connect.php";

$conn = @new mysqli($servername, $username, $dbpassword, $dbname);

if ($conn->connect_errno != 0) {
    echo "Error: " . $conn->connect_errno;
} else {
    $login = htmlentities($_POST['login'], ENT_QUOTES, "UTF-8");
    $password = htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");

    $sql = "SELECT id, user, code FROM uzytkownicy WHERE user=? AND pass=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $login, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['zalogowany'] = true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['user'] = $row['user'];
        $_SESSION['code'] = $row['code'];
        unset($_SESSION['blad']);
        $result->free_result();
        $stmt->close();
        $conn->close();
        header('Location: strona.php');
    } else {
        $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
        header('Location: index.php');
    }
}
?>
