<!DOCTYPE html>
<html>
<head>
	<title>Exercice 4</title>
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
    <h1>Formulaire pour joueur</h1>
    <form method="post" action="saveplayer.php">
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
                <td><label>Date de naissance :</label></td>
                <td><input type="text" name="date" value="dd/mm/yyyy" pattern="\d{2}/\d{2}/\d{4}" required></td>
            </tr>
            <tr>
                <td><label>Poste :</label></td>
                <td><input type="text" name="poste"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Enregistrer" style="margin-left:50px;"></td>
            </tr>
        </table>
    </form>
</body>
</html>

