<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Guest Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Style -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <div id="guest-wrapper">
            <div class="guest-header">
                <div id="guest-logo" class="d-flex px-3">
                    <img class="img-fluid" src="/img/medium_logo.png" alt="medium logo">
                </div>
                @if (Route::has('login'))
                <div class="top-right py-2 links">
                    @auth
                    <a href="{{ route('admin.home') }}">Home</a>
                    <a href="{{ route('admin.posts.index') }}">Posts</a>
                    <a href="{{ route('admin.categories.index') }}">Topics</a>
                    @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>
        <div id="root"></div>

        <script src="{{ asset('js/front.js') }}"></script>
    </body>
</html>
