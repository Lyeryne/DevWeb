<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<style>
		td{
			width: 100px; 
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
    <form method="post" action="verification.php">
        <table>
            <tr>
                <td><label>Utilisateur: </label></td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td><label>Mot de passe: </label></td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="connexion" style="width: 170px;"></td>
            </tr>
        </table>
    </form>
</body>
</html>