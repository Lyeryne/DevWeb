<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>save Statistics</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"></meta>

    <style>
       button,a
       {
        text-align: center;
        margin: auto;
        display: flex;
        justify-content: center;
       }
    </style>

    <script>

    </script>
</head>
<body>

<?php
    //save player into infoJoueurs.txt
    $file = fopen($_POST["name"]. " " . $_POST["first_name"] .".txt","r")or die("error message: unable to open file");

    $line = fgets($file);

    $data = explode(';', $line);

    fclose($file);  
    
    echo "<p> ". $data[0] . " " . $data[1] . " a " . $data[2] . " but marqués pour " . $data[3] . "min sur le terrain </p>";
?>

<a href="javascript:history.back()">Page Précédente</a>
<!--
    commentaire 
-->

</body>
</html>