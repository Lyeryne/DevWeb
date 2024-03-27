<!DOCTYPE html>
<html>
   <head>
      <style>
         table, td {
            border: 1px solid black;
            border-collapse: collapse;
            width: 720px;
         }
      </style>
</head>
<body>
<?php
echo "Hello everyone <br> <br>"; 
echo date( 'd/m/Y H:i:s' );
echo "<br> <br>";
$data = array(
   array("Nom", "Prenom", "date de naissance", "Poste", "Age"),
   array("Giroud", "Olivier", "30/09/1986", "Attaquant", age("30/09/1986")),
   array("Griezmann", "Antoine", "21/03/1991", "Attaquant", age("21/03/1991")),
   array("Mbappe", "Kylian", "20/11/1998", "Attaquant", age("20/11/1998")),
   array("Kante", "N'Golo", "28/03/1991", "Milieu", age("28/03/1991")),
   array("Umtiti", "Samuel", "14/09/1993", "Défense", age("14/09/1993")),
   array("Lloris", "Hugo", "26/12/1986", "Gardien", age("26/12/1986"))
   
);

function age($naissance) {
   $today = new DateTime();
   $naissance = DateTime::createFromFormat( "d/m/Y", $naissance );
   $diff = $today->diff($naissance);
   return $diff->y;
}
echo "<table>";
   echo "<tr>";
      foreach ($data[0] as $header) {
         echo "<td>$header</td>";
      }
      echo"</tr>";

      for ($i = 1; $i < count($data); $i++) {
         echo "<tr>";
      foreach ($data[$i] as $case) {
         echo "<td>$case</td>"; 
      }
      echo "</tr>";
      }
   echo "</table>";
?>

</body>
</html>