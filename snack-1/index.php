<?php

$matches = [
    [
        'home' => [
            'name' => 'VIRTUS SEGAFREDO BOLOGNA',
            'score' => 79,
        ],
        'away' => [
            'name' => 'GERMANI BRESCIA',
            'score' => 57,
        ],
    ],
    [
        'home' => [
            'name' => 'VANOLI BASKET CREMONA',
            'score' => 112,
        ],
        'away' => [
            'name' => 'DOLOMITI ENERGIA TRENTINO',
            'score' => 105,
        ],
    ],
    [
        'home' => [
            'name' => 'UMANA REYER VENEZIA',
            'score' => 69,
        ],
        'away' => [
            'name' => 'A|X ARMANI EXCHANGE MILANO',
            'score' => 74,
        ],
    ],
    [
        'home' => [
            'name' => 'OPENJOBMETIS VARESE',
            'score' => 96,
        ],
        'away' => [
            'name' => 'BANCO DI SARDEGNA SASSARI',
            'score' => 110,
        ],
    ],
];

$matches = array_map(function ($match) {
    $teams = "{$match['home']['name']} - {$match['away']['name']}";
    $scores = "{$match['home']['score']}-{$match['away']['score']}";
    return "$teams | $scores";
}, $matches);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <ul>
            <?php foreach ($matches as $match) : ?>
                <li><?= $match ?></li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>

</html>
