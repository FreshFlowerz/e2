<?php


$moves = ['rock', 'paper', 'scissors']; #Arra of strings
$total = 0;
for ($i = 0; $i <25; $i++) {
    // var_dump($i);

    $playerMoveA = $moves[rand(0,2)];
    $playerMoveB = $moves[rand(0,2)];

    // var_dump($playerMoveA);
    // var_dump($playerMoveB);

    if ($playerMoveA == $playerMoveB) {
        $winner = 'Tie';
        // var_dump('Tie');
    } elseif ($playerMoveA == 'rock' and $playerMoveB == 'scissors') {
        $winner = 'Player A';
        // var_dump('Player A wins');
    } elseif ($playerMoveB == 'rock' and $playerMoveA == 'scissors') {
        $winner = 'Player B';
        // var_dump('Player B wins');
    } elseif ($playerMoveA == 'scissors' and $playerMoveB == 'paper') {
        $winner = 'Player A';
        // var_dump('Player A wins');
    } elseif ($playerMoveB == 'scissors' and $playerMoveA == 'paper') {
        $winner = 'Player B';
        // var_dump('Player B wins');
    } elseif ($playerMoveA == 'paper' and $playerMoveB == 'rock') {
        $winner = 'Player A';
        // var_dump('Player A wins');
    } elseif ($playerMoveB == 'paper' and $playerMoveA == 'rock') {
        $winner = 'Player B';
        // var_dump('Player B wins');
    }

    $results[] = [
        'playerA' => $playerMoveA,
        'playerB' => $playerMoveB,
        'winner' => $winner
    ];
    $toalwins [] = [
        'wins' => $winner
    ];
}

// var_dump($results);

require 'index-view.php';