<!DOCTYPE html>
<html>
 <head>
    <meta charset = "utf-8">
    <title>Formulaire</title>
    <style>

        td
        {
        text-align: right;
        padding: 3px;
        }    

        .champ
        {
            height:18px;
            width:200px;
        }
        .submit
        {
            margin-left:200px;
            margin-top:25px;
        }
    </style>
 </head>
 <body>
    
    
    
    <form action="reponse_exo2.php" method="GET">
    <table>
        <tr>
            <td>Quel est votre nom ?</td>
            <td><input class="champ" type="text" name="nom"></td>
        </tr>
        <tr>
            <td>Quel est votre prénom ?</td>
            <td><input class="champ" type="text" name="prenom"></td>
        </tr>
        <tr>
            <td>Quel est votre date de naissance ?</td>
            <td><input class="champ" type="date" name="bday"></td>
            
        </tr>
    </table>
    
    
     <input class="submit" type="submit">
    </form>
    
 </body>
</html>


