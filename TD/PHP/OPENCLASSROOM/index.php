<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercez-vous #1</title>
</head>

<body>
    <?php
    $recipes = [
        [
            'title' => 'Kefta',
            'author' => 'Louaye',
        ],
        [
            'title' => 'Tajine',
            'author' => 'Rayane',
        ],
    ];
    ?>
    <ul>
        <?php for ($lines = 0; $lines < 2; $lines++) : ?>
            <li>
                <?php echo "{$recipes[$lines]['title']} : {$recipes[$lines]['author']} " ?>
            </li>
        <?php endfor; ?>
    </ul>
</body>

</html>