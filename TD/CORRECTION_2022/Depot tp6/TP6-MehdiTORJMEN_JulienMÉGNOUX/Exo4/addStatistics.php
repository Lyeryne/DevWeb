<!-- Start of HTML document -->
<!DOCTYPE html>
<html>

<!-- Start of the head section -->

<head>
    <title>Add Statistics</title>
    <link rel="stylesheet" type="text/css" href="addStatistics.css">
</head>
<!-- End of the head section -->

<!-- Start of the body section -->

<body>
    <!-- Start of the container div -->
    <div class="container">
        <!-- Heading -->
        <h1>Add Statistics</h1>

        <!-- Start of the form -->
        <form method="post" action="saveStatistics.php">
            <!-- Start of the table -->
            <table class="form-table">
                <!-- Start of a table row for the player selection -->
                <tr>
                    <td><label for="player">Player:</label></td>
                    <td>
                        <select id="player" name="player" required>
                            <?php
                            // Read the player information from the file "infoJoueurs.txt"
                            $players = file("infoJoueurs.txt", FILE_IGNORE_NEW_LINES);

                            // Iterate through each player entry
                            foreach ($players as $player) {
                                // Split the player entry into name, first name, number of goals, and playing time
                                [$name, $firstName, $goals, $playingTime] = explode(";", $player);

                                // Display the name and first name as an option in the drop-down list
                                echo "<option value=\"$name;$firstName\">$name $firstName</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <!-- End of a table row for the player selection -->

                <!-- Start of a table row for the number of goals -->
                <tr>
                    <td><label for="goals">Number of Goals:</label></td>
                    <td><input type="number" id="goals" name="goals" required></td>
                </tr>
                <!-- End of a table row for the number of goals -->

                <!-- Start of a table row for the playing time -->
                <tr>
                    <td><label for="playingTime">Playing Time (in min):</label></td>
                    <td><input type="number" id="playingTime" name="playingTime" required></td>
                </tr>
                <!-- End of a table row for the playing time -->
            </table>
            <!-- End of the table -->

            <!-- Submit button -->
            <input type="submit" value="Submit" class="submit-button">
        </form>
        <!-- End of the form -->
    </div>
    <!-- End of the container div -->
</body>
<!-- End of the body section -->

</html>
<!-- End of HTML document -->