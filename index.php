<?php
session_start();
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : '';
unset($_SESSION['error_message']);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="/aws_progetto/css/icona login.png" type="image/x-icon">
    <link rel="stylesheet" href="/aws_progetto/css/style.css">
</head>
<body>
    <h1>LOGIN CLIENTE</h1>
    <form method="post" action="lgAWS.php">
        <input type="email" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="password" required>
		<br>
        <input type="submit" value="login">
    </form>
</body>
</html>
