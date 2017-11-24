{{-- Вывод сайдбара --}}
<div class="widget-sidebar">
    <h2 class="title-widget-sidebar">// CATEGORIES</h2>
    @forelse($allTerms as $term)
        <a href="{!! route('topic.alias', $term->alias) !!}" class="categories-btn" data-alias="{{$term->alias}}">{{$term->name}}</a>
    @empty
        <a href="/" class="categories-btn" data-alias="">Категорий нет</a>
    @endforelse
</div>