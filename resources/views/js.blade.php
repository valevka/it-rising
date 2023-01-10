@extends('layouts.base')
@section('welcome')
        <!-- Шоукейс аля большой приветственный экран -->
        <div class="header-showcase container">
            <div class="header-showcase-text">
                <h1 class="header-showcase-text-title">Тренажёры по JavaScript</h1>
                <p class="header-showcase-text-descr">JavaScript — это полноценный динамический язык программирования,
                    который применяется к HTML документу, и может обеспечить динамическую интерактивность на веб-сайтах.
                    JavaScript невероятно универсален и дружелюбен к новичкам. Обладая большим опытом, вы сможете
                    создавать игры, анимированную 2D и 3D графику, полномасштабные приложения с базами данных и многое
                    другое! JavaScript сам по себе довольно компактный, но очень гибкий...
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
                    </ul>
                </div>
            </div>
        </div>
  @endsection


  @section('content')
        <div class="main-lang-pg__cards container">
            <div class="main-lang-pg__cards__styles">
                <div class="main-lang-pg__cards__styles__image">
                    <img src="{{asset('/public/img/main-images/training-previews/codewars-logo.svg')}}" alt="Code Wars" width="300px"
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
                    <img src="{{asset('/public/img/main-images/training-previews/learnjs-logo.png')}}" alt="learn Js" width="300px"
                        height="300px">
                </div>
                <div class="main-lang-pg__cards__styles__info">
                    <div class="main-lang-pg__cards__styles__info__name">
                        <h4>Learn JS</h4>
                        <p>RU</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__description">
                        <p>Здесь вы можете изучить JavaScript, начиная с нуля и заканчивая продвинутыми концепциями
                            вроде ООП. Вы сосредоточитесь на самом языке, изредка добавляя заметки о средах его
                            исполнения. Так же этот сайт идеально подойдет для людей, которые только-только хотят
                            погрузиться в мир JavaScript. </p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__button">
                        <a href="https://learn.javascript.ru/" target="_blank"
                            uk-icon="icon: chevron-double-right">Перейти</a>
                    </div>
                </div>
            </div>

            <div class="main-lang-pg__cards__styles">
                <div class="main-lang-pg__cards__styles__image">
                    <img src="{{asset('/public/img/main-images/training-previews/html5book.png')}}" alt="Html Book" width="300px"
                        height="300px">
                </div>
                <div class="main-lang-pg__cards__styles__info">
                    <div class="main-lang-pg__cards__styles__info__name">
                        <h4>HTML5Book</h4>
                        <p>RU</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__description">
                        <p>Существует еще один сайт под названием htmlbook.ru. Из-за схожести названий можно перепутать,
                            но отличаются названия тем, что в этом сайте в середине названия добавлена цифра 5 Это
                            относительно новый сайт, в котором прекрасно подан детальный базовый материал для
                            frontend-разработчика, а именно html5, css3 и JavaScript. Тут также есть уроки, которые
                            можно проходить. Учитывая, что веб-разработка является популярной и актуальной на
                            сегодняшний день, изучить эти три языка, как минимум, обязательно. Для JS изучить еще
                            библиотеки и фреймворки.</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__button">
                        <a href="https://html5book.ru/" target="_blank" uk-icon="icon: chevron-double-right">Перейти</a>
                    </div>
                </div>
            </div>

            <div class="main-lang-pg__cards__styles">
                <div class="main-lang-pg__cards__styles__image">
                    <img src="{{asset('/public/img/main-images/training-previews/codingame-logo.svg')}}" alt="CodinGame" width="300px"
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

            <div class="main-lang-pg__cards__styles">
                <div class="main-lang-pg__cards__styles__image">
                    <img src="{{asset('/public/img/main-images/training-previews/codebasics-logo.png')}}" alt="CodeBasics"
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
                    <img src="{{asset('/public/img/main-images/training-previews/mdn-logo.png')}}" alt="MDN" width="300px"
                        height="300px">
                </div>
                <div class="main-lang-pg__cards__styles__info">
                    <div class="main-lang-pg__cards__styles__info__name">
                        <h4>MDN</h4>
                        <p>RU</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__description">
                        <p>Сайт веб-документации MDN - это развивающаяся платформа для обучения Веб-технологиям и
                            программному обеспечению, на которых основан Веб, включая: Веб-стандарты, например, CSS,
                            HTML и JavaScript, а так же разработку открытых веб-приложений. Миссия MDN очень проста: это
                            предоставление законченной, точной и полезной документации для всего, что хоть как-то
                            относится к Открытому Интернету, и не важно является ли это программным обеспечением от
                            Mozilla или нет. Если есть открытая технология, относящаяся к Web, мы хотим
                            задокументировать её.</p>
                    </div>
                    <div class="main-lang-pg__cards__styles__info__button">
                        <a href="https://developer.mozilla.org/ru/docs/Web" target="_blank"
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
   