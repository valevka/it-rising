@extends('layouts.base')
@section('welcome')
        <!-- Шоукейс аля большой приветственный экран -->
        <div class="header-showcase container">
            <div class="header-showcase-text">
                <h1 class="header-showcase-text-title">Тренажёры по Python</h1>
                <p class="header-showcase-text-descr">Python — это высокоуровневый язык программирования общего
                    назначения, который используется в том числе и для разработки веб-приложений. Язык ориентирован на
                    повышение производительности разработчика и читаемости кода.Python поддерживает несколько парадигм
                    программирования: структурное, объектно-ориентированное, функциональное, императивное и
                    аспектно-ориентированное. В языке присутствет динамическая типизация, автоматическое управление
                    памятью, полная интроспекция, механизм обработки исключений, поддержка многопоточных вычислений и
                    удобные высокоуровневые структуры данных.
                </p>
            </div>
            <div class="header-showcase-link">
                <div class="header-showcase-link-image">
                    <img src="{{asset('/public/img/header-images/navigation-showcase/navig-showcase-image.png')}}"
                        alt="Showcase Image">
                </div>
                <div class="header-showcase-link-icons">
                    <ul class="ul-header-showcase-icons">
                        <li><a href="#"><img
                                    src="{{asset('/public/img/header-images/navigation-showcase/sosial-media-icons/Telegram-icon.png')}}"
                                    alt="Telegram icon"></a></li>
                        <li><a href="#" target="_blank"><img
                                    src="{{asset('/public/img/header-images/navigation-showcase/sosial-media-icons/GitHub-icon.png')}}"
                                    alt="GitHub icon"></a></li>
                        <li><a href="#"><img
                                    src="{{asset('/public/img/header-images/navigation-showcase/sosial-media-icons/Vkontakte-icon.png')}}"
                                    alt="Vkontakte icon"></a></li>
                        <li><a href="#" target="_blank"><img
                                    src="{{asset('/public/img/header-images/navigation-showcase/sosial-media-icons/Instagram-icon.png')}}"
                                    alt="Instagram icon"></a></li>
                    </ul>
                </div>
            </div>
        </div>
@endsection

@section('content')
        <div class="main-lang-pg__cards container">

            <div class="main-lang-pg__cards__styles">
                <div class="main-lang-pg__cards__styles__image">
                    <img src="{{asset('/public/img/main-images/training-previews/codebasics-logo.png')}}" alt="code-basics"
                        width="300px" height="300px">
                </div>
                <div class="main-lang-pg__cards__styles__info">
                    <div class="main-lang-pg__cards__styles__info__name">
                        <h4>Сode Basics</h4>
                        <p>RU</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__description">
                        <p>Это полностью бесплатная платформа для изучения основ программирования с нуля. Code Basics
                            был создан разработчиками и сообществом Хекслет для того, чтобы любой желающий мог
                            попробовать себя в программировании и заложить правильный фундамент для новой профессии,
                            основанный не на запоминании специфики, а на понимании системы в целом. Вы можете
                            познакомиться с основами языков JavaScript, PHP, Java, Python, Ruby, Racket, в процессе
                            доработки – Elixir и Go. Также на Code Basics доступны курсы по HTML и CSS.</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__button">
                        <a href="https://ru.code-basics.com/" target="_blank"
                            uk-icon="icon: chevron-double-right">Перейти</a>
                    </div>
                </div>
            </div>

            <div class="main-lang-pg__cards__styles">
                <div class="main-lang-pg__cards__styles__image">
                    <img src="{{asset('/public/img/main-images/training-previews/codewars-logo.svg')}}" alt="code wars" width="300px"
                        height="300px">
                </div>
                <div class="main-lang-pg__cards__styles__info">
                    <div class="main-lang-pg__cards__styles__info__name">
                        <h4>CodeWars</h4>
                        <p>ENG</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__description">
                        <p>Если вы хотите больше практических заданий и владеете английским (или хотя бы умеете гуглить
                            перевод), то у меня для вас хорошая новость! CodeWars точно для вас! CodeWars это место, где
                            можно попрактиковать технику написания кода + узнать чужие, более интересные техники. Сервис
                            реализован в стиле "восточных единоборств". Сам сайт уже не просто сайт, а – додзё; задачки
                            – ката; вы – солдат, воин, а не просто студент-программист, а код-ревью – кумите, спарринг.
                            Восточная тематика создает специфическую атмосферу – здесь хочется непрерывно развиваться и
                            становиться искуссным мастером. Порадовала сегментация задачек-ката по сложности. В общем,
                            заходи и развивайся, самурай!</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__button">
                        <a href="https://www.codewars.com/" target="_blank"
                            uk-icon="icon: chevron-double-right">Перейти</a>
                    </div>
                </div>
            </div>

            <div class="main-lang-pg__cards__styles">
                <div class="main-lang-pg__cards__styles__image">
                    <img src="{{asset('/public/img/main-images/training-previews/codingame-logo.svg')}}" alt="codinGame" width="300px"
                        height="300px">
                </div>
                <div class="main-lang-pg__cards__styles__info">
                    <div class="main-lang-pg__cards__styles__info__name">
                        <h4>CodinGame</h4>
                        <p>ENG</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__description">
                        <p>Codingame — еще одна популярная браузерная игра, одним из главных преимуществ которой
                            является поддержка огромного количества языков (более 25), включая Java, C#, Python,
                            JavaScript, Lua, Go, Rust и другие. Предлагает достаточно разнообразные тематические задачи
                            и паззлы, решать которые, как раз благодаря их разнообразию, не надоедает. Еще одной сильной
                            стороной Codingame является мультиплеер — играть можно с друзьями и коллегами, по игре также
                            регулярно проводятся международные соревнования.</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__button">
                        <a href="https://www.codingame.com/" target="_blank"
                            uk-icon="icon: chevron-double-right">Перейти</a>
                    </div>
                </div>
            </div>

            <div class="main-cards__other-cards">
                <p>На данный момент это все, но вы можете посмотреть другие сайты-тренажёры перейдя по <a
                        href="{{asset('/choose_lang#choose-prog-lang')}}">ссылке</a>.</p>

            </div>
        </div>
@endsection
   