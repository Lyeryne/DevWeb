<!DOCTYPE html>
<html>
<head>
	<title>Add Statistics</title>
    <style>
        td{
			padding: 5px;
		};
    </style>
</head>
<body>
    <?php
        session_start();
    ?>
	<h1>Statistiques</h1>
	<form action="savestatistics.php" method="post">
        <table>
        <tr>
            <td>
		        <label>Joueur :</label>
            </td>
            <td>
		        <select name="joueur">
			        <?php
			    	$file = fopen("infojoueur.txt", "r");
                    if ($file) {
			    		while (($ligne = fgets($file)) !== false) {
			    			$info = explode(";", $ligne);
			    			$nom = $info[0];
						    $prenom = $info[1];
						    echo "<option>$nom $prenom</option>";
					    }
					    fclose($file);
				    }
			        ?>
		        </select>
            </td>
        </tr>
        <tr>
            <td><label>Nombre de buts :</label></td>
            <td><input type="number" name="but"></td>
        </tr>
        <tr>
            <td><label>Temps de jeu (en min):</label></td>
            <td><input type="number" name="temps" ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Enregistrer"></td>
        </tr>            
        </table>
	</form>
</body>
</html>
