<!DOCTYPE html>
<html>
    <head>
        <title>Ex1 BEDUE GALISSON TRUONG</title>
    </head>
    <body>
        <?php 
        echo "Partie 1 : ";
        $currentdate = date('l jS \of F Y h:i:s A');
        echo " Bonjour à tous ! La date et l'heure actuelles sont " . $currentdate . "<br>";

        echo "<br>";

        echo "Partie 2 :";
    
        // Définition des dates de naissance des joueurs 
        $GO1 = mktime(0, 0, 0, 9, 30, 1986);
        $GO2 = date("d/m/Y", $GO1);
        $GA1 = mktime(0, 0, 0, 3, 21, 1991);
        $GA2 = date("d/m/Y", $GA1);
        $MK1 = mktime(0, 0, 0, 11, 20, 1998);
        $MK2 = date("d/m/Y", $MK1);
        $KN1 = mktime(0, 0, 0, 3, 28, 1991);
        $KN2 = date("d/m/Y", $KN1);
        $US1 = mktime(0, 0, 0, 9, 14, 1993);
        $US2 = date("d/m/Y", $US1);
        $LH1 = mktime(0, 0, 0, 30, 26, 1986);
        $LH2 = date("d/m/Y", $LH1);

        // Création d'objets DateTime pour calculer l'âge des joueurs
        $CD = new DateTime();
        $GO3 = date_create('30-09-1986');
        $GA3 = date_create('21-03-1991');
        $MK3 = date_create('20-11-1998');
        $KN3 = date_create('28-03-1991');
        $US3 = date_create('14-09-1993');
        $LH3 = date_create('26-06-1988');
       
        // Calcul de l'âge des joueurs
        $AGO = $CD->diff($GO3)->y;
        $AGA = $CD->diff($GA3)->y;
        $AMK = $CD->diff($MK3)->y;
        $AKN = $CD->diff($KN3)->y;
        $AUS = $CD->diff($US3)->y;
        $ALH = $CD->diff($LH3)->y;
    
        // Création d'un tableau avec les informations des joueurs
        $foot = array (
            array("Nom", "Prenom", "DOB", "Poste", "Age"),
            array("Giroud", "Oliver", $GO2 , "Attaquant", $AGO ),
            array("Griezmann", "Antoine", $GA2 , "Attaquant", $AGA),
            array("Mbappe", "Kylian", $MK2 , "Attaquant", $AMK ),
            array("Kante", "N'Golo", $KN2 , "Milieu", $AKN),
            array("Umtiti", "Samuel", $US2 , "Defense", $AUS),
            array("Lloris", "Hugo", $LH2 , "Gardien", $ALH)
        );

        echo "<br>";
        echo '<table border = "1">';
        $c = 0;
        $r = 0;

        // Affichage du tableau
        while ( $r < 7 ){
            echo '<tr>';
            while ( $c < 5 ){
                echo '<td>';
                echo $foot[$r][$c];
                echo '</td>'; 
                $c = $c + 1;
            }
            echo '</tr>';
            $r = $r + 1;
            $c = 0;
        }
        
        ?>
    </body>
</html> 
