@extends('templates/master')

@section('title')
    Game History
@endsection

@section('content')
    <h2>Game History</h2>

    <a href='/'>Return Home</a>

    @if (count($games) > 0)
        <ul>
            @foreach ($games as $game)
                <li>
                    <a test='game-link' href="/game?id={{ $game['id'] }}">{{ $game['roll_time'] }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No games have been played yet.</p>
    @endif
    
@endsection
