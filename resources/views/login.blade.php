@extends('layout')

@section('title', 'Логин')

@section('content')
<h1><span>Авторизация</span></h1>
            <div>
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <input type="text" id="login" name="login" placeholder="Ваш Логин" required>
                    <input type="password" id="password" name="password" placeholder="Ваш Пароль" required>

                    <button class="submit">Войти</button>
                </form>
            </div>
@endsection