<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
</head>

<body>
<?php
    session_start();
    $id=$_POST["identifiant"];
    $mdp=$_POST["mdp"];

    $fichier=fopen("identifier.txt","r");
    $rep=0;
    $statut="";

    while(($ligne=fgets($fichier)) !== false){
        $info=explode(";",$ligne);
        if( $info[0]==$id && $info[1]==$mdp){
            $rep=1;
            $statut=$info[2];
        }
    }
    fclose($fichier);

    if($rep==1){
        if($statut !=="joueur"){
            header('Location:menucoach.php');
        }
        else{
            header('Location:searchstatistics.php');
        }
    }
    else{
        $_SESSION['error']= 1;
        header('Location:connexion.php');
    }

?>
</body>
</html>

