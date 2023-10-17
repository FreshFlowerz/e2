<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project 1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <h1>Project 1</h1>

    <h2>Game Mechanics</h2>
    <ul>
        <li>...</li>
    </ul>

    <h2>Results</h2>

    <?php foreach($results as $key => $result) { ?>
    <ul>
        <li>Round #: <?php echo $key + 1 ?>
        <li>Player A flipped
            <?php echo $result['playerA'] ?>
        </li>
        <li>Player B defaults to
            <?php echo $result['playerB'] ?>
        </li>
        <li>The coin landed on
            <?php echo $result['flip'] ?>
        </li>
        <li>The Winner is
            <?php echo $result['winner'] ?>
        </li>
    </ul>
    <?php } ?>


    <?php foreach($results as $key => $result) { ?>
    <ul>
        <li>Round #: <?php echo $key + 1 ?>
        <li>Player A flipped
            <?php echo $result['playerA'] ?>
        </li>
        <li>Player B defaults to
            <?php echo $result['playerB'] ?>
        </li>
        <li>The coin landed on
            <?php echo $result['flip'] ?>
        </li>
        <li>The Winner is
            <?php echo $result['winner'] ?>
        </li>
    </ul>
    <?php } ?>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <script src="" async defer></script>
</body>

</html>

for ($i = 0; $i < 10; $i++) { // Flip the coin for player A $playerA=$coin[rand(0, 1)]; // For Player B default to
    whatever is left if ($playerA=='heads' ) { $playerB='tails' ; } else { $playerB='heads' ; } // Flip to pick the
    winning side $flip=$coin[rand(0,1)]; // Decide the winner if ($playerA==$flip) { $winner='Player A' ; } else {
    $winner='Player B' ; } // Display each ittiration of the game. This is an array that will display each itteration
    $results[]=[ 'playerA'=> $playerA,
    'playerB' => $playerB,
    'flip' => $flip,
    'winner' => $winner
    ];
    }

    require 'index-view.php';