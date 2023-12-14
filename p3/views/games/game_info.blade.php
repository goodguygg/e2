@extends('templates/master')

@section('title')
    Game Details
@endsection

@section('content')
    <h2>Game Details</h2>

    @if ($game)
        <p>Game ID: {{ $game['id'] }}</p>
        <p>Dice 1: {{ $game['dice_1'] }}</p>
        <p>Dice 2: {{ $game['dice_2'] }}</p>
        <p>Sum: {{ $game['sum'] }}</p>
        <p>Choice: {{ $game['choice'] }}</p>
        <p>Result: {{ $game['result'] }}</p>
        <p>Played at: {{ $game['roll_time'] }}</p>
    @else
        <p>Game not found.</p>
    @endif

    <a href='/history'>Back to Game History</a>
@endsection
