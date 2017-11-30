@extends('layouts.main')
@section('title', '| Новости')
@section('content')
    <h2>Список новостей</h2>
    @forelse($posts as $post)
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <article class="post">
                    <header class="post-header">
                        <h2 class="post-title"><a href="{!! route('news.single',$post->alias) !!}" title="{{$post->title}}">{{$post->title}}</a></h2>
                    </header>
                    <section class="post-excerpt">
                        <p>{!! str_limit($post->content, 350)!!} […]</p>
                        <a class="read-more" title="{{$post->title}}" href="{!! route('news.single',$post->alias) !!}">Подробнее</a>
                    </section>
                </article>
            </div>
        </div>
    @empty
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <p>Постов нет.</p>
            </div>
        </div>
    @endforelse
    {{--Вывод постраничной навигации из view/vendor/pagination/default.blade.php--}}
    {!! $posts->render()!!}
@endsection