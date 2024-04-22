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
    <a href="#" class="menu">MENU <span class="badge">1</span></a>
    <a href="#" class="nearby">W POBLIŻU</a>
  </div>
  <div class="profile">
    <img src="img/avatar.jpg" alt="Avatar" class="avatar">
    <div class="info">
</br>
      <?php
      
      echo $_SESSION['user'];
      echo "</br>".$_SESSION['code'];

      ?>
    </div>
    <img src="img/qrcode.png" alt="QR code" class="qrcode">
  </div>
  <div class="button">
    <a href="#" class="button yellow">Gdańskie Centrum Kontaktu</a>
    <a href="#" class="button white">PRZYZNANE DEKLARACJE</a>
    <a href="#" class="button blue">...</a>
  </div>
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
