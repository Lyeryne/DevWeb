<?php
session_start();
$users = array(
    'admin' => '1234',
    'user2' => 'password2',
    'user3' => 'password3'
);
$username = $_POST['username'];
$password = $_POST['password'];

if (array_key_exists($username, $users) && $users[$username] == $password) {
    $_SESSION['username'] = $username;
    header('Location: Accueil.php');
} 
else {
    header('Location: connexion.php');
    $_SESSION['error'] = 'Login ou mot de passe incorrect';
}
?>
