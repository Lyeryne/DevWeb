<!DOCTYPE html>
<html>

<head>
	<title>Mon Formulaire</title>

	<style>
		/* Positioning the form element with ID "monformulaire" */
		#monformulaire {
			/* Setting the top margin to 17% and the left margin to 37% */
			margin-top: 17%;
			margin-left: 37%;
		}

		/* Centering the text within input elements */
		input {
			/* Setting the text alignment to center */
			text-align: center;
		}

		/* Styling the submit button */
		input[type="submit"] {
			/* Setting the width to 60% of the container */
			width: 60%;
			/* Positioning the button relative to its normal position */
			position: relative;
			/* Moving the button 20% to the left */
			left: 20%;
		}
	</style>
</head>

<body>
	<!-- Creating a form with method "post" and action "Bonjour.php" and assigning the ID "monformulaire" -->
	<form method="post" action="Bonjour.php" id="monformulaire">
		<!-- Creating a table to organize the form fields -->
		<table>
			<!-- Creating a table row -->
			<tr>
				<td>
					<!-- Displaying the question "Quel est votre nom ?" -->
					Quel est votre nom ?
				</td>
				<td>
					<!-- Creating a text input field with the name "nom" -->
					<input type="text" name="nom">
				</td>
			</tr>
			<tr>
				<td>
					<!-- Displaying the question "Quel est votre prénom ?" -->
					Quel est votre prénom ?
				</td>
				<td>
					<!-- Creating a text input field with the name "prenom" -->
					<input type="text" name="prenom">
				</td>
			</tr>
			<tr>
				<td>
					<!-- Displaying the question "Quel est votre date de naissance ?" -->
					Quel est votre date de naissance ?
				</td>
				<td>
					<!-- Creating a date input field with the name "date" -->
					<input type="date" name="date">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<!-- Creating a submit button with the name "valider" and the value "Valider" -->
					<br><input type="submit" name="valider" value="Valider">
				</td>
			</tr>
		</table>
	</form>
</body>

</html>