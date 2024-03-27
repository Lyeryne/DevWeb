<!-- Start of HTML document -->
<!DOCTYPE html>
<html>

<!-- Start of head section -->

<head>
    <title>Show Statistics</title>
    <link rel="stylesheet" type="text/css" href="showStatistics.css">
</head>
<!-- End of head section -->

<!-- Start of body section -->

<body>
    <!-- Start of container div -->
    <div class="container">
        <!-- Heading for the page -->
        <h1>Show Statistics</h1>

        <?php
        // Check if form data is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the values from the submitted form
            $name = $_POST['name'];
            $firstName = $_POST['firstName'];
            $fileName = $name . ' ' . $firstName . ".txt";

            // Check if the file exists
            if (file_exists($fileName)) {
                // Open the file and read its content
                $file = fopen($fileName, "r");
                $content = fread($file, filesize($fileName));
                fclose($file);

                // Display the player statistics
                echo "<h2>Player Statistics</h2>";
                echo "<pre>$content</pre>";
            } else {
                // Display an error message if no statistics found
                echo "<p>No statistics found for the player.</p>";
            }

            // Display a link to return to the previous page
            echo "<a href=\"searchStatistics.php\">Return to previous page</a>";
        } else {
            // Display a message if no form data submitted
            echo "<p>No form data submitted.</p>";
        }
        ?>
    </div>
    <!-- End of container div -->
</body>
<!-- End of body section -->

</html>
<!-- End of HTML document -->