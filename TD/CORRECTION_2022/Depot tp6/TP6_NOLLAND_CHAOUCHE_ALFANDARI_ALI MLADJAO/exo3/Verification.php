<?php

    session_start();
    
    $db = array (
        "Admin" => "1234",
        "Admin2" => "56789"
    );

    if (isset($db[$_SESSION['username']]) && ($db[$_SESSION['username']] === $_SESSION['password'])) 
    {
        $_SESSION['valid'] = true;
    }
    else 
    {
        $_SESSION['valid'] = false;
    }
?>

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
        function Validation_Informations()
        {
            window.location.replace("http://localhost/TP6_NOLLAND_CHAOUCHE_ALFANDARI_ALI MLADJAO/exo3/Accueil.php");
        }

        function Refus_Information()
        {
            window.location.replace("http://localhost/TP6_NOLLAND_CHAOUCHE_ALFANDARI_ALI MLADJAO/exo3/Connexion.php");
        }

        function Controlleuuuuuur()
        {
            var condition = <?php 
                if (isset($_SESSION["valid"]) && $_SESSION["valid"]) 
                    echo 1;
                else
                    echo 0;
            ?>;
            
            if(typeof condition !== 'undefined' && condition == 1)
            {
                Validation_Informations();
            }
            else
            {
                Refus_Information();
            }
        }
    </script>
</head>
<body>




<p>Connexion...</p>
<script>    
    Controlleuuuuuur();
</script>



<!--
    commentaire 
-->

</body>
</html>