<?php
ob_start(); // Avvia il buffering dell'output

$host = 'db';
$username = 'luca';
$password = 'password';
$database = 'database';

// Crea una connessione al database
$conn = mysqli_connect($host, $username, $password, $database);

if ($conn->connect_error) {
    die("non riesco a connettermi!! errore -> " . $conn->connect_error);
} else {
    echo 'ciaoooo sono connesso al database';
    
    header("Location: lg.php");
    exit(); // Assicurati di uscire dopo il reindirizzamento
}

ob_end_flush(); // Termina e invia il buffer di output
?>
