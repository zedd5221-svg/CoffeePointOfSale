<?php
session_start();
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO users (full_name, email, password) VALUES ('$full_name', '$email', '$password')";
    
    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = 'Registration successful! Please login.';
    } else {
        $_SESSION['error'] = 'Email already exists';
    }
    
    header('Location: ../../index.php');
    exit();
}
?>