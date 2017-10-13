{{--Меню сайта--}}
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Hidden brand</a>
        <ul class="nav nav-pills">

            @if(!empty($menuTop))
                @foreach($menuTop as $menuItem)
                    <li class="nav-item">
                        <a class="nav-link" href="{{$menuItem->url}}">{{$menuItem->title}}</a>
                    </li>
                @endforeach
            @endif
        </ul>

    </div>
    {{--Подключение аворизации--}}
    {!! Widget::AuthWidget() !!}
</nav>