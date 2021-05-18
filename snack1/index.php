<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
$games = [
    [
        'home' => 'Detroit Pistons',
        'away' => 'Charlotte Hornets',
        'home score' => 136,
        'away score' => 121,
    ],

    [
        'home' => 'Los Angeles Lakers',
        'away' => 'Houston Rockets',
        'home score' => 98,
        'away score' => 110,
    ],

    [
        'home' => 'Brooklyn Nets',
        'away' => 'Miami Heat',
        'home score' => 107,
        'away score' => 120,
    ],

    [
        'home' => 'Chicago Bulls',
        'away' => 'Boston Celtics',
        'home score' => 118,
        'away score' => 112,
    ],
];

//var_dump($games);

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
    <ul>
        <?php for($i = 0; $i < count($games); $i++) { ?>
            <?php $this_game = $games[$i]; ?>
            <li>
                <?php echo $this_game['home'] ?> - <?php echo $this_game['away'] ?> || <?php echo $this_game['home score']?> - <?php echo $this_game['away score'] ?>
            </li>
             
        <?php } ?>
    </ul>
</body>
</html>




