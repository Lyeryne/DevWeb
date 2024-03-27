<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>add Statistics</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>
    <script>

    </script>
    <style>
       form
       {
        text-align: justify;
        display: auto;
       }

       input,select
       {
        margin-top: 1%;
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

<?php
    //read every line of infoJoueurs.txt, get str until ;, make array of it

    $file = fopen("infoJoueurs.txt","r")or die("Unable to open file!");

    $names = [];

    while(!feof($file)) 
    {
        $line = fgets($file);

        // replace first ';' with ' '
        $pos = strpos($line, ';');
        if ($pos !== false) {
            $line = substr_replace($line, ' ', $pos, strlen(';'));
        }

        $line = substr($line, 0, strpos($line, ';'));
        $names[] = $line;
    }

    fclose($file);
?>


<form action = "saveStatistics.php" method = "post" style = "margin: 15% 0% 0% 25%;">
    <label for="names">Liste des joueurs:</label>
    <select name="names" id="names">
    <?php
        foreach($names as $name):
    ?>
        <option value=<?=str_replace(' ', ';', $name)?>><?=$name?></option>
    <?php endforeach ?>
    </select>
    <br>
    <label for = "goal">Nombre de buts</label>
    <input type = "number" name = "goal" required>
    <br>
    <label for = "time">Temps de jeu (en min)</label>
    <input type = "number" name = "time" required>  
    <br><br>
    
    <button type = "submit" name = "valider">Valider</button>
</form>


<!--
    commentaire 
-->

</body>
</html>