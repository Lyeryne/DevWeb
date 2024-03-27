<!DOCTYPE html>
<html>
<head>
	<title>Exercice 2 :bjr</title>
</head>
<body>
<?php
    session_start();
    function CalculAge($DateDeNaissance){
		$DateDeNaissance= DateTime::createFromFormat('d/m/Y', $DateDeNaissance)->format('Y-m-d');
		$DateDeNaissance= new DateTime($DateDeNaissance);
		$DateCourante= new DateTime();
		return $DateCourante->diff($DateDeNaissance)->format('%y');
	}
    if(isset($_POST["prénom"]) && isset($_POST["nom"]) && isset($_POST["date"])){
        $prenom=$_POST["prénom"];
        $nom=$_POST["nom"];
        $age=CalculAge($_POST["date"]);
        echo "Bonjour ". $prenom. " ". $nom .".</br> Vous avez ".$age." ans.";
    }
    else{
        header('Location:monformulaire.php');
    }
?>
</body>
</html>