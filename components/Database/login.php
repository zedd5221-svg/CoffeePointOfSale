<?php
session_start();
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['full_name'];
            $_SESSION['logged_in'] = true;
            
            header('Location: ../../public/pages/pos.php');
            exit();
        }
    }
    
    $_SESSION['error'] = 'Invalid email or password';
    header('Location: ../../index.php');
    exit();
}
?>