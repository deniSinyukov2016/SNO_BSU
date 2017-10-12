{{--Вывод авторизации--}}
<ul class="nav pull-right" style="min-width: 100px;">
@if (Auth::guest())

        <li class="nav-item">
            <a class="nav-link active" href="{{route('login')}}">Вход</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Регистрация</a>
        </li>

@else

    <li class="dropdown ">
        <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu" >
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Выйти
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>

@endif
</ul>
