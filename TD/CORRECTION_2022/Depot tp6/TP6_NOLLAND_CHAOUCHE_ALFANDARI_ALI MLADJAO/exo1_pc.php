<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>
    <script>

    </script>
    <style>
       table,tr,td
        {
            border:solid black thin;
            border-collapse: collapse;
        }
    </style>

    <script>
 
    </script>
</head>
<body>


<?php
    echo "Hello everyone ".date("Y-m-d h:i:s");

    $arrays = array
    (
        array("Nom","Prénom","date de naissance","Poste"),
        array("Giroud","Olivier","30/09/1986","Attaquant"),
        array("Griezmann","Antoine","21/03/1991","Attaquant"),
        array("Mbappe","Kylian","20/11/1998","Attaquant"),
        array("Kante","N'Golo","28/03/1991","Milieu"),
        array("Umtiti","Samuel","14/09/1993","Défense"),
        array("Lloris","Hugo","26/12/1986","Gardien")   
    );

    function age($date) {
        $current = new DateTime();
        $dob = DateTime::createFromFormat('d/m/Y', $date);
        $res = $current->diff($dob)->y;
        return $res;
    }

    array_push($arrays[0], "Age");


    array_push($arrays[1], age($arrays[1][2]));
    array_push($arrays[2], age($arrays[2][2]));
    array_push($arrays[3], age($arrays[3][2]));
    array_push($arrays[4], age($arrays[4][2]));
    array_push($arrays[5], age($arrays[5][2]));
    array_push($arrays[6], age($arrays[6][2]));
?>

<table width="75%">
    <?php
    foreach($arrays as $array):
    ?>
    <tr>
        <?php        
        foreach($array as $data):
        ?>
            <td><?= $data ?></td>
        <?php endforeach ?>
    </tr>
    <?php endforeach ?>
</table>

<!--
    commentaire 
-->

</body>
</html>