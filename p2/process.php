<?php

session_start();

$guess = $_POST['guess_number'];

// dice rolls
$dice1 = rand(1, 6);
$dice2 = rand(1, 6);

$dice_sum = $dice1 + $dice2;

$outcome = ($guess == $dice_sum) ? 'won' : 'lost';


$_SESSION['results'] = [
    'dice1' => $dice1,
    'dice2' => $dice2,
    'dice_sum' => $dice_sum,
    'guess' => $guess,
    'outcome' => $outcome
];

header('Location: index.php');