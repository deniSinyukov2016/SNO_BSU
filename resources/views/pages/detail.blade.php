@extends('layouts.main')
@section('title',"$post->title")
@section('content')

    <article class="blog-post" data-id="{{$post->id}}">
        <header>
            <h2 class="blog-post-title">{{$post->title}}</h2>
            <p class="blog-post-meta"><span>{{\Carbon\Carbon::parse($post->created_at)->format('d.m.Y')}}</span></p>
            <img src="{!! $post->thumbnail !!}" alt="">
            <p></p>
        </header>
        {!!  $post->content !!}
    </article>

@endsection