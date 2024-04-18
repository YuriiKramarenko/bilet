<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.3.css"> 
</head>
<body>
    <div class="login-container">
        <img src="img/msg1943933271-31139.jpg" id="logo" alt="Logo">
        <form action="account.php" method="post">
            <div class="input-group">
                <input type="text" id="login" name="login" placeholder="login" required>
                <span class="error-message" id="login-error" style="display: none;">Wypełnij to pole</span>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Hasło" required>
                <span class="error-message" id="password-error" style="display: none;">Wypełnij to pole</span>
            </div>
            <div>
                <input class="login-btn" type="submit" value="Zaloguj"/>
            </div>
        </form>
        <div id="qr">
            <a href="#">Zaloguj się QR</a>
        </div>
        <div id="reset-password">
            <a href="#">Resetuj hasło</a>
        </div>
        <div id="create-account">
            Nie masz jeszcze konta? 
            <button onclick="window.location.href='new-account.html'" id="create">Utwórz</button>
        </div>
    </div>
</body>
</html>
