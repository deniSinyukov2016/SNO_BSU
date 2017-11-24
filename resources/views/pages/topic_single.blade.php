@extends('layouts.inner-page')
@section('title','Список постов')
@section('content')
    {{--{{dd($topic)}}--}}
    <article class="blog-post" data-id="">
        <header>
            <h2 class="blog-post-title"><a href="">{{$topic->alias}}</a></h2>
            <p class="blog-post-meta"><span></span></p>
            <p></p>
        </header>
        <a href="news/">Подробнее →</a>
    </article>


@endsection