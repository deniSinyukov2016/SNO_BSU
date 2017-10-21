@extends('layouts.inner-page')
@section('title','Научное сообщество молодежи НИУ БелГУ - Новости')
@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    @forelse($posts as $post)
        <article class="blog-post" data-id="{{$post->id}}">
            <header>
                <h2 class="blog-post-title"><a href="news/{{$post->alias}}">{{$post->title}}</a></h2>
                <p class="blog-post-meta"><span>{{\Carbon\Carbon::parse($post->created_at)->format('d.m.Y')}}</span></p>
                <p></p>
            </header>
            {{str_limit($post->content, 350)}}
            <a href="news/{{$post->alias}}">Подробнее →</a>
        </article>
    @empty
        <p>Постов нет</p>
    @endforelse
    {{--Вывод постраничной навигации из view/vendor/pagination/default.blade.php--}}
    {!! $posts->render()!!}
@endsection