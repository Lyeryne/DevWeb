<!-- Start of HTML document -->
<!DOCTYPE html>
<html>

<!-- Start of head section -->

<head>
    <title>Add Player</title>
    <link rel="stylesheet" type="text/css" href="addPlayer.css">
</head>
<!-- End of head section -->

<!-- Start of body section -->

<body>
    <!-- Start of container div -->
    <div class="container">

        <!-- Heading for the form -->
        <h1>Add Player</h1>

        <!-- Start of the form -->
        <form method="post" action="Saveplayers.php">

            <!-- Start of the table -->
            <table>
                <!-- Start of a table row -->
                <tr>
                    <!-- Label for the name input field -->
                    <td><label for="name">Name:</label></td>

                    <!-- Name input field -->
                    <td><input type="text" id="name" name="name" required></td>
                </tr>
                <!-- End of a table row -->
                <!-- Start of a table row -->
                <tr>
                    <!-- Label for the first name input field -->
                    <td><label for="firstName">First Name:</label></td>

                    <!-- First name input field -->
                    <td><input type="text" id="firstName" name="firstName" required></td>
                </tr>
                <!-- End of a table row -->
                <!-- Start of a table row -->
                <tr>
                    <!-- Label for the date of birth input field -->
                    <td><label for="dateOfBirth">Date of Birth:</label></td>

                    <!-- Date of birth input field -->
                    <td><input type="date" id="dateOfBirth" name="dateOfBirth" required></td>
                </tr>
                <!-- End of a table row -->
                <!-- Start of a table row -->
                <tr>
                    <!-- Label for the position select field -->
                    <td><label for="position">Position:</label></td>
                    <td>
                        <!-- Position select field -->
                        <select id="position" name="position" required>
                            <!-- Option for the position "Gardien" -->
                            <option value="Gardien">Gardien</option>
                            <!-- Option for the position "Défenseur" -->
                            <option value="Défenseur">Défenseur</option>
                            <!-- Option for the position "Milieu" -->
                            <option value="Milieu">Milieu</option>
                            <!-- Option for the position "Attaquant" -->
                            <option value="Attaquant">Attaquant</option>
                        </select>
                    </td>
                </tr>
                <!-- End of a table row -->
            </table>
            <!-- End of the table -->

            <!-- Submit button to add the player -->
            <input type="submit" value="Add" class="submit-button">
        </form>
        <!-- End of the form -->
    </div>
    <!-- End of container div -->
</body>
<!-- End of body section -->

</html>
<!-- End of HTML document -->