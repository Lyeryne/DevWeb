<!-- Start of HTML document -->
<!DOCTYPE html>
<html>

<!-- Start of head section -->

<head>
    <title>Search Statistics</title>
    <link rel="stylesheet" type="text/css" href="searchStatistics.css">
</head>
<!-- End of head section -->

<!-- Start of body section -->

<body>
    <!-- Start of container div -->
    <div class="container">

        <!-- Heading for the form -->
        <h1>Search Statistics</h1>

        <!-- Start of the form -->
        <form method="post" action="showStatistics.php">
            <!-- Start of the table -->
            <table class="form-table">
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
            </table>
            <!-- End of the table -->

            <!-- Submit button to search for statistics -->
            <input type="submit" value="Search" class="submit-button">
        </form>
        <!-- End of the form -->
    </div>
    <!-- End of container div -->
</body>
<!-- End of body section -->

</html>
<!-- End of HTML document -->