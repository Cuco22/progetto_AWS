<?php
$hostname= "db";
$username= "root";
$password= "mariadb";
$database= "database";

$conn=new mysqli($hostname,$username,$password,$database);

if ($conn->connect_error) {
    
  die("non riesco a connettermi!! errore -> " . $conn->connect_error);

} else{
  header("Location: /aws_progetto/php/loginForm.php");
}
?>
