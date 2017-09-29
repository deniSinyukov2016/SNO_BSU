@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h1>{{$posts.show}}</h1>
                <h2>{{$post->content}}</h2>

            </div>
        </div>
    </div>
</div>
@endsection
