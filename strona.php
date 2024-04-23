<?php

session_start();

if (!isset($_SESSION['zalogowany']))
{
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
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
<div class="login-container">
  <div>
    <?php echo '[<a href="logout.php">Wyloguj się</a>]'; ?>
  </div>
  <div class="menu-bar">
    <a id="menu">MENU</a>
    <a id="bell">&</a>
    <a id="nearby">W POBLIŻU</a>
  </div>
  <div class="profile">
    <div>
    <img src="img/logotip.jpg" alt="logotip" id="logotip">
    </div>
    <div>
    <samp id="kolo"><img src="img/avatar.jpg" alt="Avatar" class="avatar"></samp>
    </div>
    <div class="info">
  </br>
      <?php
      
      echo $_SESSION['user'];
      echo "</br>".$_SESSION['code'];

      ?>
    </div>
    <div>
    <img src="img/qrcode.png" alt="QR code" class="qrcode">
    </div>
  </div>
  <div class="container">
    <div class="image"><img src="img/luffy.jpg" alt="Obrazek 1"></div>
    <div class="image"><img src="img/zoro.jpg" alt="Obrazek 2"></div>
    <div class="image"><img src="img/brook.jpg" alt="Obrazek 3"></div>
    <div class="image"><img src="img/franky.jpg" alt="Obrazek 4"></div>
  </div>
  <script src="scripts.js"></script>
  <div class="tickets">
    <p class="tickets text">POSIADANE BILETY</p>
    <a href="kupbilet.html" class="button blue-2">KUP BILET</a>
  </div>
  <div class="tickets">
  <div class="tr">
  <p class="rr">Nie posiadasz jeszcze biletów. Kliknij w przycisk aby dodać nowy!</p>
  </div>
  <div>
    <p class="tickets text">POSIADANE PAKIETY</p>
    <a href="#" class="button blue-2">DODAJ PAKIET</a>
  </div>
  <div class="pakiet">
    <p>2023/2024 Roczny pakiet bezpłatnych przejazdów</p>
    <p>ważny od 2023-10-05</p>
    <p>ważny do 2024-10-10</p>
  </div>
  <div class="footer">
  </div>
</div>
</body>
</html>
