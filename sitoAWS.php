<?php
include 'index.php';
//session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login cliente</title>
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
