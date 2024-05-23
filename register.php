<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrati utente.</title>
    <link rel="stylesheet" href="/aws_progetto/css/style_register.css">
</head>
<body>
    <div class="form-container">
        <h1>Registrati</h1>
        <br>
        <form action="registerAWS.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <br>
            <br>
            <input type="submit" value="Registrati">
        </form>
        <br>
        <br>
        <br>
        <a href="index.php" class="register-link">ritorna al login</a>
    </div>
</body>
</html>
