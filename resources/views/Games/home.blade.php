<?php
$games = [
    '0' => ['name' => 'Quiz', 'url' => 'quiz', 'image' => 'dummy.jpg'],
    '1' => ['name' => 'Tic Tac Toe', 'url' => 'TTT', 'image' => 'dummy.jpg'],
//    '2' => ['name' => 'Tic Tac Toe', 'url' => 'TTT', 'image' => 'dummy.jpg']
];

?>

        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Collaborate Games</title>
    <link rel="shortcut icon" type="image/png" href="{{URL::to('images/icon.png')}}">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
</head>
<body>

<div class="container bg-white">
    <div class="row">
        <div class="col text-center">
            <img height="100px" src="{{url('images/logo.png')}}" alt="logo">
            <h2>Collaborate Games</h2>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                @forelse($games as $game)
                    <div class="col-md-6 col-lg-4 p-2">
                        <a href="/games/{{$game['url']}}/index">
                            <div class="game-block text-center p-2 bg-dark">
                                <h4 class="text-danger">{{$game['name']}}</h4>
                                <img src="{{url('images/game/'.$game['image'])}}" alt="image" style="width:100%;max-height:280px;">
                            </div>
                        </a>
                    </div>
                @empty
                    No games available.
                @endforelse
            </div>
        </div>
        <div class="col-md-4">
            <a href="/login">
                <div class="border p-3">
                    <h3 class="text-success">Add new games every week!! Panel</h3>
                    <img width="280px" src="{{url('images/logo.png')}}" alt="image">
                </div>
            </a>
        </div>
    </div>
</div>

<script src="{{url('js/app.js')}}"></script>
</body>
</html>