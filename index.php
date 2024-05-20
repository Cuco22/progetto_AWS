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
    <style>
        .error-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: red;
            color: white;
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
    <?php if ($error_message): ?>
        <div class="error-popup" id="errorPopup"><?php echo $error_message; ?></div>
        <script>
            document.getElementById('errorPopup').style.display = 'block';
            setTimeout(function() {
                document.getElementById('errorPopup').style.display = 'none';
            }, 5000); // Nasconde il messaggio dopo 5 secondi
        </script>
    <?php endif; ?>
    
    <!-- Il tuo modulo di login va qui -->
    <form action="lgAWS.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
