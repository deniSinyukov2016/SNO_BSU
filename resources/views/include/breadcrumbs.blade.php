{{--Новая верстка хлебных крошек (см. vendor\davejamesmiller\laravel-breadcrumbs\views\bootstrap2.blade.php)--}}
<div class="row">
    <div class="col-md-12">
        @if ($breadcrumbs)
            <nav class="breadcrumb alert-info">
                @foreach ($breadcrumbs as $breadcrumb)
                    @if ($breadcrumb->last)
                        <span>{{ $breadcrumb->title }}</span>
                    @elseif ($breadcrumb->url)
                        <a href="{{ $breadcrumb->url }}" class="breadcrumb-item" >{{ $breadcrumb->title }}</a>
                        <span class="divider">/</span>
                    @else
                        <span>{{ $breadcrumb->title }}</span>
                        <span class="divider">/</span>
                    @endif
                @endforeach
                {{--Подключение поиска--}}
                {{--{!! Widget::SearchWidget() !!}--}}
            </nav>
        @endif
    </div>
</div>