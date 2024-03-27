<!DOCTYPE html>
<html>
<head>
	<title>Exercice 2</title>
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
    <form method="post" action="bonjour.php">
        <table>
            <tr>
                <td><label>Quel est votre nom?</label></td>
                <td><input type="text" name="prénom"></td>
            </tr>
            <tr>
                <td><label>Quel est votre prénom?</label></td>
                <td><input type="text" name="nom"></td>
            </tr>
            <tr>
                <td><label>Quel est votre date de naissance?</label></td>
                <td><input type="text" name="date" value="dd/mm/yyyy" pattern="\d{2}/\d{2}/\d{4}" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Valider" style="width: 60px; margin-left:50px;"></td>
            </tr>
        </table>
    </form>
</body>
</html>

