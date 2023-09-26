<?php
#............0......1........2
$moves = ['rock', 'paper', 'scissors']; #Arra of strings

#................0, 1, 2, 3, 4, 5
$strawLengths = [2, 2, 2, 2, 2, 1];

$mixed = ['rock', 1, .04, true];

// echo $moves[0]; # 'rock'
// echo $moves[1];
// echo $moves[2]; 
// echo $moves[3];
// var_dump($moves);

$randomNumber = rand(0, 2);

$move = $moves[$randomNumber];


# Associative arrays