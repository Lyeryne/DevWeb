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
    <form method="post" action="showStatistics.php">
        <p>Last name: <input type="text" name="lastName"></p>
        <p>First name: <input type="text" name="firstName"></p>
        <input type="submit">
    </form>
</body>
</html>