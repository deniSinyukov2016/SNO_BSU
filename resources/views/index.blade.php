@extends('layouts.index')
@section('title','Научное сообщество молодежи НИУ БелГУ - Новости')
@section('nav-menu')
    <header style="padding-top: 116px;">
        <div class="header-top-wrap">
            <nav class="softo-bar">
                <div class="softo-bar-container">
                    <div class="navbar-collapse-custom">
                        <ul class="link-list">
                            <li><a href="">OCR</a></li>
                            <li><a href="">Цена Bitcoin</a></li>
                            <li class="new-item"><a href="" style="color:#dcdcdc">PDF в Word</a><span class="new">NEW</span></li>
                            <li><a href="">PDF в Excel</a></li>
                            <li><a href="">PDF в PPT</a></li>
                        </ul>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="softo-bar-toggle">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-wrapper">
                            <a href="" class="logo" target="_blank"></a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="header-top clearfix">
                <a href="https://convertio.co/ru/" class="logo"></a>
                <nav class="header-nav main-nav">
                    <ul class="clearfix list-unstyled">

                        {{--Вывод меню--}}
                        @forelse($menus as $menu)
                            @if($menu->active != 0)
                                <li><a href="{{$menu->url}}">{{$menu->title}}</a></li>
                            @endif
                        @empty
                        @endforelse

                        {{--<li>--}}
                            {{--<a class="ico-thin-arrow-down" style="cursor:pointer">Преобразовать</a>--}}
                            {{--<div class="header-sub-nav">--}}
                                {{--<div class="inner-wrapper">--}}
                                    {{--<ul class="list-unstyled list-inline">--}}
                                        {{--<li><a href="https://convertio.co/ru/audio-converter/" class="ico-audio">Конвертер аудио</a></li>--}}
                                        {{--<li><a href="https://convertio.co/ru/video-converter/" class="ico-video">Конвертер видео</a></li>--}}
                                        {{--<li><a href="https://convertio.co/ru/image-converter/" class="ico-image">Конвертер изображений</a></li>--}}
                                        {{--<li><a href="https://convertio.co/ru/document-converter/" class="ico-document">Конвертер документов</a></li>--}}
                                        {{--<li><a href="https://convertio.co/ru/archive-converter/" class="ico-archive">Конвертер архивов</a></li>--}}
                                        {{--<li><a href="https://convertio.co/ru/presentation-converter/" class="ico-presentation">Конвертер презентаций</a></li>--}}
                                        {{--<li><a href="https://convertio.co/ru/font-converter/" class="ico-font">Конвертер шрифтов</a></li>--}}
                                        {{--<li><a href="https://convertio.co/ru/ebook-converter/" class="ico-ebook">Конвертер электронных книг</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}


                    </ul>
                </nav>


                <div class="guest-menu header-nav">
                    <ul class="clearfix list-unstyled">
                        <li class="login-form-container">
                            <a class="login-badge ">
                                Вход
                            </a>
                            <div class="login-forms-wrapper">
                                <div class="login-form">
                                    <div id="login_form_err" style="color:red; margin-bottom:10px"></div>
                                    <form id="login_form">
                                        <div class="form-input">
                                            <input name="email" type="email" placeholder="Электронная почта">
                                        </div>
                                        <div class="form-input with-recovery-button">
                                            <input name="pass" type="password" placeholder="Пароль">
                                            <div class="recovery-password-button">?</div>
                                        </div>
                                        <div class="clearfix">
                                            <button class="submit-button pull-left">Вход</button>

                                            <div action="fb_login" class="facebook-login pull-right"></div>
                                            <div action="google_login" class="google-login pull-right"></div>

                                        </div>
                                    </form>
                                </div>
                                <div class="password-recovery-form">
                                    <div class="recovery-descroption">
                                        Введите свой адрес электронной почты ниже, и мы отправим вам инструкции по сбросу пароля.
                                    </div>
                                    <form id="pass_recovery">
                                        <div class="form-input with-recovery-button">
                                            <input type="email" placeholder="Электронная почта">
                                        </div>
                                        <button class="submit-button display-block">
                                            Отправить инструкции
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="" class="add-to-chrome" style="padding: 4px 7px !important; margin-left:25px !important">
                                Регистрация
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <h1 style="width: 1024px; margin:0 auto">Конвертер файлов. Онлайн и Бесплатно</h1>
            <p style="width: 800px; margin:0 auto">Лучший сервис для преобразования файлов в любой формат</p>
        </div>
    </header>
@endsection
@section('content')
    <div class="content-wrapper" style="direction: ltr">
        <div class="file-source-button-wrapper hide">
            <div class="file-source-title">
                Выберите файлы для преобразования

            </div>
            <label for="pc-upload-add" class="file-source-button clearfix" style="width: 420px;">

                <div class="action-label">
                    <span class="default-text">С компьютера</span>
                    <span class="custom-text"></span>
                </div>
                <div class="from-pc "></div>
                <div class="from-dropbox source-dropbox" data-action-label="Из Dropbox"></div>
                <div class="from-drive source-g-drive" data-action-label="Из Google Drive"></div>
                <div class="from-url" data-action-label="URL"></div>

            </label>
            <input type="file" id="pc-upload-add" name="pc-upload" class="file-input" multiple="">

            <div class="file-source-annotation">
                или перетяните их на страницу
            </div>
        </div>



        <div id="div_err_msg" class="warning-block error-style hide" style="width:750px; margin:0 auto">
            <div class="warning-close"></div>
            <div><span class="file-status error">Ошибка</span></div>
            <div class="warning-massage">

            </div>
            <div class="warning-actions">
                <a href="https://convertio.co/ru/#">
                    <button class="button-success reset-button">

                    </button>
                </a>
            </div>
        </div>

        <div class="same-width-wrapper">
            <div class="same-width" style="min-width:750px">

                <div class="file-menu">

                    <div type="file_row" class="preload-title" proc="no" id="b65bda0f60734fdafadb983a5b3d1ce9">
                        <div class="filename">
                            <span class="mime-type-img" style="background: url(&quot;https://convertio.co/img/icons/misc-mini.png&quot;) center center no-repeat;"></span>
                            <span type="fn">Презентация.ppt</span>
                        </div>
                        <div class="source_inline_wrapper hide" style="display: table-cell; vertical-align:middle; padding-left:20px">
                            <span><input name="source" type="radio" value="html" checked=""> html</span>
                            <span><input name="source" type="radio" value="video"> video</span>
                            <span><input name="source" type="radio" value="audio"> audio</span>
                        </div>

                        <div class="file-info">
                            <span class="file-status finish">Завершено</span>
                            <span class="error-text hide"></span>
                            <span class="download-process hide"></span>
                            <span class="filesize">PDF / 1.81 MB</span>
                        </div>
                        <div class="action-wrapper">
                            <a type="download" href="https://serge.convertio.me/p/NhzV3e-fwe-SV0jDZ2Gq6A/daa0b0a1146c4c1c5d82759cf657d0a6/%D0%9F%D1%80%D0%B5%D0%B7%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F.pdf">
                                <div class="action download" type="download">Скачать</div>
                            </a>
                        </div>
                        <div class="close-wrapper">
                            <div class="close"></div>
                        </div>
                    </div>

                    <div class="add-more-wrapper">
                        <!--                For disable add class "disabled" to "add-more"-->
                        <ul class="add-more-from-source">
                            <li>
                                <div class="add-more">
                                    <span class="add-more-plus"></span> Добавить еще файлы
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="destination visitor-view" style="min-width:750px">
                    <div class="to-cloud-storage">
                        <div>Сохранить результат в</div>
                        <button class="g_drive">Google Drive</button>
                        <button class="dropbox">Dropbox</button>
                    </div>
                    <div class="to-email">
                        <div>
                            <input type="checkbox" name="to_email" value="1"> Отправить мне уведомление по окончании!
                        </div>
                        <input type="email" name="email" placeholder="yourmail@domain.com" value="" readonly="" disabled="disabled">
                    </div>
                </div>

            </div>
        </div>
        <!-- width-wrapper -->

        <!--        For process colors, add class "in-process" to "start-convert-button" -->
        <button class="start-convert-button disabled" style="opacity: 0.2;"><span class="button-logo"></span> <span class="button-text">Преобразовать</span>
        </button>
    </div>
@endsection