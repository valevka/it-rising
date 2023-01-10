@extends('layouts.base')
@section('welcome')
<!-- Шоукейс аля большой приветственный экран -->
<div class="header-showcase container">
            <div class="header-showcase-text">
                <h1 class="header-showcase-text-title">Начните изучать программирование прямо сейчас!</h1>
                <p class="header-showcase-text-descr">Портал IT-Rising - это навигатор в мире IT. Мы подобрали для вас
                    самые интересные и прорывные сайты, для отработки ваших теоретический и практических навыков
                    программирования. Для перехода к выбору языка нажмите кнопку ниже.</p>
                <a href="{{asset('/choose_lang#choose-prog-lang')}}" class="header-showcase-text-button">Начать</a>
            </div>
            <div class="header-showcase-link">
                <div class="header-showcase-link-image">
                    <img src="./public/img/header-images/navigation-showcase/navig-showcase-image.png" alt="Showcase Image">
                </div>
                <div class="header-showcase-link-icons">
                    <ul class="ul-header-showcase-icons">
                        <li><a href="#"><img
                                    src="./public/img/header-images/navigation-showcase/sosial-media-icons/Telegram-icon.png"
                                    alt="Telegram icon"></a></li>
                        <li><a href="#" target="_blank"><img
                                    src="./public/img/header-images/navigation-showcase/sosial-media-icons/GitHub-icon.png"
                                    alt="GitHub icon"></a></li>
                        <li><a href="#"><img
                                    src="./public/img/header-images/navigation-showcase/sosial-media-icons/Vkontakte-icon.png"
                                    alt="Vkontakte icon"></a></li>
                        <li><a href="#" target="_blank"><img
                                    src="./public/img/header-images/navigation-showcase/sosial-media-icons/Instagram-icon.png"
                                    alt="Instagram icon"></a></li>
                    </ul>
                </div>
            </div>
        </div>
@endsection
@section('content')
        <div class="choose-language-text">
            <h1 class="h1-choose-language-text">Выбор языка программирования</h1>
            <p class="p-choose-language-text">наведите -> нажмите -> изучайте</p>
        </div>

        <div class="language-cards-block row">

            <div class="main-training-list__languages">
                <ul>
                    <a href="{{asset('/html')}}">
                        <li class="training-list__languages__html training-list__languages__styles">
                            <div class="training-list__languages__styles__logo">
                                <h6>HTML</h6>
                            </div>
                        </li>
                        <div class="training-list__languages__styles__descr">
                            <h6>HTML & CSS</h6>
                            <p>Количество сайтов: 6</p>
                        </div>
                    </a>

                    <a href="{{asset('/js')}}">
                        <li class="training-list__languages__js training-list__languages__styles">
                            <div class="training-list__languages__styles__logo">
                                <h6>JS</h6>
                            </div>
                        </li>
                        <div class="training-list__languages__styles__descr">
                            <h6>JavaScript</h6>
                            <p>Количество сайтов: 6</p>
                        </div>
                    </a>

                    <a href="{{asset('/python')}}">
                        <li class="training-list__languages__py training-list__languages__styles">
                            <div class="training-list__languages__styles__logo">
                                <h6>PYTHON</h6>
                            </div>
                        </li>
                        <div class="training-list__languages__styles__descr">
                            <h6>Python</h6>
                            <p>Количество сайтов: 3</p>
                        </div>
                    </a>
                </ul>
                <ul class="main-training-list__languages__ul__last">
                    <a href="{{asset('/c')}}">
                        <li class="training-list__languages__c-plus training-list__languages__styles">
                            <div class="training-list__languages__styles__logo">
                                <h6>C++</h6>
                            </div>
                        </li>
                        <div class="training-list__languages__styles__descr">
                            <h6>C++</h6>
                            <p>Количество сайтов: 3</p>
                        </div>
                    </a>

                    <a href="{{asset('/php')}}">
                        <li class="training-list__languages__php training-list__languages__styles">
                            <div class="training-list__languages__php__logo training-list__languages__styles__logo">
                                <h6>PHP</h6>
                            </div>
                        </li>
                        <div class="training-list__languages__php__descr training-list__languages__styles__descr">
                            <h6>PHP</h6>
                            <p>Количество сайтов: 4</p>
                        </div>
                    </a>

                    <a href="{{asset('/c_sharp')}}">
                        <li class="training-list__languages__c-sharp training-list__languages__styles">
                            <div class="training-list__languages__c-sharp__logo training-list__languages__styles__logo">
                                <h6>C#</h6>
                            </div>
                        </li>
                        <div class="training-list__languages__c-sharp__descr training-list__languages__styles__descr">
                            <h6>C#</h6>
                            <p>Количество сайтов: 3</p>
                        </div>
                    </a>
                </ul>
            </div>

        </div>
@endsection