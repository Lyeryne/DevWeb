<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>
    <script>

    </script>
    <style>
       
    </style>

    <script>

    </script>
</head>
<body>



<form action = "" method = "post" style = "margin: 15% 0% 0% 25%;">
    <fieldset style = "border:none">
        <label for = "username">Utilisateur</label>
        <input type = "text" name = "username" required>
        <br><br>
        <label for = "password">Mot de passe</label>
        <input type = "password" name = "password" required>  
    </fieldset><br>
    <input name="submit" type="submit" value="Connexion"/>
</form>

<?php

  function Informations()
    {
        session_start();    

        if (isset($_POST['submit']))
        {
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['username'] = $_POST['username'];

            echo '<script> window.location.replace("http://localhost/TP6_NOLLAND_CHAOUCHE_ALFANDARI_ALI MLADJAO/exo3/Verification.php"); </script>"';
        }
    }

    Informations();
?>


<!--
    commentaire 
-->

</body>
</html>