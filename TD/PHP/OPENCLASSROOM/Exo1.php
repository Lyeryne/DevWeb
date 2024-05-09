<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1</title>
</head>

<body>
    <?php
    $recipes = [
        [
            'title' => 'Cassoulet',
            'recipe' => 'Etape 1 : des flageolets !',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Couscous',
            'recipe' => 'Etape 1 : de la semoule',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => false,
        ],
        [
            'title' => 'Escalope milanaise',
            'recipe' => 'Etape 1 : prenez une belle escalope',
            'author' => 'mathieu.nebra@exemple.com',
            'is_enabled' => true,
        ],
    ];
    ?>

    <h1>Affichage des recettes</h1>
    <?php foreach ($recipes as $recipe) {
        if (array_key_exists('is_enabled', $recipe)) {
            echo "<h2>{$recipe['title']}</h2>" . PHP_EOL;
            echo "{$recipe['recipe']} <br/>";
            echo "{$recipe['author']} <br/>";
        }
    } ?>
</body>

</html>