<?php

$joueurs = [

    [
      'nom' => 'Nom',
      'prenom' => 'Prénom',
      'date' => 'Date de naissance',
      'poste' => 'Poste'
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
?>

<!DOCTYPE html>
<html>
<body>
<table style="border-collapse:collapse" >

<?php
echo "Hello everyone <br>"; 
echo "La date d'aujourd'hui est: " . date("d-m-Y") . " et l'heure est: " . date("H:i:s");
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

