<?php
   $p = $_GET['prenom'];
   $n = $_GET['nom'];
   $d = $_GET['bday'];


   function age($date) { 
      $anne = date('Y', strtotime($date));
      $age = date('Y') - $anne;  
      if (date('md') < date('md', strtotime($date))) 
      { 
         return $age - 1; 
      } 
      return $age; 
   } 

   
   echo "Bonjour $p $n," . "<br><br>";
   echo "vous avez " . age($d) . " ans.";

?>
