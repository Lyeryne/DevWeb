<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
    <style>
        td{
			padding: 5px;
		};
    </style>
</head>
<?php
    session_start();
    if(isset($_SESSION['error'])){
        echo "<p style='margin-left: 50px; color: red; font-style: italic;'>Invalid username or password</p>";
        session_unset();
    }
?>
<body>
    <h1>Connexion</h1>
    <form method="post" action="verificationconnexion.php">
        <table>
            <tr>
                <td><label>Identifiant :</label></td>
                <td><input type="text" name="identifiant"></td>
            </tr>
            <tr>
                <td><label>Mot de passe :</label></td>
                <td><input type="password" name="mdp"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Connexion" style="margin-left:50px;"></td>
            </tr>
        </table>
    </form>
</body>
</html>

