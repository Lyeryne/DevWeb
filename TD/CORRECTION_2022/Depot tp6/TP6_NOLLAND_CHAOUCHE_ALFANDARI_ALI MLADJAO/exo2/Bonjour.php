<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>
    <script>

    </script>
    <style>
       p
       {
        text-align: right;
        margin: 10% 60% 0% 0%;
       }
    </style>

    <script>
 
    </script>
</head>
<body>
<?php
    function age($date) {
        $current = new DateTime();
        $dob = DateTime::createFromFormat('Y-m-d', $date);
        $res = $current->diff($dob)->y;
        return $res;
    }
?>



<p>Bonjour <?php echo $_POST['prenom']." ".$_POST['nom'];?>,<br><br>
Vous avez <?php echo age($_POST['date']); ?> ans.</p>
<!--
    commentaire 
-->

</body>
</html>