<?php
$games = [
    '0' => ['name' => 'Quiz', 'url' => 'quiz', 'image' => 'dummy.jpg'],
    '1' => ['name' => 'Tic Tac Toe', 'url' => 'TTT', 'image' => 'tictactoe.jpg'],
    '2' => ['name' => 'Hangman Style', 'url' => 'hangman', 'image' => 'hangman.jpg']
];

?>

@include('includes.header')

<div class="row">
    <div class="col-md-8">
        <div class="row">
            @forelse($games as $game)
                <div class="col-md-6 col-lg-4 p-2">
                    <a href="/games/{{$game['url']}}/index">
                        <div class="game-block text-center p-2 bg-dark">
                            <h4 class="text-danger">{{$game['name']}}</h4>
                            <img src="{{url('images/game/'.$game['image'])}}" alt="image"
                                 style="width:220px;height:220px;">
                        </div>
                    </a>
                </div>
            @empty
                No games available.
            @endforelse
        </div>
    </div>
        <div class="col-md-4">
            <a href="/admin">
                <div class="border p-3">
                    <h3 class="text-success">Add new games every week!! Panel</h3>
                    <img width="280px" src="{{url('images/logo.png')}}" alt="image">
                </div>
            </a>
        </div>
    </div>
</div>

@include('includes.footer')