<?php

session_start();

if ((!isset($_POST['login'])) || (!isset($_POST['password'])))
{
    header('Location: index.php');
    exit();
}

require_once "connect.php";

$conn = @new mysqli($servername, $username, $dbpassword, $dbname);

if ($conn->connect_errno!=0)
{
    echo"Error: ".$conn->coneect_errno;
}
else
{
$login = $_POST['login'];
$password = $_POST['password'];

$login = htmlentities($login, ENT_QUOTES, "UTF-8");
$password = htmlentities($password, ENT_QUOTES, "UTF-8");

if ($result = @$conn->query(sprintf("SELECT*FROM uzytkownicy WHERE user='%s' AND pass='%s'",
mysqli_real_escape_string($conn,$login),
mysqli_real_escape_string($conn,$password))))
{
    $ilu_userow = $result->num_rows;
    if($ilu_userow>0)
    {
        $_SESSION['zalogowany'] = true;
        $_SESSION['id'] = $wiersz['id'];
        $wiersz = $result->fetch_assoc();
        $_SESSION['user'] = $wiersz['user'];
        $_SESSION['code'] = $wiersz['code'];

        unset($_SESSION['blad']);
        $result->free_result();
        header('Location: strona.php');

    } else {

        $_SESSION['blad'] = '<span style="color:red">Noeprawidłowy login lub hasło!</span>';
        header('Location: index.php');

    }

}
        $conn->close();
    }

?>