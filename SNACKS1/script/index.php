<?php
$matches = [
    [
        'home_team' => 'Palermo',
        'host_team' => 'Catania',
        'home_points' => 70,
        'host_points' => 40
    ],
    [
        'home_team' => 'Roma',
        'host_team' => 'Lazio',
        'home_points' => 70,
        'host_points' => 30
    ],
    [
        'home_team' => 'Milan',
        'host_team' => 'Inter',
        'home_points' => 50,
        'host_points' => 50
    ],
    [
        'home_team' => 'Brescia',
        'host_team' => 'Cagliari',
        'home_points' => 80,
        'host_points' => 60
    ]
]
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach($matches as $match) : ?>
        <li>
            <?= $match['home_team']?> - <?= $match['host_team']?> | <?= $match['home_points']?> - <?= $match['host_points']?>
        </li>
        <?php endforeach ?>
    </ul>
</body>

</html>