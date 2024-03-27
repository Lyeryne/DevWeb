<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>addPlayer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>
    <script>

    </script>
    <style>
       form
       {
        text-align: right;
        margin: 10% 40% 0% 0%;
       }

       .user_input
       {
        padding-left: 4%;
       }
    </style>

    <script>
 
    </script>
</head>
<body>

<form action="saveJoueurs.php" method="post">
 <p>Nom du joueur<input type="text" name="nom" class="user_input" required/></p>
 <p>Prénom du joueur<input type="text" name="prenom" class="user_input" required/></p>
 <p>Date de naissance<input type="date" name="date" class="user_input" required/></p>
 <p>Poste<input type="text" name="poste" class="user_input" required/></p>
 <br>
 <p><input type="submit" value="Valider"></p>
</form>

<!--
    commentaire 
-->

</body>
</html>