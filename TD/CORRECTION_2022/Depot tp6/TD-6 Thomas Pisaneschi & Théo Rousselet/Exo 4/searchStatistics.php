<!DOCTYPE html>
<html>
<head>
    <title>Chercher des stats</title>
</head>
<body>
    <h2>Chercher des stats</h2>
    <form action="showStatistics.php" method="POST">
        <label for="name">Nom:</label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="firstName">Prenom:</label>
        <input type="text" name="firstName" id="firstName" required><br><br>
        <input type="submit" value="Rechercher">
    </form>
</body>
</html>