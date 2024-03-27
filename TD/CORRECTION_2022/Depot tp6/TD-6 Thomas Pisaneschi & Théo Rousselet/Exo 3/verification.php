<?php
session_start();

$users = array(
    'user1' => 'password1',
    'user2' => 'password2',
    'user3' => 'password3'
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (array_key_exists($username, $users) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header('Location: acceuil.php');
        exit;
    } else {
        header('Location: connexion.php');
        exit;
    }
}
?>