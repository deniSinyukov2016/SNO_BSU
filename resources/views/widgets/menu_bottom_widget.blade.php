{{--Вывод меню в подвале--}}
<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
    <h6 class="title mb-4 font-bold">Полезные ссылки</h6>
    @if(!empty($menuBottom))
        @foreach($menuBottom as $menuItem)
            <p><a href="{{$menuItem->url}}">{{$menuItem->title}}</a></p>
        @endforeach
    @endif

</div>