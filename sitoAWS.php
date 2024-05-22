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
    <title>Sito Progetto AWS</title>
    <link rel="stylesheet" href="style_custom.css">
    <link rel="icon" href="/aws_progetto/css/awsLogo.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .main-container {
            text-align: center;
            padding: 40px;
            background-color: #4b0082;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        h1 {
            font-size: 36px;
            color: #fff;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #dcdcdc;
            margin-bottom: 20px;
        }

        a {
            color: #ffa500;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        h2 {
            font-size: 28px;
            color: #dcdcdc;
            margin-top: 40px;
        }

        form {
            margin-top: 20px;
        }

        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 16px;
        }

        button {
            margin-top: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            background-color: #ffa500;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #cc8400;
        }

        #commentSection p {
            text-align: left;
            background-color: #333;
            color: #dcdcdc;
            padding: 10px;
            border-radius: 8px;
            margin-top: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="main-container">
        <h1>Ciao <span id="emailDisplay" data-email="<?php echo htmlspecialchars($email); ?>"></span>!</h1>
        <p>Benvenuto nel mio sito basato su AWS.</p>
        <p>Per ulteriori informazioni, visita il mio GitHub. <a href="https://github.com/Cuco22/progetto_AWS" id="github-link" target="_blank">Entra da qui! 😀</a>.</p>
        <hr>
        <br>
        <p>Per visualizzare nello specifico come ho fatto a configurare le impostazioni e il server su AWS, <a href="https://github.com/Cuco22/progetto_AWS/blob/main/README.md">clicca qui!</a>.</p>
        
        <h2>Ti va di lasciare un commento? 🐦‍⬛</h2>
        <form id="commentForm">
            <textarea id="commentInput" rows="4" cols="50" placeholder="Scrivi qui il tuo commento..."></textarea>
            <button type="submit">Invia</button>
        </form>
        <div id="commentSection"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var emailDisplay = document.getElementById('emailDisplay');
            var email = emailDisplay.getAttribute('data-email');
            var atIndex = email.indexOf('@');
            if (atIndex !== -1) {
                var displayText = email.substring(0, atIndex);
                emailDisplay.textContent = displayText;
            }

            var commentForm = document.getElementById('commentForm');
            var commentInput = document.getElementById('commentInput');
            var commentSection = document.getElementById('commentSection');

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
