<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			if(isset($_POST["submit"])) {
				informations();
			}
			function informations(){
				$_SESSION["user"]=$_POST["nom"];
				$_SESSION["mdp"]=$_POST["prenom"];
				echo "<script> location.href='Verification.php'; </script>";
			}
		?>
		<form method="post">
			<table>
				<tr>
					<td style="text-align:right;">Utilisateur</td>
					<td><input name="nom" type="text"><br></td>
				</tr>
				<tr>
					<td style="text-align:right;">Mot de passe</td>
					<td><input name="prenom" type="password"><br></td>
				</tr>
				<tr>
					<td></td>
					<td style="text-align:center;"><br><input type="submit" name="submit"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
