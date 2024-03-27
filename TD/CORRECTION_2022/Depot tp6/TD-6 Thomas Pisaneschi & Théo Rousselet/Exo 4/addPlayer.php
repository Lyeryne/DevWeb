<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un joueur</title>
</head>
<body>
    <h2>Ajouter un joueur</h2>
    <form action="Saveplayers.php" method="POST">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="firstName">Prenom:</label>
        <input type="text" id="firstName" name="firstName" required>
        <br>
        <label for="dob">Date de naissance:</label>
        <input type="date" id="dob" name="dob" required>
        <br>
        <label for="position">Poste:</label>
        <input type="text" id="position" name="position" required>
        <br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>