<?php
require 'connect.php';
session_start();        //avvio della sessione          

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    echo "credenziali di accesso non correttamente impostate!";

} else {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //vedo se l'utente esiste nel db
    $query = "SELECT * FROM utente WHERE username = '$email' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['logged'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("Location: sito.php");
        

    } else {
        $_SESSION['error_message'] = "l'utente non esiste! \nnon è possibile eseguire il login :(";
        header("Location: ../index.php"); 

    }

    $conn->close();         //chiusura connessione
}
?>
