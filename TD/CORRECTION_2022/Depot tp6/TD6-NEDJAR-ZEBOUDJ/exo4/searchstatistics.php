<!DOCTYPE html>
<html>
<head>
	<title>Search Statistics</title>
    <style>
        td{
			padding: 5px;
		};
    </style>
</head>

<?php
    session_start();
?>
<body>
    <h1>Recherche joueur :</h1>
    <form method="post" action="showstatistics.php">
        <table>
            <tr>
                <td><label>Nom :</label></td>
                <td><input type="text" name="nom"></td>
            </tr>
            <tr>
                <td><label>Prénom :</label></td>
                <td><input type="text" name="prenom"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Rechercher"></td>
            </tr>
        </table>
    </form>
</body>
</html>

