<?php

function dice_game() {

    // player choses
    $player_choice = rand(2, 12);

    // dice rolls
    $dice1 = rand(1, 6);
    $dice2 = rand(1, 6);

    $sum = $dice1 + $dice2;

    // Determine the winner
    $game_result = ($player_choice == $sum) ? 'wins' : 'loses';

    // Return the results
    return [
        'player_choice' => $player_choice,
        'dice1' => $dice1,
        'dice2' => $dice2,
        'sum' => $sum,
        'result' => $game_result
    ];
}
