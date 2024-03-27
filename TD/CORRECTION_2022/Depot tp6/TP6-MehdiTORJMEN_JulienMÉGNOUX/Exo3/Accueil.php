<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {

    // Redirect the user to the login page
    header('Location: Connexion.php');

    // Terminate the script execution to prevent any further execution
    exit;
}

// Check if the logout form is submitted
if (isset($_POST['logout'])) {

    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect the user to the login page
    header('Location: Connexion.php');

    // Terminate the script execution to prevent any further execution
    exit;
}

// Retrieve the username from the session
$username = $_SESSION['username'];
?>

<!-- Start of HTML document -->
<!DOCTYPE html>

<html>

<!-- Start of head section -->

<head>
    <title>Accueil</title>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" type="text/css" href="Accueil.css">
</head>
<!-- End of head section -->

<!-- Start of body section -->

<body>
    <div class="container">
        <!-- Display the welcome message with the username -->
        <p class="welcome-message">Bonjour, <?php echo $username; ?></p>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <!-- Logout button to submit the form -->
            <input class="logout-button" type="submit" name="logout" value="Déconnexion">
        </form>
    </div>
</body>
<!-- End of body section -->

</html>
<!-- End of HTML document -->