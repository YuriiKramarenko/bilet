<?php
session_start();

if (!isset($_SESSION['zalogowany'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu-bar">
        <!-- Main Content -->
        <p id="menu-button" class="bar"><i class="fas fa-bars"></i>MENU</p> 
        <p id="bottom-menu-button" class="bar"><i class="fa-regular fa-bell"></i></p>
        <p class="bar">W POBLIŻU<i class="fa-solid fa-location-dot"></i></p>
    </div>

    <!-- Panel Menu -->
    <div id="side-menu" class="menu">
        <button id="close-menu-button" class="close-button">X</button>
        <h2>Menu</h2>
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Services</li>
            <li><?php echo '[<a href="logout.php">Wyloguj się</a>]'; ?></li>
        </ul>
    </div>

    <div id="bottom-menu" class="bottom-menu">
        <div id="up-bottom-menu">
            <div>
                <p id="close-bottom-menu-button" class="close-button"><i id="up" class="fa-solid fa-arrow-down"></i></p>
            </div>
            <div id="powiadomienia">
                <h1>Powiadomienia<samp><i id="bell" class="fa-regular fa-bell"></i></samp></h1> 
            </div>
            <br><br><br><br><br><br><br>
                <?php include "announcements.php"; ?>
        </div>
    </div>

    <div id="overlay" class="overlay"></div>

    <div class="login-container">
        <div class="profile">
            <img src="img/logotip.jpg" alt="logotip" id="logotip">
            <samp id="kolo"><img src="img/avatar.jpg" alt="Avatar" class="avatar"></samp>
            <div class="info">
                <?php
                echo $_SESSION['user'];
                echo "<br>" . $_SESSION['code'];
                ?>
            </div>
            <img src="img/qrcode.png" alt="QR code" class="qrcode">
        </div>
        <div class="container">
            <div class="image"><img src="img/luffy.jpg" alt="Obrazek 1"></div>
            <div class="image"><img src="img/zoro.jpg" alt="Obrazek 2"></div>
            <div class="image"><img src="img/brook.jpg" alt="Obrazek 3"></div>
            <div class="image"><img src="img/franky.jpg" alt="Obrazek 4"></div>
        </div>
        <div class="tickets">
            <p>POSIADANE BILETY</p>
        </div>
        <div id="pay">
            <button id="kup">KUP BILET</button>
        </div>
        <div>
            <p>POSIADANE PAKIETY</p>
        </div>
        <div id="pay">
            <button id="dodaj">DODAJ PAKIET</button>
        </div>
        <div class="pakiet">
            <p>2023/2024 Roczny pakiet<br> bezpłatnych przejazdów</p>
            <p>ważny od 2023-10-05</p>
            <p>ważny do 2024-10-10</p>
        </div>
    </div>

    <script src="scripts.js"></script>
</body>
</html>
