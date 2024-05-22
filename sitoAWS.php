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
</head>
<body>
    <section id="header" class="section-header">
        <div class="text-box">
            <h1 class="title">Sito Progetto AWS</h1>
            <p class="subtitle">Benvenuto nel mio sito basato su AWS</p>
            <div class="buttons-box">
                <button onclick="location.href='logout.php';">Logout</button>
                <button onclick="location.href='info.php';">Info</button>
            </div>
        </div>
    </section>

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
