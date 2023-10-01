<?php
include 'game_logic.php';
$result = dice_game();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Game Simulator</title>
</head>
<body>
    <h1>Dice Game Simulator</h1>
    <h2>Mechanics</h2>
    <p>Player randomly picks a potential sum of 2 dice (number between 2 and 12).</p>
    <p>2 dice of 6 sides are rolled producing 2 random numbers between 1 and 6, these numbers are summed.</p>
    <p>If player guessed the number right, they win.</p>
    <p>Otherwise, Player loses.</p>

    <h2>Results</h2>
    <p>Player picks <?php echo $result['player_choice']; ?></p>
    <p>Dice "1" rolls <?php echo $result['dice1']; ?> and dice "2" rolls <?php echo $result['dice2']; ?> </p>
    <p>The sum is <?php echo $result['sum']; ?></p>
    <p>Player <?php echo $result['result']; ?></p>
</body>
</html>
