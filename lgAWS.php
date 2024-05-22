<?php
require 'connect.php';
session_start();

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    $_SESSION['error_message'] = "Credenziali di accesso non correttamente impostate!";
    header("Location: index.php");
    exit();
}

$email = $_POST['email'];
$password = $_POST['password'];

// Hash la password
$password_hashed = md5($password);

//verifico se l'utente esiste nel database
$query = "SELECT * FROM utente WHERE email = '$email' AND password = '$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $_SESSION['logged'] = true;
    $_SESSION['email'] = $email;
    header("Location: sitoAWS.php");
    exit();
} else {
    $_SESSION['error_message'] = "L'utente non esiste! Non è possibile eseguire il login :(";
    header("Location: index.php");
    exit();
}

$conn->close();
?>
