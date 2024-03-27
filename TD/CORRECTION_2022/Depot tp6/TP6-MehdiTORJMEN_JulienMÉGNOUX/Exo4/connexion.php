<!-- Start of HTML document -->
<!DOCTYPE html>
<html>

<!-- Start of head section -->

<head>
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="connexion.css"> <!-- Linking external CSS file -->
</head>
<!-- End of head section -->

<!-- Start of body section -->

<body>
    <!-- Start of container div -->
    <div class="container">
        <!-- Heading for the page -->
        <h1>Connexion</h1>

        <form action="verificationConnexion.php" method="post">
            <!-- Label for the identifier input field -->
            <label for="identifier">Identifiant:</label>
            <!-- Input field for the identifier -->
            <input type="text" id="identifier" name="identifier" required>

            <!-- Label for the password input field -->
            <label for="password">Mot de passe:</label>
            <!-- Input field for the password -->
            <input type="password" id="password" name="password" required>

            <!-- Submit button -->
            <input type="submit" value="Se connecter">
        </form>
    </div>
    <!-- End of container div -->
</body>
<!-- End of body section -->

</html>
<!-- End of HTML document -->