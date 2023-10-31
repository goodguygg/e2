<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 2</title>
</head>
<body>
    <h1>Project 2 Dice Game</h1>
    <h2>Mechanics</h2>
    <div>
        <p>Pick a potential sum of 2 dice (number between 2 and 12).</p>
        <p>2 dice of 6 sides are rolled producing 2 random numbers between 1 and 6, these numbers are summed.</p>
        <p>If you guessed the number right, you win.</p>
        <p>Otherwise, you lose.</p>
    </div>

    <form method='POST' action='process.php'>

        <div id='guess'>
            <label for="guess_number">Your guess (2-12):</label>
            <input type="number" id="guess_number" name="guess_number" min="2" max="12" required 
                value="<?php echo isset($guess) ? $guess : 2; ?>">
        </div>
        <div>
            <button type='submit'>Roll!</button>
        </div>
    </form>

    <?php if (isset($results)) { ?>
        <div id='results'>
            <h2>Results</h2>
            <p>Dice 1 rolled on <?php echo $results['dice1']?></p>
            <p>Dice 2 rolled on <?php echo $results['dice2']?></p>
            <p>Their sum is <?php echo $results['dice_sum']?></p>
            <p>You chose <?php echo $results['guess']?></p>
            <p>You <?php echo $results['outcome']?></p>
        </div>
    <?php } ?>

</body>
</html>