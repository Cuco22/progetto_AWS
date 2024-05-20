<?php
session_start();
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : '';
unset($_SESSION['error_message']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login cliente</title>
    <link rel="icon" href="/aws_progetto/css/icona login.png" type="image/x-icon">
    <link rel="stylesheet" href="/aws_progetto/css/style.css">
    <style>
        .error-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: white;
            color: black;
            border: 2px solid blue;
            padding: 20px;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: slideDown 0.5s forwards;
        }
        @keyframes slideDown {
            from { top: -50px; }
            to { top: 0; }
        }
    </style>
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
