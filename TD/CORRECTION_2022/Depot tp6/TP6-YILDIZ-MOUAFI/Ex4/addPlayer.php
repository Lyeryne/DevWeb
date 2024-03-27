<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>TP6</title>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="savePlayers.php">
        <p>Your last name: <input type="text" name="lastName"></p>
        <p>Your first name: <input type="text" name="firstName"></p>
        <p>Your birth date: <input type="date" name="birthDate"></p>
        <p>Your position: 
            <select name="position">
                <option>attaquant</option>
                <option>milieu</option>
                <option>défense</option>
                <option>gardien</option>
                <option selected></option>
            </select>
        </p>
        <input type="submit">
    </form>
</body>
</html>