<?php
$host = 'db';
$username = 'luca';
$password = 'password';
$database = 'database';

// Crea una connessione al database
$conn = mysqli_connect($host, $username, $password, $database);

if ($conn->connect_error) {
    
  die("non riesco a connettermi!! errore -> " . $conn->connect_error);

} else{
  header("Location: /aws_progetto/php/loginForm.php");
}
?>
