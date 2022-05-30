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
            <div class="flex-center position-ref flex-column full-height">
                <div class="title d-flex justify-content-center m-b-md">
                    <img class="w-50" src="/img/medium_logo.png" alt="medium logo">
                </div>
                @if (Route::has('login'))
                <div class="top-right links">
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

                <div class="content">
                    <div class="links">
                        <a href="https://laravel.com/docs">Docs</a>
                        <a href="https://laracasts.com">Laracasts</a>
                        <a href="https://laravel-news.com">News</a>
                        <a href="https://blog.laravel.com">Blog</a>
                        <a href="https://nova.laravel.com">Nova</a>
                        <a href="https://forge.laravel.com">Forge</a>
                        <a href="https://vapor.laravel.com">Vapor</a>
                        <a href="https://github.com/laravel/laravel">GitHub</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="root"></div>

        <script src="{{ asset('js/front.js') }}"></script>
    </body>
</html>
