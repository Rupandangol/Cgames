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
        <style>
        .bg-body {
            background: rgba(150, 50, 150, 0.3);
            {{--background: url("{{url('images/bg-logo.jpg')}}") fixed no-repeat center/cover;--}}
        }

        .bg-custom-container {
            background: rgba(100, 200, 150, 0.3);
        }

        .bg-header {
            background: linear-gradient(to right ,transparent,lightgray,lightgrey,lightgrey, transparent);
        }

        .logo-image {
            padding: 10px 0;
            height: 80px;
            width: 80px;
            border: 1px solid darkred;
            border-radius: 50%;
            box-shadow: 5px 5px 5px grey;
        }


    </style>
    @yield('css')
</head>
<body class="bg-body">
<div class="container bg-custom-container">
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
    <hr>
