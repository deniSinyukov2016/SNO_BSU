<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    {{--Подключение стилей--}}
    @include('include.files.style')

    <meta name="description" content="@yield('description')">

</head>

<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="https://lh3.googleusercontent.com/-N4NB2F966TU/WM7V1KYusRI/AAAAAAAADtA/fPvGVNzOkCo7ZMqLI6pPITE9ZF7NONmawCJoC/w185-h40-p-rw/logo.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            {{--Вывод меню в шапке--}}
            {{ Widget::run('menu_widget') }}

            <ul class="nav navbar-nav navbar-right">
                {{-- Подключение поиска --}}
                {{ Widget::run('search_widget') }}

                {{--Авторизация--}}
                @if (Auth::guest())
                    <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>Регистрация</a></li>
                    <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Войти</a></li>
                @else
                    <li><a href="/admin/"><span class="glyphicon glyphicon-log-in"></span>
                            {{ Auth::user()->name }} <span class="caret"></span>
                    </a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-12">--}}
            {{--<nav class="navbar-light">--}}
                {{--Подключение аворизации--}}
                {{--{!! Widget::AuthWidget() !!}--}}
            {{--</nav>--}}
        {{--</div>--}}
        {{--<div class="col-md-12">--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-12">--}}
            {{--Подключение меню--}}
            {{--{!! Widget::MenuWidget() !!}--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--Подключение хлебных крошек --}}
    {{--{!! Breadcrumbs::render() !!}--}}

