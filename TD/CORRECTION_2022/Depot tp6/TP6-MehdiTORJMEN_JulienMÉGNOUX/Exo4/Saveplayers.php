<?php
// Check if form data is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name']; // Retrieve the value of the "name" field
    $firstName = $_POST['firstName']; // Retrieve the value of the "firstName" field
    $dateOfBirth = $_POST['dateOfBirth']; // Retrieve the value of the "dateOfBirth" field
    $position = $_POST['position']; // Retrieve the value of the "position" field

    // Format the player information
    $playerInfo = "$name; $firstName; $dateOfBirth; $position";

    // Open the file in append mode
    $file = fopen("infoJoueurs.txt", "a");

    // Write the player information to the file
    fwrite($file, $playerInfo . PHP_EOL);

    // Close the file
    fclose($file);
}
?>

<!-- Start of HTML document -->
<!DOCTYPE html>
<html>

<!-- Start of head section -->

<head>
    <title>Save Players</title>
    <link rel="stylesheet" type="text/css" href="Saveplayers.css">
</head>
<!-- End of head section -->

<!-- Start of body section -->

<body>
    <!-- Start of container div -->
    <div class="container">
        <!-- Heading for the form -->
        <h1>Save Players</h1>

        <!-- Start of PHP code -->
        <?php
        // Check if the form data has been submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Display a success message
            echo "<p class=\"success-message\">Player information saved successfully.</p>";
            // Display a link to return to the previous page
            echo "<a class=\"return-link\" href=\"addPlayer.php\">Return to previous page</a>";
        } else {
            // Display a message indicating that no form data has been submitted
            echo "<p>No form data submitted.</p>";
        }
        ?>
        <!-- End of PHP code -->

    </div>
    <!-- End of container div -->
</body>
<!-- End of body section -->

</html>
<!-- End of HTML document -->