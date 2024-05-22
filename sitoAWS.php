<?php
include 'connect.php';
session_start();

$email = isset($_SESSION['password']) && isset($_SESSION['email']) ? $_SESSION['email'] : 'Utente';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sito progetto aws</title>
    <link rel="stylesheet" href="style_custom.css">
    <link rel="icon" href="/aws_progetto/css/awsLogo.png" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e9ecef;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .main-container {
            text-align: center;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 32px;
            color: #007bff;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #333333;
            margin-bottom: 20px;
        }

        .success-message {
            color: #007bff;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        img {
            max-width: 200px; 
            height: auto; 
            margin-top: 20px;
            border-radius: 8px;
        }

        .error-message {
            color: #dc3545;
            margin-bottom: 20px;
            font-weight: bold;
            font-size: 18px;
            background-color: #f8d7da;
            padding: 10px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <h1>Ciao <span id="emailDisplay" data-email="<?php echo htmlspecialchars($email); ?>"></span>!</h1>
        <p>Benvenuto nel mio sito basato su AWS.</p>
        <p>Per ulteriori informazioni, visita il mio GitHub. <a href="https://github.com/Cuco22/progetto_AWS" id="github-link" target="_blank"> Entra da qui! 😀</a>.</p>
        <hr>
        <br>
        <p>Per visualizzare nello specifico come ho fatto a configurare le impostazioni e il server su aws, <a href="https://github.com/Cuco22/progetto_AWS/blob/main/README.md">clicca qui!</a>.</p>
        <br>
        <br>
        
        <h2>Ti va di lasciare un commento? 🐦‍⬛</h2>
        <br>
        <br>
        <form id="commentForm">
            <textarea id="commentInput" rows="4" cols="50" placeholder="Scrivi qui il tuo commento..."></textarea>
            <br>
            <button type="submit">Invia</button>
        </form>
        <div id="commentSection">
            
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var emailDisplay = document.getElementById('emailDisplay');
            var email = emailDisplay.getAttribute('data-email');

            // Trova l'indice del simbolo '@' nell'indirizzo email
            var atIndex = email.indexOf('@');

            if (atIndex !== -1) {
                // Estrae la parte di indirizzo email prima del simbolo '@'
                var displayText = email.substring(0, atIndex);
                emailDisplay.textContent = displayText;
            }

            var commentForm = document.getElementById('commentForm');
            var commentInput = document.getElementById('commentInput');
            var commentSection = document.getElementById('commentSection');

            // Impostazione zona commenti
            commentForm.addEventListener('submit', function(event) {
                event.preventDefault(); 

                var commentText = commentInput.value.trim();
                if (commentText !== '') {
                    var newComment = document.createElement('p');
                    newComment.textContent = commentText;

                    commentSection.appendChild(newComment);

                    commentInput.value = '';
                }
            });
        });
    </script>
</body>
</html>
