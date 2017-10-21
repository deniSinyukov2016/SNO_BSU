<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>@yield('title')</title>
    <meta name="apple-mobile-web-app-title" content="">
    {{--Подключение стилей--}}
    @include('include.files.style')
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <meta name="description" content="@yield('description')">

</head>

<body style="overflow: auto;">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar-light">
                {{--Подключение аворизации--}}
                {!! Widget::AuthWidget() !!}
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            {{--Подключение меню--}}
            {!! Widget::MenuWidget() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <nav class="breadcrumb ">
                <a class="breadcrumb-item" href="#">Home</a>
                <a class="breadcrumb-item" href="#">Library</a>
                <a class="breadcrumb-item" href="#">Data</a>
                <span class="breadcrumb-item active ">Bootstrap</span>
                {{--Подключение поиска--}}
                {!! Widget::SearchWidget() !!}
            </nav>
        </div>
    </div>
