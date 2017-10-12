{{-- Вывод сайдбара --}}
<div class="list-group">
    <span href="#" class="list-group-item active">
        Категории
        <span class="pull-right" id="slide-submenu">
            <i class="fa fa-times"></i>
        </span>
    </span>
    @forelse($allTerms as $term)
        <a href="{{$term->url}}}" class="list-group-item" data-alias="{{$term->alias}}">
            <i class="fa fa-comment-o"></i> {{$term->name}}
        </a>
    @empty
        <span class="list-group-item">
            <i class="fa fa-comment-o"></i> Категорий нет
        </span>
    @endforelse

</div>