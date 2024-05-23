<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Hash della password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Query di inserimento
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ss", $email, $hashed_password);
        
        if ($stmt->execute()) {
            echo "Registrazione avvenuta con successo.";
            // Redireziona a una pagina di successo o login
        } else {
            echo "Errore: " . $stmt->error;
        }
        
        $stmt->close();
    }
    
    $conn->close();
}
?>
