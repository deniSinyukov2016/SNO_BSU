{{--Вывод 4-х последних постов--}}
<div class="widget-sidebar">
    <h2 class="title-widget-sidebar">// RECENT POST</h2>
    <div class="content-widget-sidebar">
        <ul>
            @forelse($recent as $post)
            <li class="recent-post" data-post="{{$post->id}}">
                <div class="post-img">
                    <img src="{{$post->thumbnail}}" class="img-responsive" alt="{{$post->title}}" title="{{$post->title}}">
                </div>
                <a href="{!! route('news.single',$post->alias) !!}"><h5>{{$post->title}}</h5></a>
                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> {{\Carbon\Carbon::parse($post->created_at)->format('d.m.Y')}}</small></p>
            </li>
            @empty
                <li class="recent-post">
                    <p>Постов нет.</p>
                </li>
            @endforelse
            <hr>
        </ul>
    </div>
</div>