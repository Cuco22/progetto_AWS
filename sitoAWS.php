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
    <link rel="stylesheet" href="../aws_progetto/css/style_custom.css">
    <link rel="icon" href="../aws_progetto/css/awsLogo.png" type="image/x-icon">
</head>

<body>
    <div class="main-container">
        <h1>Ciao <span id="emailDisplay" data-email="<?php echo htmlspecialchars($email); ?>"></span>!</h1>
        <p>Benvenuto nel mio sito basato su AWS.</p>
        <p>Per ulteriori informazioni, visita il mio GitHub. <a href="https://github.com/Cuco22/progetto_AWS" id="github-link" target="_blank"> Entra da qui! 😀</a>.</p>
        <hr>
        <br>
        <p>Per visualzzare nello specifico come ho fatto a configurare le impostazioni e il server su aws, <a href="https://github.com/Cuco22/progetto_AWS/blob/main/README.md">clicca qui!</a>.</p>
        <br>
        <br>
        
        <h2>Ti va di lasciare un commento? 🐦‍⬛</h2>
        <br>
        <br>
        <form id="commentForm">
            <textarea id="commentInput" rows="4" cols="50" placeholder="Scrivi qui il tuo commento..."></textarea>
            <br>
            <br>
            <button type="submit">Invia</button>
        </form>
        <div id="commentSection">
            
        </div>
    </div>

    <script src="../aws_progetto/js/js.js"></script>
</body>
</html>
