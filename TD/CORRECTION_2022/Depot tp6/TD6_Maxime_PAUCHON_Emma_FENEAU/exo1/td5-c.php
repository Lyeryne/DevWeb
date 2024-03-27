<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$joueurs = [

    [
      'nom' => 'Nom',
      'prenom' => 'Prénom',
      'date' => 'Date de naissance',
      'poste' => 'Poste',
      'age' => 'Age'
    ],
 
    [
        'nom' => 'Giroud',
        'prenom' => 'Olivier',
        'date' => '30/09/1986',
        'poste' => 'Attaquant'
      ],
 
      [
        'nom' => 'Griezmann',
        'prenom' => 'Antoine',
        'date' => '21/03/1991',
        'poste' => 'Attaquant'
      ],
 
      [
        'nom' => 'Mbappe',
        'prenom' => 'Kylian',
        'date' => '20/11/1998',
        'poste' => 'Attaquant'
      ],
 
      [
        'nom' => 'kante',
        'prenom' => 'N\'Golo',
        'date' => '28/03/1991',
        'poste' => 'Milieu'
      ],
 
      [
        'nom' => 'Umtiti',
        'prenom' => 'Samuel',
        'date' => '14/09/1993',
        'poste' => 'Défense'
      ],

      [
        'nom' => 'Lloris',
        'prenom' => 'Hugo',
        'date' => '26/12/1986',
        'poste' => 'Gardien'
      ],
   
];

 function calculateAge($birthStr){
   
     $birth = DateTime::createFromFormat("d/m/Y",$birthStr);
     $today = new DateTime();
     $interval = $birth->diff($today);
     $diff = $interval->format('%Y ans');
     return ($diff);
}

 function addAge(&$joueurs){
    foreach($joueurs as $key => &$joueur){
        if ($key == 0){
            continue;
        }

        $years = calculateAge($joueur['date']);
        $joueur['âge'] = $years;
    }
}

?>

<!DOCTYPE html>
<html>
<body>
<table style="border-collapse:collapse" >

<?php
addAge($joueurs);
?>

<?php foreach($joueurs as $joueur) { ?> 
<tr style="border-spacing:0px;" >
    <?php foreach($joueur as $value) { ?>
        <td style="border: 1px black solid; padding:0px; border-spacing:0px">
            <?php echo $value ?>
        </td>
            <?php } ?>
</tr> 
    <?php } ?>
    
</table>
</body>
</html>

