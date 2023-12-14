@extends('templates/master')

@section('title')
    {{ $welcome }}
@endsection

@section('content')
    <h2>Mechanics</h2>
    <div>
        <p>Pick a potential sum of 2 dice (number between 2 and 12).</p>
        <p>2 dice of 6 sides are rolled producing 2 random numbers between 1 and 6, these numbers are summed.</p>
        <p>If you guessed the number right, you win.</p>
        <p>Otherwise, you lose.</p>
    </div>

    <form method='POST' id='gmae-play' action='/play'>

        <div id='guess'>
            <label for="guess_number">Your guess (2-12):</label>
            <input type="number" test="guess-number" id="guess_number" name="guess_number" min="2" max="12" 
                required {{ $app->old('guess_number', 2) }}>
        </div>
        <div class="margin-top">
            <a href='/history'>Access Game History</a>
        </div>
        <div class="margin-top">
            <button test='submit' type='submit'>Roll!</button>
        </div>
    </form>

    @if ($results)
        <div test='results' id='results'>
            <h2>Results</h2>
            <p>Dice 1 rolled on {{ $results['dice1'] }}</p>
            <p>Dice 2 rolled on {{ $results['dice2'] }}</p>
            <p>Their sum is <span test='roll'>{{ $results['dice_sum'] }}</span></p>
            <p>You chose {{ $results['guess'] }}</p>
            <p>You <span test='result'>{{ $results['outcome'] }}</span></p>
        </div>
    @endif
@endsection

