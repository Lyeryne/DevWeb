<?php

/**
 * Function to verify user credentials and redirect them to the appropriate page.
 *
 * @param string $identifier The user identifier.
 * @param string $password The user password.
 * @return void
 */
function verifyUser($identifier, $password)
{
    // Read the contents of the "identifier.txt" file
    $lines = file('identifier.txt', FILE_IGNORE_NEW_LINES);

    // Iterate through each line of the file
    foreach ($lines as $line) {
        // Split the line into identifier, password, and profile
        $data = explode(';', $line);

        // Check if the identifier and password match
        if ($data[0] == $identifier && $data[1] == $password) {
            // Redirect based on the profile
            if ($data[2] == 'entraineur') {
                // Coach profile menu
                echo '<div class="coach-menu">';
                echo '<h2>Bienvenu, Coach !</h2>';
                echo '<ul>';
                echo '<li><a href="addStatistics.php">Add Statistics</a></li>';
                echo '<li><a href="addPlayer.php">Add Player</a></li>';
                echo '</ul>';
                echo '</div>';
            } elseif ($data[2] == 'joueur') {
                // Player profile menu
                header('Location: searchStatistics.php');
                exit; // Terminate the script after the redirection
            }
            return; // Exit the function after redirecting
        }
    }

    // If the identifier or password is incorrect, redirect back to the login page
    header('Location: connexion.php');
    exit;
}

// Get the submitted values from the form
$identifier = $_POST['identifier'];
$password = $_POST['password'];

// Call the verification function
verifyUser($identifier, $password);
?>

<!-- Start of HTML document -->
<!DOCTYPE html>
<html>

<!-- Start of head section -->

<head>
    <title>Vérification connexion</title>
    <link rel="stylesheet" type="text/css" href="verificationConnexion.css"> <!-- Linking external CSS file -->
</head>
<!-- End of head section -->

</html>
<!-- End of HTML document -->