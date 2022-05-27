<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    @include('app/svgs')

    @if (session()->has('status'))
        <h2 style="color: green">{{session()->get('status')}}</h2>
    @endif

    <nav class="navbar navbar-dark bg-dark justify-content-center">
        <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('laravel')}}">Laravel</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('posts.index')}}">Posts</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('posts.create')}}">New post</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>