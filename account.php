<?php

require_once "connect.php";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_errno != 0) {
    echo "Error: " . $conn->connect_error;
} else {
    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM uzytkownicy WHERE firstname='$login' AND pass='$password'";

    if ($result = $conn->query($sql)) {
        $ilu_userow = $result->num_rows;
        if ($ilu_userow > 0) {
            $wiersz = $result->fetch_assoc();
            $user = $wiersz['firstname'] . $wiersz['lastname'];

            $result->free_result();
            header('Location:')
       
        } else {
           
        }
    } 

    $conn->close();
}
?>
