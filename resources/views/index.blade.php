@extends('layouts.inner-page')
@section('title','Научное сообщество молодежи НИУ БелГУ - Новости')
@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <ul class="nav flex-column">
                <li class="nav-item">
                    <div class="jumbotron">
                        <h1>Bootstrap Tutorial</h1>
                        <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
                            responsive, mobile-first projects on the web.</p>
                    </div>
                    <p>This is some text.</p>
                    <p>This is another text.</p>
                </li>
                <li class="nav-item">
                    <div class="jumbotron">
                        <h1>Bootstrap Tutorial</h1>
                        <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
                            responsive, mobile-first projects on the web.</p>
                    </div>
                    <p>This is some text.</p>
                    <p>This is another text.</p>
                </li>
                <li class="nav-item">
                    <div class="jumbotron">
                        <h1>Bootstrap Tutorial</h1>
                        <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
                            responsive, mobile-first projects on the web.</p>
                    </div>
                    <p>This is some text.</p>
                    <p>This is another text.</p>
                </li>
            </ul>
@endsection