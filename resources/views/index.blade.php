@extends('layouts.inner-page')
@section('title','Научное сообщество молодежи НИУ БелГУ - Новости')
@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <article class="blog-post">
        <header>
            <h2 class="blog-post-title"><a href="">Creating a New Theme</a></h2>
            <p class="blog-post-meta"><time datetime="2014-09-28T00:00:00Z">Sun Sep 28, 2014</time> by Michael Henderson</p>
        </header>
        Introduction This tutorial will show you how to create a simple theme in Hugo. I assume that you are familiar with HTML, the bash command line, and that you are comfortable using Markdown to format content. I’ll explain how Hugo uses templates and how you can organize your templates to create a theme. I won’t cover using CSS to style your theme.
        We’ll start with creating a new site with a very basic template.
        <a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/2014/09/creating-a-new-theme/">Read more →</a>
    </article>
    <article class="blog-post">
        <header>
            <h2 class="blog-post-title"><a href="">Creating a New Theme</a></h2>
            <p class="blog-post-meta"><time datetime="2014-09-28T00:00:00Z">Sun Sep 28, 2014</time> by Michael Henderson</p>
        </header>
        Introduction This tutorial will show you how to create a simple theme in Hugo. I assume that you are familiar with HTML, the bash command line, and that you are comfortable using Markdown to format content. I’ll explain how Hugo uses templates and how you can organize your templates to create a theme. I won’t cover using CSS to style your theme.
        We’ll start with creating a new site with a very basic template.
        <a href="">Read more →</a>
    </article>
@endsection