<!-- Start of HTML document -->
<!DOCTYPE html>
<html>


<!-- Start of head section -->

<head>
    <title>Connexion</title>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" type="text/css" href="Connexion.css">
</head>
<!-- End of head section -->

<body>
    <!-- Form for user login -->
    <form method="post" action="Vérification.php" id="formLogin">

        <!-- Label for username input -->
        <label for="username">Utilisateur:</label>

        <!-- Username input field -->
        <input type="text" id="username" name="username" required><br>

        <!-- Label for password input -->
        <label for="password">Mot de passe:</label>

        <!-- Password input field -->
        <input type="password" id="password" name="password" required><br><br>

        <!-- Submit button to submit the form -->
        <input type="submit" value="Connexion">

        <!-- Start of PHP code -->
        <?php

        // Start the session to store and retrieve session data
        session_start();

        // Check if there is an error message stored in session
        if (isset($_SESSION['error_message'])) {

            // Retrieve the error message from session
            $errorMessage = $_SESSION['error_message'];

            // Display the error message
            echo '<p class="error-message">' . $errorMessage . '</p>';

            // Clear the error message from session
            unset($_SESSION['error_message']);
        }
        ?>
        <!-- End of PHP code -->

    </form>
    <!-- End of login form -->
</body>
<!-- End of body section -->

</html>
<!-- End of HTML document -->