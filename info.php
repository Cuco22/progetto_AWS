<?php
session_start();

$email = isset($_SESSION['password']) && isset($_SESSION['email']) ? $_SESSION['email'] : 'Utente';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info - Sito Progetto AWS</title>
    <link rel="stylesheet" href="/aws_progetto/css/style_info.css">
    <link rel="icon" href="/aws_progetto/css/awsLogo.png" type="image/x-icon">
</head>
<body>
    <section id="header" class="section-header">
        <div class="text-box">
            <h1 class="title">Informazioni</h1>
            <p class="subtitle">Chi sono e come è stato sviluppato questo sito</p>
            <div class="buttons-box">
                <button onclick="location.href='sitoAWS.php';">Home</button>
                <button onclick="location.href='logout.php';">Logout</button>
            </div>
        </div>
    </section>

    <div class="main-container">
        <h1>About Me</h1>
        <p>Ciao! Sono uno studente del quinto anno di formazione superiore in indirizzo informatico e telecomunicazioni presso una scuola nella provincia di Milano 📍. Questo sito è stato creato per condividere le mie conoscenze e il mio percorso di apprendimento con AWS.</p>

        <h2>Il Programma</h2>
        <p>Questo sito è stato sviluppato utilizzando PHP, HTML, CSS e JavaScript. L'obiettivo principale è stato quello di creare una piattaforma dinamica e interattiva per dimostrare le mie competenze in questi linguaggi di programmazione e nell'utilizzo di servizi cloud come AWS.</p>
        <p>Ogni sezione del sito è progettata per offrire una panoramica delle mie capacità tecniche e per fornire un'esperienza utente coinvolgente e informativa.</p>

        <p>Grazie per aver visitato il mio sito!</p>
    </div>
</body>
</html>
