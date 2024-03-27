<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>save Joueurs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>
    <script>
        function savePlayer() {
        <?php
            //save player into infoJoueurs.txt
            $file = fopen("infoJoueurs.txt","a")or die("Unable to open file!");

            //write new player
            $j = ';';
            $txt = $_POST["nom"]. $j . $_POST["prenom"]. $j . str_replace('-','/',$_POST["date"]). $j . $_POST["poste"] . "\n";
            fwrite($file, $txt);
            fclose($file);
        ?>

            return 1;
        }
    </script>
    <style>
       button,a
       {
        text-align: center;
        margin: auto;
        display: flex;
        justify-content: center;
       }
    </style>

    <script>
 
    </script>
</head>
<body>




<button onclick="savePlayer()" style="margin-top: 20%"> Sauvegarder le joueur </button>

<a href="javascript:history.back()">Page Précédente</a>
<!--
    commentaire 
-->

</body>
</html>