<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>@yield('title')</title>
    <meta name="apple-mobile-web-app-title" content="">
    {{--Подключение стилей--}}
	@include('include.files.style')
    <meta name="description" content="@yield('description')">
</head>

<body style="overflow: auto;">

<div class="drag-drop-bg hide"></div>
<div class="main-wrapper-for-sticky-footer" style="padding-bottom: 305px;">
    <div class="header-outer-wrap">
        @yield('nav-menu')
    </div>

    <section role="main" class="content">
        @yield('content')
    </section>


</div>

<div class="sticky-footer-wrapper" style="position: static; bottom: auto; width: auto; height: auto; margin-top: -305px;">

    <div class="convertio-cards">

    </div>

    <footer>
        <div class="footer-wrap">

            <div class="footer-top clearfix">
                <div class="popular-conversation-title">
                    Популярные преобразования: </div>
                <div class="footer-nav popular-conversation-list-wrapper">
                    <ul class="list-unstyled clearfix">
                        <li><a href="https://convertio.co/ru/pdf-jpg/">PDF в JPG</a></li>
                        <li><a href="https://convertio.co/ru/pdf-doc/">PDF в DOC</a></li>
                        <li><a href="https://convertio.co/ru/pdf-xls/">PDF в XLS</a></li>
                        <li><a href="https://convertio.co/ru/doc-pdf/">DOC в PDF</a></li>
                        <li><a href="https://convertio.co/ru/mp4-avi/">MP4 в AVI</a></li>
                        <li><a href="https://convertio.co/ru/avi-mp4/">AVI в MP4</a></li>
                        <li><a href="https://convertio.co/ru/pdf-xps/">PDF в XPS</a></li>
                        <li><a href="https://convertio.co/ru/mkv-mp4/">MKV в MP4</a></li>
                        <li><a href="https://convertio.co/ru/jpg-pdf/">JPG в PDF</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-middle clearfix">
                <div class="counter">

                    Статистика: <span>77,986,862 файла</span> общим объемом <span>1,031.19 ТБ</span> </div>
                <span style="float: right; display:inline-block; padding: 6px 0px; font-size:15px; color:#555">Мы делаем это с <span style="color: #773434; font-size:21px">♥</span></span>

            </div>
            <div class="footer-bottom">
                <div class="footer-bottom-top-row clearfix">

                    <div class="footer-nav">

                    </div>
                </div>
                <div class="footer-bottom-bottom-row clearfix">
                    <div class="footer-nav softo-projects-nav">
                        <ul class="list-unstyled clearfix">
                            <li><a href="https://convertio.co/ru/contacts/">Контакты</a></li>
                            <li><a href="https://convertio.co/ru/privacy/">Privacy</a></li>
                            <li><a href="https://convertio.co/ru/terms/">Terms</a></li>
                            <li><a href="https://convertio.co/ru/formats/">Форматы</a></li>

                            <li><a href="https://convertio.co/ru/ocr/">OCR</a></li>
                            <li><a href="https://convertio.co/ru/api/">API</a></li>
                        </ul>
                    </div>
                    <div class="language-select-wrapper" style="float:right">
                        <select class="language-select" name="language-select" style="margin-right:0px">
                            <option>Русский</option>
                            <option value="https://convertio.co/ar/">العربية</option>
                            <option value="https://convertio.co/zh/">中文</option>
                            <option value="https://convertio.co/fr/">Français</option>
                            <option value="https://convertio.co/de/">Deutsch</option>
                            <option value="https://convertio.co/">English</option>
                        </select>
                    </div>
                    <div class="copyright" style="clear:both; float:left; padding-top:10px">
                        © 2014-2017 Convertio. Все права защищены.
                    </div>
                </div>
            </div>
        </div>

    </footer>

</div>


<div class="popup-box" id="general_popup">
    <h2 class="popup-title">
        <span type="title"></span>
        <span class="close-popup"></span>
    </h2>
    <div class="popup-body">
        <div class="inputs"></div>
        <div class="buttons-wrapper">
            <div class="submit-popup"></div>
        </div>
    </div>
</div>

<div class="popup-box" id="remove_limits_popup">
    <h2 class="popup-title">
        Увеличьте лимит на размер файла до 1 ГБ. Это бесплатно!
        <span class="close-popup"></span>
    </h2>

    <div class="popup-body">
        <div class="inputs">
        </div>
        <div class="buttons-wrapper">
            <div class="submit-popup">Снять лимиты</div>
        </div>
    </div>
</div>

<div class="popup-box" id="addurl_popup">
    <h2 class="popup-title">
        Добавить веб-сайт или файл по URL
        <span class="close-popup"></span>
    </h2>

    <div class="popup-body">
        <div class="inputs">
            <input type="text" name="url[]" placeholder="http://...">
            <div class="add-more">добавить еще один url</div>
        </div>
        <div class="buttons-wrapper">
            <div class="submit-popup">Ок</div>
            <div class="cancel-popup">Отмена</div>
        </div>
    </div>
</div>

<div class="popup-box" id="settings_popup">
    <h2 class="popup-title">
        Настройки
        <span class="close-popup"></span>
    </h2>
    <form>
        <div class="popup-body">
            <div class="inputs">
                Video: <input type="text" name="video[]" placeholder=""> Audio: <input type="text" name="audio[]" placeholder="">
            </div>
            <div class="buttons-wrapper">
                <div class="submit-popup">Ок</div>
                <div class="cancel-popup">Отмена</div>
            </div>
        </div>
    </form>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="{{asset('js/script.js')}}"></script>
</html>
