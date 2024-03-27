<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Formulaire de connexion</title>
    <style>
    .champ{
        height:40px;
        width:300px;

    }

    .submit{
        height:30px;
        width:300px;

    }

    .center-div {

     margin: 0 auto;
     width: 100px;
     padding: 8px;
    }
    </style>
  </head>
  <body>
    <form action="traitement.php" method="post">
        <div class="center-div">
            <input class="champ" type="text" name="pseudo" placeholder="Utilisateur">
        </div>
        <div class="center-div">
            <input class="champ" type="text" name="mdp" placeholder="Mot de passe">
        </div>
        <div class="center-div">
            <button class="submit" type="submit">connexion</button>
        </div>
    </form>
  </body>
</html>