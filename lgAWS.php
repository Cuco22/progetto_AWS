<?php
require 'connect.php';
//session_start();        

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    $_SESSION['error_message'] = "Credenziali di accesso non correttamente impostate!";
    header("Location: index.php");
    exit();
}

$email = $_POST['email'];
$password = $_POST['password'];

// Hash la password
$password_hashed = md5($password);

// Verifica se l'utente esiste nel database
$query = "SELECT * FROM utente WHERE username = '$email' AND password = '$password_hashed'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $_SESSION['logged'] = true;
    $_SESSION['email'] = $email;
    header("Location: aws_progetto/php/sito.php");
    exit();
} else {
    $_SESSION['error_message'] = "L'utente non esiste! Non è possibile eseguire il login :(";
    header("Location: aws_progetto/php/sito.php");
    exit();
}

$conn->close();         
?>
