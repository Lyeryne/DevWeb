<!DOCTYPE html>
<html>

<head>
    <title>Bonjour</title>

    <style>
        .centered {
            /* Set the text alignment to center */
            text-align: center;
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
        if($dateOfBirth <= $currentDate){
        return $difference->y;
        }
        else {
            return -$difference->y;
        }
    }

    // Check if the form fields for first name, last name, and date are not empty
    if (!empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST["date"])) {

        // Assign the value of the "prenom" field from the form to the variable $prenom
        $prenom = $_POST["prenom"];

        // Assign the value of the "nom" field from the form to the variable $nom
        $nom = $_POST["nom"];

        /* Call the findAge() function with the value of the "date" field from the form as an argument
        and assign the result to the variable $age */
        $age = findAge($_POST["date"]);

        // Display a greeting message with the user's first name ($prenom), last name ($nom), and age ($age)
        echo "<p class='centered'>Bonjour " . $prenom . " " . $nom . ",</p><p class='centered'>Vous avez " . $age . " ans.</p>";
    } else {
        // If any of the form fields are empty, execute the code inside the else block.
    ?>
        <table>
            <tr>
                <!-- Display an error message informing the user to fill in all the form fields. -->
                <p class="centered">Veuillez remplir tous les champs du formulaire.</p>
            </tr>
            <tr>
                <!-- Display a button that links to the "MonFormulaire.php" page,
                allowing the user to return to the form. -->
                <div class="centered"><a href="MonFormulaire.php"><button type="button">Retour au formulaire</button></a></div>
            </tr>
        </table>
    <?php
    }
    ?>
</body>

</html>