<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>
    <script>

    </script>
    <style>
        p
        {
            margin: 0% 60% 0% 30%;
        }
    </style>

    <script>
 
    </script>
</head>
<body>


<p style="margin-top: 25%">Bonjour,</p>
<p style="text-align: right;">
    <?= $_SESSION["username"] ?>
</p>
<a href="http://localhost/TP6_NOLLAND_CHAOUCHE_ALFANDARI_ALI MLADJAO/exo3/Connexion.php">Page Précédente</a>
<!--
    commentaire 
-->

</body>
</html>