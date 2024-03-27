<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>TP6</title>
    <meta charset="UTF-8">
    <style>
        #tablePadding td{
            padding:5px;
        }
    </style>
</head>
<body>
    <form method="post" action="Verification.php">
        <fieldset style="width:400px; height:150px;">
            <table id="tablePadding" style="padding:25px;">
                <tr>
                    <td>Utilisateur</td>
                    <td><input type="text" name="f_username"></td>
                </tr>
                <tr>
                    <td>Mot de passe</td>
                    <td><input type="password" name="f_password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" style="width:100%;" value="connexion"></td>
                <tr>
            </table>
            <?php 
                if(empty($_SESSION["currentUsername"])){
                    echo "<p style=\"color:red; margin-top:-20px;\">Nom d'utilisateur ou mot de passe incorrect</p>";
                }
            ?>
        </fieldset>
    </form>
</body>
</html>