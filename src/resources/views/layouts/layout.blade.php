<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @section('head_option')

    @show
    <title>@yield('title')</title>
</head>
<body>

{{-- ナビゲーションバー --}}
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="/home">Kanjo Reflection Diary</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link active" href="/emotion/create">Input Emotion</a>
        </li>
    </ul>
</nav>

{{-- コンテンツ --}}
@yield('content')

{{-- フッター --}}
<footer class="footer">
    <div class="container text-center">
        <small>COPYRIGHT © Kanjo Reflection Diary, Inc. All rights reserved.</small>
    </div>
</footer>
</body>
</html>
