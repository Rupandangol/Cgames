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
    <link rel="stylesheet" href="{{url('css/customStyle.css')}}">
    @yield('css')
</head>
<body class="bg-body">
<div class="container bg-custom-container">
    {{--header--}}
    <div class="row p-3 bg-header">
        <div class="col-sm-3 col-md-3 text-right">
            <b class="text-info" style="font-size: 1.5em;">Collaborate <br>Games</b>
        </div>
        <div class="col-sm-9 col-md-3">
            <a href="/">
                <img class="logo-image" src="{{url('images/logo.png')}}" alt="logo">
            </a>
        </div>
        <div class="col-md-6">
            <br><b class="text-info">Play and share your games <br>in this free platform!</b>
        </div>
    </div>
    {{--header end--}}
    <hr>
