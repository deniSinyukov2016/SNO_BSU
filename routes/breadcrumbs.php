<?php

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Главная', route('home'));
});

// News
Breadcrumbs::register('news.index', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Новости', route('news.index'));
});


Breadcrumbs::register('news.single', function ($breadcrumbs, $post) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Новости', route('news.index'));
//    $breadcrumbs->parent('news.index');
//    $breadcrumbs->push($post, route('news.single', $post));
});
?>