<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
  <div class="top-bar">
    <span class="time">...</span>
    <span class="icons">...</span>
    <span class="battery">...</span>
  </div>
  <div class="menu-bar">
    <a href="#" class="menu">MENU <span class="badge">1</span></a>
    <a href="#" class="nearby">W POBLIŻU</a>
  </div>
  <div class="profile">
    <img src="avatar.jpg" alt="Avatar" class="avatar">
    <div class="info">
      <p>YURII</p>
      <p>KRAMARENKO</p>
      <p>9990000830842</p>
    </div>
    <img src="qrcode.png" alt="QR code" class="qrcode">
  </div>
  <div class="button">
    <a href="#" class="button yellow">Gdańskie Centrum Kontaktu</a>
    <a href="#" class="button white">PRZYZNANE DEKLARACJE</a>
    <a href="#" class="button blue">...</a>
  </div>
  <div class="tickets">
    <p class="tickets text">POSIADANE BILETY</p>
    <a href="#" class="button blue-2">KUP BILET</a>
    <p class="tickets tr rr">Nie posiadasz jeszcze biletów. Kliknij w przycisk aby dodać nowy!</p>
  </div>
  <div class="footer">
    <!-- Tutaj możesz dodać swoją stopkę -->
  </div>
  <div class="button">

<a href="blog.php">Powrót do Storny Głównej</a>
</div>
<h1>Dodaj swój przepis</h1>
<form method="POST">
<input type="text" name="query" placeholder="Tytuł">
<br>
<input type="text" name="description" placeholder="Opis">
<br>
<select name="category">
<option value="breakfast">Śniadanie</option>
<option value="lunch">Obiad</option>
<option value="dessert">Deser</option>
</select>
<button type="submit">Dodaj</button>
</form>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bilet_1k";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Połączenie nieudane: ". $conn->connect_error);
  }
  ?>
</body>
</html>
