{{--Подключние шапки--}}
@include('include.head')

<div class="row">
    <div class="col-sm-8 col-md-9 content">
        @yield('content')
    </div>
    <div class="col-sm-4 col-md-3 sidebar">
        <div class="mini-submenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        {{-- Подключение сайдбара --}}
    </div>
</div>

{{--Подклчючение подвала--}}
@include('include.footer')