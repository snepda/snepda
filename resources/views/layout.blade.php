<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
  <header><a href={{route('home')}}>True Games</a>
    <div>
      <a href={{route('aboutUs')}}>О нас</a>
      <a href={{route('catalog')}}>Каталог</a>
      <a href={{route('whereToFind')}}>Где нас найти?</a>
    </div>
    <div>
    @if (!auth()->user())
    <a href={{route('register')}}>Зарегистрироваться</a> <a href={{route('login')}}>Войти</a>
    @else
    <a href={{route('logout')}}>Выйти</a>
    @endif
  </div></header>
    @yield('content')
</body>
</html>