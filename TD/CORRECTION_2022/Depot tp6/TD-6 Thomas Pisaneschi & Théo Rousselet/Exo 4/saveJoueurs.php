<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $firstName = $_POST['firstName'];
    $dob = $_POST['dob'];
    $position = $_POST['position'];

    $playerData = "$name; $firstName; $dob; $position\n";

    $file = fopen('infoJoueurs.txt', 'a'); // Open the file in append mode
    fwrite($file, $playerData);
    fclose($file);

    echo "Informations sur le joueur enregistrés avec succes. <br>";
    echo "<a href='addPlayer.php'>Add another player</a>";
    }
    else {
    echo "Invalid request.";
}
?>
