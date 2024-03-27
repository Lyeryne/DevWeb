<?php
session_start();

// Pre-established list of users and passwords
$users = [
    "user1" => "password1",
    "user2" => "password2",
    "user3" => "password3"
];

// Retrieve the submitted username and password
$username = $_POST['username']; // Get the submitted username from the form
$password = $_POST['password']; // Get the submitted password from the form

// Check if the provided credentials are valid
if (isset($users[$username]) && $users[$username] === $password) {
    // Authentication successful

    // Store the username in the 'username' session variable
    $_SESSION['username'] = $username;

    // Redirect the user to the home page
    header('Location: Accueil.php');

    // Terminate the script execution to prevent any further execution
    exit;
} else {
    // Invalid credentials

    // Store the error message in the 'error_message' session variable
    $_SESSION['error_message'] = "Nom d'utilisateur et/ou mot de passe incorrect(s).";

    // Redirect the user back to the login page
    header('Location: Connexion.php');

    // Terminate the script execution to prevent any further execution
    exit;
}
