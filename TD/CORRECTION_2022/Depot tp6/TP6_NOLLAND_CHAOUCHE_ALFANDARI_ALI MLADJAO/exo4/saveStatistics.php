<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>save Statistics</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>

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
        function saveStats()
        {
        <?php
            //save player into infoJoueurs.txt
            $file = fopen(str_replace(';', ' ', $_POST["names"]).".txt","w")or die("Unable to open file!");

            //write new stats for the player
            $j = ';';
            $txt = $_POST["names"]. $j . $_POST["goal"]. $j . $_POST["time"] . "\n";
            fwrite($file, $txt);
            fclose($file);
        ?>

            return 1;
        }
    </script>
</head>
<body>




<button onclick="saveStats()" style="margin-top: 20%"> Sauvegarder les stats </button>

<a href="javascript:history.back()">Page Précédente</a>
<!--
    commentaire 
-->

</body>
</html>