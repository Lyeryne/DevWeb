<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Verification...</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>
    <script>

    </script>
    <style>

    </style>

    <script>

    </script>
</head>
<body>




<p>Connexion...</p>

<?php

    session_start();
    $_SESSION['valid'] = false;

    $file = fopen("identifier.txt","r")or die("error message: unable to open file");

    $db = array();
    while(!feof($file)) 
    {
        $line = fgets($file);
        $data = explode(';', $line);

        $db[$data[0]] = array($data[1],$data[2]);
    }
    

    $conditions = (isset($db[$_SESSION['username']]) && ($db[$_SESSION['username']][0] === $_SESSION['password']));
    if($conditions) 
    {
        // on compare avec arsenewenger parce que sinon ca ne marche pas (meme si on compare au meme string)
        if($db[$_SESSION['username']][1] === $db["ArseneWenger"][1])
        {
            $home = "http://localhost/TP6_NOLLAND_CHAOUCHE_ALFANDARI_ALI MLADJAO/exo4/menu.php";
        }
        else
        {
            $home = "http://localhost/TP6_NOLLAND_CHAOUCHE_ALFANDARI_ALI MLADJAO/exo4/searchStatistics.php";
        }
        
        echo "<script> window.location.replace('".$home."'); </script>";
    }
    else
    {
        
        echo "<script> window.location.replace('http://localhost/TP6_NOLLAND_CHAOUCHE_ALFANDARI_ALI MLADJAO/exo4/connexion.php'); </script>";
    }

    fclose($file);
?>

<!--
    commentaire 
-->

</body>
</html>