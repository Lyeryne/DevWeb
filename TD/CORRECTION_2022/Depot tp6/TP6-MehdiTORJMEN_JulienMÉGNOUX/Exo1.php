<!DOCTYPE html>
<html>

<head>
    <title>Exercice 1</title>

    <style>
        table {
            /* Collapse the borders between cells */
            border-collapse: collapse;

            /* Set the width of the table to 40% of its container */
            width: 40%;
        }

        td {

            /* Add a solid black border around each cell */
            border: 1px solid black;

            /* Add padding inside each cell */
            padding: 1%;

            /* Set the font family to Arial, Helvetica, sans-serif */
            font-family: Arial, Helvetica, sans-serif;

            /* Set the font size to 14 pixels */
            font-size: 14px;
        }
    </style>
</head>

<body>

    <?php

    // Function that finds the age of a person based on their date of birth
    function findAge($dateOfBirth)
    {
        // Create a DateTime object representing the current date
        $currentDate = new DateTime();

        // Create a DateTime object from the provided date of birth
        $dateOfBirth = new DateTime($dateOfBirth);

        // Calculate the difference between the current date and the date of birth
        $difference = $dateOfBirth->diff($currentDate);

        // Return the calculated age
        return $difference->y;
    }

    // Displaying Hello Everyone, date and time

    // Set the default timezone to 'Europe/Paris'
    date_default_timezone_set('Europe/Paris');

    // Display a heading saying "Hello everyone!
    echo "<h3>Hello everyone!</h3>";

    // Display the current date and time
    echo "<p>Today is " . date("d/m/Y") . " at time " . date("H:i:s") . ".</p>";

    // Construction of the two-dimensional array
    $tab = array(
        array("Nom", "Prénom", "Date de naissance", "Poste"), // Header row
        array("Giroud", "Olivier", "30/09/1986", "Attaquant"), // Player 1
        array("Griezmann", "Antoine", "21/03/1991", "Attaquant"), // Player 2
        array("Mbappe", "Kylian", "20/11/1998", "Attaquant"), // Player 3
        array("Kante", "N'Golo", "28/03/1991", "Milieu"), // Player 4
        array("Umtiti", "Samuel", "14/09/1993", "Défense"), // Player 5
        array("Lloris", "Hugo", "26/12/1986", "Gardien") // Player 6
    );

    // Adding the age column

    // Add the Age cell to the first row
    $tab[0][] = "Âge";

    // Iterate over each row of the $tab array, starting from index 1 (skipping the header row)
    for ($i = 1; $i < count($tab); $i++) {

        // Retrieve the date of birth from the current row and create a DateTime object from it
        $dateOfBirth = DateTime::createFromFormat("d/m/Y", $tab[$i][2]);

        // Format the date of birth as "Y-m-d" and store it in the $FormattedDateOfBirth variable
        $FormattedDateOfBirth = $dateOfBirth->format("Y-m-d");

        // Calculate the age by calling the findAge() function with the formatted date of birth
        $age = findAge($FormattedDateOfBirth);

        // Append the calculated age to the current row of the $tab array
        $tab[$i][] = $age;
    }

    // Printing of the two-dimensionnal array
    echo "<p><u>Data table of the French national soccer team players</u> :<p>";
    echo "<table>\n";

    // Iterate over each row of the $tab array
    foreach ($tab as $line) {

        // Start a new table row
        echo "<tr>";

        // Iterate over each element in the current row
        foreach ($line as $element) {

            // Print each element as a table cell
            echo "<td>" . $element . "</td>";
        }

        // End the current table row
        echo "</tr>\n";
    }

    // Close the table
    echo "</table>";

    ?>

</body>

</html>