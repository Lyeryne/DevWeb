<?php
// Start of PHP code

// Check if form data is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the player name and first name from the selected option in the drop-down list
    [$name, $firstName] = explode(";", $_POST['player']);

    // Get the number of goals and playing time from the form
    $goals = $_POST['goals'];
    $playingTime = $_POST['playingTime'];

    // Format the player statistics
    $playerStats = "Number of Goals: $goals\nPlaying Time: $playingTime min";

    // Generate the file name based on the player's name and first name
    $fileName = $name . $firstName . ".txt";

    // Open the file in write mode
    $file = fopen($fileName, "w");

    // Write the player statistics to the file
    fwrite($file, $playerStats);

    // Close the file
    fclose($file);
}
// End of PHP code
?>

<!-- Start of HTML code -->
<!DOCTYPE html>
<html>

<head>
    <!-- Start of head section -->
    <title>Save Statistics</title>
    <link rel="stylesheet" type="text/css" href="saveStatistics.css">
    <!-- End of head section -->
</head>

<body>
    <!-- Start of body section -->
    <div class="container">
        <!-- Start of div container -->
        <h1>Save Statistics</h1>

        <?php
        // Start of PHP code

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Display success message if form data is submitted
            echo "<p class=\"success-message\">Statistics saved successfully.</p>";
            // Display link to return to the previous page
            echo "<a class=\"return-link\" href=\"addStatistics.php\">Return to previous page</a>";
        } else {
            // Display message if no form data is submitted
            echo "<p>No form data submitted.</p>";
        }

        // End of PHP code
        ?>
    </div>
    <!-- End of div container -->
</body>
<!-- End of BODY section -->

</html>
<!-- End of HTML code -->