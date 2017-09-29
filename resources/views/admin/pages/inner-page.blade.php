@extends('layouts.index')
@section('title', 'Новости научного студенческого общества')
@section('content')
    <div class="col-sm-8 col-md-9 sidebar">
    <p>Новости</p>
    <posts>
        @forelse ($posts as $post)

            <div class="items-leading">
                <div class="leading-0 item">
                    <p class="create">{{$post->created_at}} </p>
                    <h2>
                        <a href="{{$post->url}}"> {{$post->title}}</a>
                    </h2>

                    <p><img src="" border="0" width="180" height="135" style="float: left; margin-left: 15px; margin-right: 15px;">
                        {{$post->content}}
                    </p>

                    <p class="readmore">
                        <a href="posts/{{$post->id}}" class="btn-primary">Подробнее</a>
                    </p>
                    <div class="item-separator"></div>
                </div>
            </div>
        @empty
            <div class="alert alert-success">
                <p>Здесь пока ничего нет.</p>
            </div>

        @endforelse

    </posts>
@endsection
    </div>