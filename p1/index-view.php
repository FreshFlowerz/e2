<!doctype html>
<html lang='en'>

<head>
    <title>Rock, Paper, Scissors</title>
    <meta charset='utf-8'>
</head>

<body>

    <h1>Rock Paper Scissors Game Simluator</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>Player A and Player B randomly “throw” either Rock, Paper or Scissors.
        <li>A tie is declared if both players throw the same move.
        <li>Otherwise: Rock beats Scissors, Scissors beats Paper, Paper beats Rock.</li>
        <li>In real life the winner would put the winning action on top of the losing player</li>
    </ul>

    <h2>Results</h2>

    <?php foreach($results as $key => $result) { ?>
    <ul>
        <li> Round #: <?php echo $key + 1?>
        <li>Player A throw <?php echo $result['playerA'] ?>
        <li>Player B throw <?php echo $result['playerB'] ?>
        <li>Winner: <?php echo $result['winner'] ?>
    </ul>
    <?php } ?>

</body>

</html>