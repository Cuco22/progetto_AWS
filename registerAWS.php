<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    
    if($conn->query($sql)===TRUE){
        header("Location: index.php");
    }else{
        echo 'errore';
    }

    $conn->close();
    
    $conn->close();
}
?>
