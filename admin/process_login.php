<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    if ($email == "admin@example.com" && $password == "123") {
        header("Location: index.php");
        exit;
    } else {
        echo "Invalid username or password";
    }
}
?>
