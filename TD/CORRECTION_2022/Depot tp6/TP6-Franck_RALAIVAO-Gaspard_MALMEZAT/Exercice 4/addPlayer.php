<!DOCTYPE html>
<html lang="fr">
   <head>
   <meta charset="UTF-8">
</head>
 <body>
 <table>
 <form action="Saveplayers.php" method="post">
 <h>Add a new player</h>
<tr>
    <tr>
    <td>Name :</td>
    <td><input type="texte" name="name" id="name" required></td>
    </tr>
    <tr>
    <td>Firstname :</td>
    <td><input type="texte" name="firstname" id="firstname" required></td>
    </tr>
    <tr>
    <td>Date of Birth :</td>
    <td><input type="date" name="dateofbirth" id="dateofbirth" required></td>
    </tr>
    <tr>
    <td>Position :</td>
    <td><select name="position" name="position" id="position" required>
            <option value="gardien">Gardien</option>
            <option value="defenseur">Defenseur</option>
            <option value="milieu">Milieu</option>
            <option value="attaquant">Attaquant</option></select></td>
            </tr>
    <td><input type="submit" value="Add player"></td>
</tr>

</form>
</table>

</body>
</html>