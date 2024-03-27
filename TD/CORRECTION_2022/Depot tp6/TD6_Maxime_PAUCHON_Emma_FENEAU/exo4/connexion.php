<?php
session_start();
echo $_SESSION['error'];
session_destroy();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Portail de connexion</title>
</head>
<body>
    <form action="verifConnexion.php" method="post">
        <table>
            <tr>
                <td><label for="identifier">identifier</label></td>
                <td><input type="text" name="identifier" id="identifier"></td>
            </tr>
            <tr>
                <td><label for="password">password</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>   
        </table>
        <input type="submit" value="connexion">
    </form>
</body>